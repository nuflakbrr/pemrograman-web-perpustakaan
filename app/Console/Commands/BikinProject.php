<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\confirm;
use function Laravel\Prompts\info;
use function Laravel\Prompts\text;
use function Laravel\Prompts\select;
use function Laravel\Prompts\warning;

class BikinProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bikinproject:install {name? : The project name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the BikinProject: Laravel + Filament installation process';

    /**
     * Additioanl Package.
     *
     * @var array
     */
    private $additionalPackages = [];

    /**
     * Initialize Git.
     *
     * @var bool
     */
    private $initializeGit = false;

    /**
     * Node Package Manager.
     *
     * @var string
     */
    private $nodePackageManager = 'npm';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        app()->detectEnvironment(function () {
            return 'local';
        });

        info('Starting BikinProject: Laravel + Filament installation...');

        // Remove existing Git repository first
        $this->removeGitRepository();
        $this->nodePackageManager();
        $this->setupEnvFile();
        $this->reloadEnvironment();
        $this->generateAppKey();
        $this->runMigrations();
        // $this->installPan();
        // $this->installSolo();
        $this->setProjectName();
        $this->storageLink();

        $this->cleanup();

        // Initialize Git repository after cleanup if requested
        $this->initializeGitRepository();

        info('BikinProject: Laravel + Filament installation completed successfully! 🎉');
        info('👉 Run `php artisan solo` (if you install solo in Linux / Mac only) or `composer run dev` to start the local server.');
        info('Happy Coding! 👋');
    }

    /**
     * Remove existing Git repository.
     */
    private function removeGitRepository()
    {
        info('⌛ Checking Git repository status...');

        if (File::isDirectory(base_path('.git'))) {
            // Remove existing Git repository
            File::deleteDirectory(base_path('.git'));
            info('Removed existing Git repository.');
        }

        // Ask if user wants to initialize a new repository after cleanup
        $this->initializeGit = confirm('🤔 Would you like to initialize a fresh Git repository after installation?', true);
    }

    /**
     * Node Package Manager.
     */
    private function nodePackageManager()
    {
        // Run npm install
        if (!File::exists('node_modules')) {
            $this->nodePackageManager = select(
                label: '🤔 Which Node.js package manager would you like to use?',
                options: ['npm', 'yarn', 'pnpm', 'bun'],
                default: 'npm'
            );

            info('🚚 Running ' . $this->nodePackageManager . ' install...');

            exec($this->nodePackageManager . ' install');
        } else {
            warning('⚠️ Node modules already exist. Skipping installation node packages.');
        }
    }

    /**
     * Initialize Git repository.
     */
    private function initializeGitRepository()
    {
        if ($this->initializeGit) {
            info('⌛ Initializing fresh Git repository...');

            exec('git init');

            // Create a basic .gitignore if it doesn't exist
            if (!File::exists(base_path('.gitignore'))) {
                File::put(base_path('.gitignore'), implode("\n", [
                    '/.phpunit.cache',
                    '/node_modules',
                    '/public/build',
                    '/public/hot',
                    '/public/storage',
                    '/storage/*.key',
                    '/storage/pail',
                    '/vendor',
                    '.env',
                    '.env.backup',
                    '.env.production',
                    '.phpactor.json',
                    '.phpunit.result.cache',
                    'Homestead.json',
                    'Homestead.yaml',
                    'auth.json',
                    'npm-debug.log',
                    'yarn-error.log',
                    'package-lock.json',
                    'yarn.lock',
                    'pnpm-lock.yaml',
                    'bun.lockb',
                    'composer.lock',
                    '/.fleet',
                    '/.idea',
                    '/.nova',
                    '/.vscode',
                    '/.zed',
                ]));
                info('✅ Created .gitignore file.');
            }

            // Create initial commit with everything
            exec('git add .');
            exec('git commit -m "initial commit"');

            info('✅ Git repository initialized with initial commit.');
        }
    }

    /**
     * Setup .env file.
     */
    private function setupEnvFile()
    {
        info('⌛ Setting up .env file...');

        if (!File::exists('.env')) {
            File::copy('.env.example', '.env');
            info('✅ .env file created successfully.');
        } else {
            warning('⚠️ .env file already exists. Skipping creation.');
        }

        // Ensure APP_ENV is set to local
        $envContent = File::get('.env');
        if (! preg_match('/^APP_ENV=/', $envContent)) {
            $this->updateEnv('APP_ENV', 'local');
            info('✅ APP_ENV set to local.');
        } else {
            $envContent = preg_replace('/^APP_ENV=(.*)$/m', 'APP_ENV=local', $envContent);
            $this->updateEnv('APP_ENV', 'local');
            info('✅ APP_ENV updated to local.');
        }
    }

    /**
     * Generate application key.
     */
    private function generateAppKey()
    {
        info('⌛ Checking application key...');
        if (empty(env('APP_KEY'))) {
            $this->call('key:generate');
        } else {
            warning('⚠️ Application key already exists. Skipping.');
        }
    }

    /**
     * Run database migrations.
     */
    private function runMigrations()
    {
        if (confirm('🤔 Do you want to run database migrations?', true)) {
            info('⌛ Running database migrations...');
            $this->call('migrate', [
                '--force' => true, // This will bypass the production check
            ]);
        }
    }

    /**
     * Set the project name.
     */
    private function setProjectName()
    {
        $defaultName = $this->argument('name') ?: basename(getcwd());
        $name = text(
            label: '🤔 What is the name of your project?',
            placeholder: $defaultName,
            default: $defaultName,
            required: true
        );

        $this->updateEnv('APP_NAME', $name);

        $defaultUrl = 'http://localhost:8000/';
        $url = text(
            label: '🤔 What is the URL of your project?',
            placeholder: $defaultUrl,
            default: $defaultUrl,
            required: true
        );

        $this->updateEnv('APP_URL', $url);
    }

    /**
     * Create a symbolic link from "public/storage" to "storage/app/public".
     */
    private function storageLink()
    {
        info('⌛ Creating storage link...');
        $this->call('storage:link');
        info('✅ Storage link created.');
    }

    /**
     * Update the .env file.
     *
     * @param string $key
     * @param string $value
     */
    private function updateEnv($key, $value)
    {
        $path = base_path('.env');

        if (File::exists($path)) {
            file_put_contents($path, preg_replace(
                "/^{$key}=.*/m",
                "{$key}=\"{$value}\"",
                file_get_contents($path)
            ));
        }
    }

    /**
     * Cleanup the installation files.
     */
    private function cleanup()
    {
        if (confirm('🤔 Do you want to remove the installation files?', true)) {
            info('⌛ Removing installation files...');

            // Remove the entire Commands folder
            File::deleteDirectory(app_path('Console'));

            // Remove the install.sh script
            File::delete(base_path('install.sh'));

            info('✅ Installation files removed.');
        } else {
            info('Installation files kept. You can manually remove them later if needed.');
        }
    }

    /**
     * Reload the environment.
     */
    private function reloadEnvironment()
    {
        $app = app();
        $app->bootstrapWith([
            \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class,
        ]);
    }

    /**
     * Install Pan.
     */
    private function installPan()
    {
        $this->call('install:pan');
    }

    /**
     * Install Solo.
     */
    private function installSolo()
    {
        if (confirm('🤔 Do you want to install Solo?', true)) {
            $this->call('solo:install');
        } else {
            info('Solo installation skipped.');
        }
    }
}
