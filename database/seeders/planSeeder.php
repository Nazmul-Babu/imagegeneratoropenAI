<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\plan;

class planSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans=[
            [
               'name'=>'BusinessPlan',
               'slug'=>'BusinessPlan',
               'stripe_plan'=>'price_1MQx75E4o5Z9I1xTQL0lyWaC',
               'price'=>20,
               'description'=>'businessplan'
            ],
            [
                'name'=>'premium',
                'slug'=>'premium',
                'stripe_plan'=>'price_1MQx9gE4o5Z9I1xT4sCQDNuy',
                'price'=>30,
                'description'=>'premium'
            ]
            ];
            foreach($plans as $plan){
                plan::create($plan);
            }
    }
}
