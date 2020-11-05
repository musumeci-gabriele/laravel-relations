<?php

use Illuminate\Database\Seeder;
// * Model Author
use App\Author;
// *importazione del faker
use Faker\Generator as Faker;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // *costruzione dei campi tabella autore
        for ($i=0; $i < 10; $i++) { 
            
            $newAuthor = new Author();
            $newAuthor->name = $faker->firstname();
            $newAuthor->lastname = $faker->lastname();
            $newAuthor->date_of_birth = $faker->dateTimeBetween('-30 years', 'now');
            $newAuthor->save();          
            
        }
    }
}
