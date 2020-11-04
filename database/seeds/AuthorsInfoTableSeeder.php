<?php

use Illuminate\Database\Seeder;
// importo il Model
use App\AuthorInfo;
// importo il Faker dati
use Faker\Generator as Faker;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // richiamo tutti i dati degli autiori
        $authors = AuthorInfo::all();

        // faccio un ciclo  per ogni singolo autore che vogliamo salvare
        foreach($authors as $author){

            $newAuthorInfo = new AuthorInfo;
            // assegnamo l'id autore all'id della tabella
            $newAuthorInfo->author_id = $author->id;
            // assegnamo il faker per tutte le altre informazioni
            $newAuthorInfo->nationality = $faker->country();
            $newAuthorInfo->bio = $faker->paragraph(5, true);
            // se non passiamo valori lui andra a prendere valori di dafault
            if(rand(0,1) == 1){
                $newAuthorInfo->image = $faker->imageUrl(200,300);
                $newAuthorInfo->alive = 1;
            }
            
        }
    }
}
