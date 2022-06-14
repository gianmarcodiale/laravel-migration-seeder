<?php

use Illuminate\Database\Seeder;

use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = config('db.packages');

        foreach ($packages as $package) {
            $new_package = new Package();

            $new_package->price = $package['price'];
            $new_package->title = $package['title'];
            $new_package->location = $package['location'];
            $new_package->description = $package['description'];
            $new_package->image = $package['image'];
            $new_package->people = $package['people'];
            $new_package->departure_date = $package['departure_date'];
            $new_package->return_date = $package['return_date'];
            $new_package->accomodation = $package['accomodation'];
            $new_package->flight = $package['flight'];
            $new_package->car_rent = $package['car_rent'];
            $new_package->save();
        }
    }
}
