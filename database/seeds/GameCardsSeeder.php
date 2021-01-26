<?php

use Illuminate\Database\Seeder;

class GameCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\models\game_cards::class, 60)->create();
    }
}
