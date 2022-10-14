<?php

namespace LaravelPortugal\Locale;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;

class LocalePublishCommand extends Command
{
    use ConfirmableTrait;

    protected $signature = 'laravel-portugal:locale-publish {--force : Overwrite any existing files}';

    protected $description = 'Publish all portuguese locale files.';

    public function handle()
    {
        if (! $this->confirmToProceed()) {
            return 1;
        }

        if (! is_dir($langPath = $this->laravel->basePath('lang/pt'))) {
            (new Filesystem())->makeDirectory($langPath);
        }

        $files = collect(File::files(__DIR__ . '/../lang/pt'))
            ->unless($this->option('force'), fn ($files) => $this->unpublished($files));

        $published = $this->publish($files);

        $this->components->info("{$published} / {$files->count()} lang published.");
    }

    public function unpublished(Collection $files): Collection
    {
        return $files->reject(function (SplFileInfo $file) {
            return file_exists($this->targetPath($file));
        });
    }

    public function publish(Collection $files): int
    {
        return $files->reduce(function (int $published, SplFileInfo $file) {
            file_put_contents($this->targetPath($file), file_get_contents($file->getPathname()));

            return $published + 1;
        }, 0);
    }

    public function targetPath(SplFileInfo $file): string
    {
        return "{$this->laravel->basePath('lang/pt')}/{$file->getFilename()}";
    }
}
