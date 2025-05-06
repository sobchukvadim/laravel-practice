<?php

namespace App\Console\Commands;

use App\DTO\Truck\TruckDTO;
use App\Repositories\TruckRepository;
use App\Services\Truck\TruckService;
use Exception;
use Illuminate\Console\Command;

class TruckUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trucks:update {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create truck command';

    /**
     * @param TruckRepository $truckRepository
     * @return int
     * @throws Exception
     */
    public function handle(TruckRepository $truckRepository): int
    {
        if (!$truck = $truckRepository->getEdit($this->argument('id'))) {
            $this->error(sprintf("Truck with ID %s not found.", $this->argument('id')));
            return self::FAILURE;
        }

        $service = app(TruckService::class);
        $dto = new TruckDTO([
            'status' => 2,
            'comment' => '',
        ]);

        if(!$service->update($truck, $dto)) {
            $this->error(sprintf("Truck ID %s not updated.", $truck->id));
        }

        $this->info(sprintf("Truck ID %s successfully updated.", $truck->id));

        return self::SUCCESS;
    }
}
