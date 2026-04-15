<?php
require_once 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Project;

try {
    $projects = Project::all();
    echo "Count: " . $projects->count() . "\n";
    foreach ($projects as $p) {
        echo "- " . $p->title . "\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
