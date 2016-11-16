<?php namespace Defr\VueManagerModule;

use Defr\VueManagerModule\Seeder\PagesSeeder;
use Defr\VueManagerModule\Seeder\PartialsSeeder;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class VueManagerModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PartialsSeeder::class);
        $this->call(PagesSeeder::class);
    }
}
