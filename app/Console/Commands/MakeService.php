<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeService extends Command
{
    protected $signature = 'make:service {name}';

    protected $description = 'Create a new service class';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->argument('name');
        $serviceClassName = ucfirst($name) . 'Service';
        $serviceFilePath = app_path("Services/{$serviceClassName}.php");

        if (!File::exists(app_path('Services'))) {
            // Create the Services directory if it doesn't exist
            File::makeDirectory(app_path('Services'), 0755, true, true);
        }

        if (File::exists($serviceFilePath)) {
            $this->error('Service already exists!');
            return;
        }

        $content = "<?php\n\nnamespace App\Services;\n\n";
        $content .= "class {$serviceClassName}\n{\n";
        $content .= "    public function __construct()\n";
        $content .= "    {\n";
        $content .= "        //\n";
        $content .= "    }\n";
        $content .= "}\n";

        File::put($serviceFilePath, $content);

        $this->info("Service created successfully: {$serviceClassName}");
    }
}
