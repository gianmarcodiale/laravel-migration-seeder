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
        $packages = [
            [
                'price' => 1200,
                'title' => 'A week journey in Kuala Lumpur',
                'location' => 'Kuala Lumpur, Malaysia',
                'description' => 'A week journey into the beautiful city of Kuala Lumpur in a 4* hotel with all the comforts you need.',
                'image' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2015/06/kuala-lumpur-1080x785.jpg?v=134496',
                'people' => 2,
                'departure_date' => '15 June 2022',
                'return_date' => '21 June 2022',
                'accomodation' => 'Berjaya Times Square Hotel',
                'flight' => 'Not included',
                'car_rent' => 'Not included'

            ],
            [
                'price' => 1600,
                'title' => 'Two weeks in the Big Apple',
                'location' => 'New York City, USA',
                'description' => 'A two week journey into the Big Apple in a 4*S hotel near the famous Times Square with a fantastic view on one of Manhattan most visited place',
                'image' => 'https://cdn.getyourguide.com/img/location/54621e3965f1c.jpeg/99.jpg',
                'people' => 2,
                'departure_date' => '27 July 2022',
                'return_date' => '9 August 2022',
                'accomodation' => 'The Manhattan at Times Square Hotel',
                'flight' => 'Included',
                'car_rent' => 'Not included'
            ],
            [
                'price' => 800,
                'title' => 'Romantic week in Paris',
                'location' => 'Paris, France',
                'description' => 'A week journey into the city of love in a 3* hotel near the city centre',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4b/La_Tour_Eiffel_vue_de_la_Tour_Saint-Jacques%2C_Paris_ao%C3%BBt_2014_%282%29.jpg',
                'people' => 2,
                'departure_date' => '5 September 2022',
                'return_date' => '11 September 2022',
                'accomodation' => 'Hotel MINERVE',
                'flight' => 'Not included',
                'car_rent' => 'Not included'
            ],
            [
                'price' => 1300,
                'title' => 'Family trip in Santo Domingo',
                'location' => 'Santo Domingo, Dominican Republic',
                'description' => 'A two week journey in Santo Domingo in a resort with private beach with bungalows',
                'image' => 'https://www.ansa.it/webimages/ch_600x/2020/2/19/111d9e3ca7a0f6a924f4d7384f2d2aa2.jpg',
                'people' => 4,
                'departure_date' => '10 July 2022',
                'return_date' => '24 July 2022',
                'accomodation' => 'Dominican Fiesta Hotel & Casino Santo Domingo',
                'flight' => 'Not included',
                'car_rent' => 'Not included'
            ],
            [
                'price' => 2200,
                'title' => 'Adrenaline boost with the F1 Melbourne Gran Prix',
                'location' => 'Melbourne, Australia',
                'description' => 'A package complete with two tickets for the F1 Melbourne Gran Prix and with an accomodation near the Melbourne city centre.',
                'image' => 'https://www.formula1.com/content/dam/fom-website/sutton/2019/Australia/Sunday/1017394384-LAT-20190317-_86I6028-16x9.jpg',
                'people' => 2,
                'departure_date' => '7 April 2023',
                'return_date' => '11 April 2022',
                'accomodation' => 'Space Hotel Melbourne',
                'flight' => 'Included',
                'car_rent' => 'Not included'
            ],
            [
                'price' => 2400,
                'title' => 'A week in Japan',
                'location' => 'Kyoto, Japan',
                'description' => 'A week journey in the former capital and city of emperor Kyoto.',
                'image' => 'https://c8.alamy.com/zoomsit/9/c175e48d94e34c7d8956fac847b72d61/m8d45a.jpg',
                'people' => 2,
                'departure_date' => '5 December 2022',
                'return_date' => '11 December 2022',
                'accomodation' => 'Mitsui Garden Hotel Shinmachi Bettei',
                'flight' => 'Included',
                'car_rent' => 'Not included'
            ]
        ];

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
