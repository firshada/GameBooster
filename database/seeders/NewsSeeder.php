<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [
            [
                'title' => 'Gaming Beyond Screens: Augmented Reality Game Transforms Real World into a Playground',
                'description' => 'Immerse yourself in an unprecedented gaming experience as reality and fantasy collide in this groundbreaking augmented reality (AR) title. 
                Witness the real world morph into a dynamic playground as the game seamlessly integrates with your surroundings, offering an unparalleled level of 
                interactivity and immersion.',
                'date' => '2023-12-04',
                'photo' => 'news1.jpg'
            ],
            [
                'title' => 'Console Wars Intensify: Exclusive Titles Fuel Fierce Competition Between Giants',
                'description' => 'A small indie studio defies expectations with their latest release, introducing innovative gameplay mechanics that have taken the gaming 
                community by storm. Dive into a world where creativity knows no bounds, as this surprise hit redefines the way we approach and experience gaming.',
                'date' => '2021-12-04',
                'photo' => 'news2.jpg'
            ],
            [
                'title' => 'Space Odyssey 2.0: Sci-Fi Adventure Game Promises a Galaxy of Endless Possibilities',
                'description' => 'Embark on a cosmic journey like never before in the highly-anticipated sequel to the Space Odyssey series. Immerse yourself in a 
                breathtaking universe filled with unexplored planets, epic space battles, and a narrative that promises endless possibilities. Get ready to redefine the 
                boundaries of space exploration.',
                'date' => '2023-12-04',
                'photo' => 'news3.jpg'
            ],
            [
                'title' => 'Gaming Revolution: Indie Developers Surprise Hit Tops Charts with Innovative Mechanics',
                'description' => 'The battle between gaming consoles reaches new heights as exclusive titles become the weapons of choice. Witness the fierce competition 
                unfold as industry giants vie for dominance, each armed with a lineup of exclusive games that push the boundaries of whats possible on their respective 
                platforms.',
                'date' => '2023-12-04',
                'photo' => 'news4.jpg'
            ],
            [
                'title' => 'Epic Showdown in Virtual Realms: New eSports Title Takes the Gaming World by Storm!',
                'description' => 'Brace yourself for the ultimate virtual showdown as a new eSports title emerges, captivating players and spectators alike. With intense 
                competition, cutting-edge graphics, and a spectator experience like never before, this game is set to redefine the landscape of competitive gaming. Prepare 
                for an adrenaline-fueled journey into the heart of virtual competition.',
                'date' => '2023-12-04',
                'photo' => 'news5.jpg'
            ],
        ];

        DB::table('news')->insert($datas);
    }
}
