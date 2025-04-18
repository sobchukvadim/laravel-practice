<?php

namespace App\Console\Commands\English;

use App\Models\Words;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class CreateWord extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'english:create';

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
        $word = $this->ask('Input your word');
        $word = trim($word);
        if(!str_word_count($word, 0)) {
            $this->error("Incorrect word!");
            return CommandAlias::INVALID;
        }

        $translation = $this->ask('Input translation');
        $translation = trim($translation);
        // Cyrillic don't work!
//        if (!str_word_count($translation)) {
//            $this->error("Incorrect translation");
//            return CommandAlias::INVALID;
//        }

        $exampleSentence = $this->ask("Input example sentence");
        $exampleSentence = trim($exampleSentence);
        if (!str_ends_with($exampleSentence, '.')) {
            $exampleSentence .= '.';
        }

        if (!Words::create([
            'word' => $word,
            'translation' => $translation,
            'example' => $exampleSentence
        ])) {
            $this->error('Oops. Something went wrong');
            return CommandAlias::FAILURE;
        }

        return CommandAlias::SUCCESS;
    }

    /**
     * @param string $word
     * @return bool
     */
    protected function checkIfWordExists(string $word): bool
    {
        return Words::where('word', $word)->exists();
    }
}
