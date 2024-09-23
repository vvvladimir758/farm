<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Farm\Farm;
use App\Farm\Animals\Chicken;
use App\Farm\Animals\Cow;

class FarmCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'farm:life';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $farm = new Farm();
        echo "Создана ферма".PHP_EOL;
        $farm->addAnimals(new Cow(),10);
        $farm->addAnimals(new Chicken(),20);
        echo "Добавлено 20 кур и 10 коров".PHP_EOL;

        echo $farm->animalsInfo();
        echo "---------------------".PHP_EOL;

        $farm->harvest(7);
        echo "Произведено 7 сборов продукции".PHP_EOL;
        echo $farm->productsInfo();
        echo "---------------------".PHP_EOL;

        $farm->addAnimals(new Cow(),1);
        $farm->addAnimals(new Chicken(),5);
        echo "Добавлено 5 кур и 1 корова".PHP_EOL;
        echo $farm->animalsInfo();
        echo "---------------------".PHP_EOL;

        $farm->harvest(7);
        echo "Произведено еще 7 сборов продукции".PHP_EOL;
        echo $farm->productsInfo();
        echo "---------------------".PHP_EOL;

    }
}
