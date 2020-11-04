<?php

use Illuminate\Database\Seeder;
// *importiamo il model Genere
use App\Genre;
// *importiamo il faker
use Faker\Generator as Faker;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //* Array dei generi del db
        // $genreArray = [
        //     "fantasy",
        //     "horror",
        //     "drama",
        //     "comedy",
        //     "action",
        //     "sci-fi"
        // ];



        // $array = [];
        //* abbiamo generato 10 parole diverse e inserite in db 
        // while (count($array) < 10){
        //     $fakerWord = $faker->word;

        //     if (in_array("$faker->word", $array))
        //     {
        //         $array[] = $fakerWord;
        //     }
        // }

        //* crea i nomi dal mio model e poi salva in db
        // foreach ($array as $genre) {
        //     $newgenre = new Genre;
        //     $newgenre->name = $genre;
        //     $newgenre->save();
        // }

        $counter = 0;

        while ($counter < 10) {

            $word = $faker->word;

            $data = Genre::where("nome", $word)->get();

            // * controlliamo che la parola non sia gia presente
            if ($data->count() == 0) {
                $newgenre = new Genre;
                $newgenre->name = $word;

                $newgenre->save();
                $counter++;
            }
        }
    }
}
