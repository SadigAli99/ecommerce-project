<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';
    protected $description = 'Make a new service';

    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $name = str_replace(['\\', '',], DIRECTORY_SEPARATOR, $name);
        $servicePath = app_path("Services" . DIRECTORY_SEPARATOR . $name . ".php");
        $directory = dirname($servicePath);
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        if (File::exists(($servicePath))) {
            $this->error("Service $name is already exists");
            return;
        }

        $namespace = 'App\\Services\\' . str_replace('/', '\\', dirname($name));
        if ($namespace === 'App\\Services\\') {
            $namespace = 'App\\Services\\';
        }

        $classname = basename($name);

        $content = <<<PHP
        <?php

        namespace {$namespace};

        class {$classname} extends MainService
        {
            //
        }

        PHP;

        File::put($servicePath, $content);
        $this->info("Service $classname created successfully");
    }
}
