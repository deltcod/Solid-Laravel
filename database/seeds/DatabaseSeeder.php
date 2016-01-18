<?php

use App\Invoices;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        $faker = Faker\Factory::create();

        $this->seedInvoices($faker);
        
    }

    private function seedInvoices($faker)
    {
        foreach (range(0,100) as $item) {

            $invoices = new Invoices();

            $invoices->name = $faker->sentence();
            $invoices->totalAmmount = $faker->randomNumber();
            $invoices->save();
        }
    }
}
