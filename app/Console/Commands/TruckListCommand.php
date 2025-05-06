<?php

namespace App\Console\Commands;

use App\Repositories\TruckRepository;
use Exception;
use Illuminate\Console\Command;

class TruckListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trucks:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @param TruckRepository $truckRepository
     * @return int
     * @throws Exception
     */
    public function handle(TruckRepository $truckRepository): int
    {
        $list = $truckRepository->getList();
        $this->info(sprintf("Found %d records", $list->count()));

        return self::SUCCESS;
    }
}
