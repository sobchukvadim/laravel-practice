<?php

namespace App\Console\Commands\DP\Factory;

use App\DesignPatterns\Factories\AbstractFactory\GuiKitFactory;
use App\DesignPatterns\Factories\AbstractFactory\Interfaces\GuiFactoryInterface;
use Illuminate\Console\Command;

class AbstractFactory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dp:factory-abstract';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var GuiFactoryInterface
     */
    private GuiFactoryInterface $guiKit;

    public function __construct()
    {
        $this->guiKit = (new GuiKitFactory())->getFactory('bootstrap');
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $result[] = $this->guiKit->buildButton();
        $result[] = $this->guiKit->buildCheckbox();

        dump($result);

        return self::SUCCESS;
    }
}
