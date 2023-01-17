<?php


use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'train_number' => 5,
                'destination' => 'casa di elia',
                'departure_time' => '2023-01-17 20:20:10',
            ],
            [
                'train_number' => 7,
                'destination' => 'Milano',
                'departure_time' => '2023-01-18 10:20:10',
            ],
            [
                'train_number' => 12,
                'destination' => 'Abbiategrasso',
                'departure_time' => '2023-02-13 09:40:10',
            ],
        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain->train_number = $elem['train_number'];
            $newTrain->destination = $elem['destination'];
            $newTrain->departure_time = $elem['departure_time'];
            $newTrain->save();
        }

    }
}
