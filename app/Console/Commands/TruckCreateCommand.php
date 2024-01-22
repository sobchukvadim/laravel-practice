<?php

namespace App\Console\Commands;

use App\DTO\Truck\TruckDTO;
use App\Http\Resources\Truck\TruckResource;
use App\Repositories\TruckRepository;
use App\Services\Truck\TruckService;
use Exception;
use Illuminate\Console\Command;

class TruckCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trucks:create';

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
        $service = app(TruckService::class);

        $dto = new TruckDTO([
            'fedEx_tractor_num' => '333333',
            'status' => 1,
        ]);

        $truck = $service->create($dto);

        dump(new TruckResource($truck));

        return self::SUCCESS;
    }
}
