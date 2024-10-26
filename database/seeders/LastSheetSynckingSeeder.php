<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LastSheetSynckingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $times_data = [
            [
                'table_name' => 'tasks',
               'slug' => 'tasks',
            ],
            [
                'table_name' => 'task_categories',
                'slug' => 'task_categories',
            ]
        ];

        foreach ($times_data as $data) {
            \App\Models\LastSheetSyncking::updateOrCreate(['table_name'=>$data['table_name']], $data);
        }
        
    }
}
