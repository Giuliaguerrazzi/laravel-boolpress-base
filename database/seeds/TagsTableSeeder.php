<?php

use Illuminate\Database\Seeder;
use App\Tag; //importo la classe per nuove istanze

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Educational',
            'Laravel',
            'Php',
            'Html'
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag(); //creazione istanza
            $newTag->name = $tag; //rappresenta i nomi passati nell'array

            $newTag->save();
        }
    }
}
