<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Finder\Finder;

class ListProjectClasses extends Command
{
    protected $signature = 'project:list-classes';
    protected $description = 'List all project classes';

    public function handle()
    {
        $finder = new Finder();
        $finder->files()->in(app_path())->name('*.php');

        foreach ($finder as $file) {
            $namespace = $this->getNamespace($file);
            $class = $this->getClass($file);
            if ($namespace && $class) {
                $this->info("{$namespace}\\{$class}");
            }
        }
    }

    private function getNamespace($file)
    {
        $contents = $file->getContents();
        if (preg_match('/namespace\s+(.+?);/', $contents, $matches)) {
            return $matches[1];
        }
        return null;
    }

    private function getClass($file)
    {
        $contents = $file->getContents();
        if (preg_match('/class\s+(\w+)/', $contents, $matches)) {
            return $matches[1];
        }
        return null;
    }
}
