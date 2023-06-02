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
    protected $signature = 'dp:factory-abstract {gui_kit}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var GuiFactoryInterface|null
     */
    private ?GuiFactoryInterface $guiKit = null;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->setGuiKit();

        $result[] = $this->guiKit->buildButton();
        $result[] = $this->guiKit->buildCheckbox();

        dump($result);

        return self::SUCCESS;
    }

    /**
     * @return void
     */
    protected function setGuiKit(): void
    {
        if (!$this->guiKit) {
            $this->guiKit = (new GuiKitFactory())->getFactory($this->argument('gui_kit'));
        }
    }
}
