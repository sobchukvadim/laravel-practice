<?php

namespace App\Console\Commands\English;

use App\Models\Words;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class Play extends Command
{
    /**
     * The name and signature of the console command.
     * english:play
     * english:play -i
     * english:play --important
     *
     * @var string
     */
    protected $signature = 'english:play {--i|important}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $onlyImportant = $this->option('important');

        $record = $this->getRandomRecord(onlyImportant: $onlyImportant);
        $this->line($record->word);

        if ($this->confirm('Do you wish to continue?', true)) {
            // ...
            // $this->line($record->translation);
            $this->handle();
        }


        return CommandAlias::SUCCESS;
    }

    /**
     * @param bool $onlyImportant
     * @return Words|null
     */
    protected function getRandomRecord(bool $onlyImportant): ?Words
    {
        $query = Words::inRandomOrder();

        if ($onlyImportant) {
            $query->where('is_important', true);
        }

        return $query->first();
    }
}
