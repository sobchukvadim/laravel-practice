<?php

namespace App\Console\Commands\English;

use App\Models\Words;
use Exception;
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
    protected $signature = 'english:play {--i|important} {--s|step=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @return int
     * @throws Exception
     */
    public function handle(): int
    {
        $onlyImportant = $this->option('important');

        if ($step = $this->option('step')) {
            if (filter_var($step, FILTER_VALIDATE_INT) === false) {
                throw new Exception("Step option is " . gettype($step));
            }
        }

        $record = $this->getRandomRecord($onlyImportant, $step);
        $this->line($record->word);

        if ($this->confirm('Do you wish to continue?', true)) {
            // ...
            $this->info($record->translation);
            if ($example = $record->example) {
                $this->line($example);
            }
            $this->handle();
        }


        return CommandAlias::SUCCESS;
    }

    /**
     * @param bool $onlyImportant
     * @param int $step
     * @return Words|null
     */
    protected function getRandomRecord(bool $onlyImportant = false, int|null $step = 0): ?Words
    {
        $query = Words::inRandomOrder();

        if ($onlyImportant) {
            $query->where('is_important', true);
        }

        if ($step) {
            $query->where('step', $step);
        }

        return $query->first();
    }
}
