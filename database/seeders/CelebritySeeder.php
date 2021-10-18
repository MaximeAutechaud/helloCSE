<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CelebritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('celebrities')->insert([
            'firstname' => 'Brad',
            'lastname' => 'Pitt',
            'description' => 'Brad Pitt passe sa jeunesse à Springfield, dans le Missouri, avant de poursuivre ses études à l\'université de Columbia où il décroche un diplôme de journalisme. Il s\'installe alors à Los Angeles et suit des cours d\'art dramatique dans l\'atelier de Roy London. Son aisance naturelle et son charisme lui ouvrent les portes de la télévision. On le voit dans des séries telles 21 Jump Street (1987) ou des téléfilms comme Trop jeune pour mourir (1990, avec Juliette Lewis, qui sera sa compagne pendant les trois années suivantes.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/16/War_Machine_Japan_Premiere_Red_Carpet-_Brad_Pitt_%2826617655159%29_%28cropped%29.jpg'
        ]);
        DB::table('celebrities')->insert([
            'firstname' => "Georges",
            'lastname' => 'Clooney',
            'description' => "Fils d'un animateur de talk-shows (et cousin de Miguel Ferrer), George Clooney fait dès son plus jeune âge des apparitions dans les émissions de son père. Souhaitant marcher dans les pas de celui-ci, il commence par étudier le journalisme. Excellent joueur de base-ball, il envisage aussi un temps de devenir professionnel, mais cet espoir est déçu, l'équipe qu'il rêvait d'intégrer ne l'ayant pas sélectionné.Clooney se tourne alors vers le 7e art, mais ses débuts sont placés sous le signe de la série Z, avec des films aux titres aussi éloquents que Return to horror high (sa première apparition à l'écran en 1987) ou Le Retour des tomates tueuses en 1988.",
            'image' => "https://upload.wikimedia.org/wikipedia/commons/9/97/George_Clooney_18_10_2011.jpg"
        ]);
    }
}
