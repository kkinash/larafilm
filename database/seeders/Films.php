<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Films extends Seeder
{


    public function run()
    {
        DB::table('films')->insert([
            'titel' => 'Elysium',
            'omschrijving' => 'We bevinden ons in het jaar 2159 en de mensheid is verdeeld in twee sociale klassen. De allerrijksten leiden een heerlijk zorgeloos leven op het ongerepte ruimtestation Elysium, terwijl de armen moeten zien te overleven op de overbevolkte en verwoeste Aarde.',
            'genre_genreid' => 1,
            'jaar' => 2013,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'Les visiteurs',
            'omschrijving' => 'A medieval nobleman and his squire are accidentally transported to contemporary times by a senile sorcerer. He enlists the aid of his descendent to try to find a way to return home.',
            'genre_genreid' => 2,
            'jaar' => 1993,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'Pulp Fiction',
            'omschrijving' => 'The lives of two mob hit men, a boxer, a gangsters wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
            'genre_genreid' => 3,
            'jaar' => 2006,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'Le fabuleux destin d Amelie Poulain',
            'omschrijving' => 'Amelie, an innocent and naive girl in Paris, with her own sense of justice, decides to help those around her and along the way, discovers love.',
            'genre_genreid' => 4,
            'jaar' => 2001,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'Alien',
            'omschrijving' => 'The commercial vessel Nostromo receives a distress call from an unexplored planet. After searching for survivors, the crew heads home only to realize that a deadly bioform has joined them.',
            'genre_genreid' => 5,
            'jaar' => 1979,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'The Lord of the Rings: The Fellowship of the Ring',
            'omschrijving' => 'A meek hobbit of The Shire and eight companions set out on a journey to Mount Doom to destroy the One Ring and the dark lord Sauron.',
            'genre_genreid' => 6,
            'jaar' => 2001,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'The Big Lebowski',
            'omschrijving' => 'Dude Lebowski, mistaken for a millionaire Lebowski, seeks restitution for his ruined rug and enlists his bowling buddies to help get it.',
            'genre_genreid' => 2,
            'jaar' => 1998,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'Once upon a Time in the West',
            'omschrijving' => 'Epic story of a mysterious stranger with a harmonica who joins forces with a notorious desperado to protect a beautiful widow from a ruthless assassin working for the railroad.',
            'genre_genreid' => 7,
            'jaar' => 1968,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'De Smurfen 2',
            'omschrijving' => 'In De Smurfen 2, creeert de boze tovenaar Gargamel een paar ondeugende Smurfachtige wezens genaamd de Stouterds. Daarmee hoopt hij de almachtige, magische Smurfessentie te kunnen benutten. Maar wanneer hij ontdekt dat alleen een echte Smurf hem kan geven wat hij wil - en alleen Smurfin een geheime spreuk weet die de Stouterds kan omtoveren tot echte Smurfen - ontvoert Gargamel de Smurfin en brengt haar naar Parijs.',
            'genre_genreid' => 8,
            'jaar' => 1973,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'The Hobbit, the desolation of Smaug',
            'omschrijving' => 'A reluctant hobbit, Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home - and the gold within it - from the dragon Smaug.',
            'genre_genreid' => 6,
            'jaar' => 2012,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'Spectre',
            'omschrijving' => 'Bonds loyalty to M is tested when her past comes back to haunt her. Whilst MI6 comes under attack, 007 must track down and destroy the threat, no matter how personal the cost.',
            'genre_genreid' => 6,
            'jaar' => 2015,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'No country for old men',
            'omschrijving' => 'Violence and mayhem ensue after a hunter stumbles upon a drug deal gone wrong and more than two million dollars in cash near the Rio Grande.',
            'genre_genreid' => 3,
            'jaar' => 2008,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'The Martian',
            'omschrijving' => 'During a manned mission to Mars, Astronaut Mark Watney is presumed dead after a fierce storm and left behind by his crew. But Watney has survived and finds himself stranded and alone on the hostile planet. With only meager supplies, he must draw upon his ingenuity, wit and spirit to subsist and find a way to signal to Earth that he is alive.',
            'genre_genreid' => 1,
            'jaar' => 2223,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'Cowboys and Aliens',
            'omschrijving' => 'A spaceship arrives in Arizona, 1873, to take over the Earth, starting with the Wild West region. A posse of cowboys and natives are all that stand in their way.',
            'genre_genreid' => 1,
            'jaar' => 2011,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
        DB::table('films')->insert([
            'titel' => 'Monsters, Inc',
            'omschrijving' => 'In order to power the city, monsters have to scare children so that they scream. However, the children are toxic to the monsters, and after a child gets through, two monsters realize things may not be what they think.',
            'genre_genreid' => 9,
            'jaar' => 2001,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null,
        ]);
    }
}