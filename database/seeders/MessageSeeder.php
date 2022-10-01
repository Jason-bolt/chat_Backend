<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            [
                'sender_id' => 2,
                'recipient_id' => 1,
                'message' => fake()->paragraph
            ],
            [
                'sender_id' => 3,
                'recipient_id' => 1,
                'message' => fake()->paragraph
            ],
            [
                'sender_id' => 1,
                'recipient_id' => 2,
                'message' => fake()->paragraph
            ],
            [
                'sender_id' => 4,
                'recipient_id' => 2,
                'message' => fake()->paragraph
            ],
            [
                'sender_id' => 4,
                'recipient_id' => 1,
                'message' => fake()->paragraph
            ]
        ];

        DB::table('messages')->insert($messages);

    }
}
