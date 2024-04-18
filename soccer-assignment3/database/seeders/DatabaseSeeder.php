<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Team;
use App\Models\Player;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test Code',
            'email' => 'test@code.com',
            'password' => 'Test123!',
        ]);

        //League::factory(20)->create();

        League::factory()->create([
            'league_name' => 'La Liga',
            'country' => 'Spain',
            'season' => 'Season 2023-24',
            'start_date' => '2023-08-11',
            'end_date' => '2024-05-24',
            'leagueURL' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/LaLiga_logo_2023.svg/2048px-LaLiga_logo_2023.svg.png',
        ]);

        League::factory()->create([
            'league_name' => 'Bundesliga',
            'country' => 'Germany',
            'season' => 'Season 2023-24',
            'start_date' => '2023-08-18',
            'end_date' => '2024-05-18',
            'leagueURL' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/df/Bundesliga_logo_%282017%29.svg/1200px-Bundesliga_logo_%282017%29.svg.png',
        ]);

        League::factory()->create([
            'league_name' => 'Premier League',
            'country' => 'England',
            'season' => 'Season 2023-24',
            'start_date' => '2023-08-12',
            'end_date' => '2024-05-19',
            'leagueURL' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f2/Premier_League_Logo.svg/1200px-Premier_League_Logo.svg.png',
        ]);

        League::factory()->create([
            'league_name' => 'Ligue 1',
            'country' => 'France',
            'season' => 'Season 2023-24',
            'start_date' => '2023-08-11',
            'end_date' => '2024-05-18',
            'leagueURL' => 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Ligue1_logo.png',
        ]);






        Team::factory()->create([
            'team_name' => 'Real Madrid',
            'foundation_date' => '1902-03-06',
            'country' => 'Spain',
            'stadium_name' => 'Santiago Bernabeu',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Real_Madrid_CF.svg/1200px-Real_Madrid_CF.svg.png',
            'league_id' => 1,
        ]);

        Team::factory()->create([
            'team_name' => 'Barcelona',
            'foundation_date' => '1899-11-29',
            'country' => 'Spain',
            'stadium_name' => 'Camp Nou',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png',
            'league_id' => 1,
        ]);

        Team::factory()->create([
            'team_name' => 'Girona',
            'foundation_date' => '1930-07-23',
            'country' => 'Spain',
            'stadium_name' => 'Estadi Montilivi',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f7/Girona_FC_Logo.svg/1200px-Girona_FC_Logo.svg.png',
            'league_id' => 1,
        ]);

        Team::factory()->create([
            'team_name' => 'Atletico Madrid',
            'foundation_date' => '1903-04-26',
            'country' => 'Spain',
            'stadium_name' => 'Metropolitano',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Atletico_Madrid_2017_logo.svg/1200px-Atletico_Madrid_2017_logo.svg.png',
            'league_id' => 1,
        ]);

        Team::factory()->create([
            'team_name' => 'Athletic Club',
            'foundation_date' => '1898-07-18',
            'country' => 'Spain',
            'stadium_name' => 'San Mames',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/98/Club_Athletic_Bilbao_logo.svg/1200px-Club_Athletic_Bilbao_logo.svg.png',
            'league_id' => 1,
        ]);
        
        Team::factory()->create([
            'team_name' => 'Leverkusen',
            'foundation_date' => '1893-09-09',
            'country' => 'Germany',
            'stadium_name' => 'BayArena',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/59/Bayer_04_Leverkusen_logo.svg/1200px-Bayer_04_Leverkusen_logo.svg.png',
            'league_id' => 2,
        ]);
                
        Team::factory()->create([
            'team_name' => 'Bayern',
            'foundation_date' => '1904-07-01',
            'country' => 'Germany',
            'stadium_name' => 'Allianz Arena',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/FC_Bayern_M%C3%BCnchen_logo_%282017%29.svg/800px-FC_Bayern_M%C3%BCnchen_logo_%282017%29.svg.png',
            'league_id' => 2,
        ]);
        
        Team::factory()->create([
            'team_name' => 'VfB Stuttgart',
            'foundation_date' => '1900-02-27',
            'country' => 'Germany',
            'stadium_name' => 'MHPArena',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/VfB_Stuttgart_1893_Logo.svg/1200px-VfB_Stuttgart_1893_Logo.svg.png',
            'league_id' => 2,
        ]);

        Team::factory()->create([
            'team_name' => 'Dortmund',
            'foundation_date' => '1909-12-19',
            'country' => 'Germany',
            'stadium_name' => 'Westfalenstadion',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Borussia_Dortmund_logo.svg/1200px-Borussia_Dortmund_logo.svg.png',
            'league_id' => 2,
        ]);

        Team::factory()->create([
            'team_name' => 'RB Leipzig',
            'foundation_date' => '2009-05-19',
            'country' => 'Germany',
            'stadium_name' => 'Red Bull Arena',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/04/RB_Leipzig_2014_logo.svg/1200px-RB_Leipzig_2014_logo.svg.png',
            'league_id' => 2,
        ]);

        Team::factory()->create([
            'team_name' => 'Liverpool',
            'foundation_date' => '1982-06-03',
            'country' => 'England',
            'stadium_name' => 'Anfield',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/0c/Liverpool_FC.svg/1200px-Liverpool_FC.svg.png',
            'league_id' => 3,
        ]);

        Team::factory()->create([
            'team_name' => 'Manchester City',
            'foundation_date' => '1880-08-21',
            'country' => 'England',
            'stadium_name' => 'Etihad Stadium',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/e/eb/Manchester_City_FC_badge.svg/1200px-Manchester_City_FC_badge.svg.png',
            'league_id' => 3,
        ]);

        Team::factory()->create([
            'team_name' => 'Arsenal',
            'foundation_date' => '1886-05-23',
            'country' => 'England',
            'stadium_name' => 'Emirates Stadium',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/53/Arsenal_FC.svg/1200px-Arsenal_FC.svg.png',
            'league_id' => 3,
        ]);

        Team::factory()->create([
            'team_name' => 'Aston Villa',
            'foundation_date' => '1874-10-09',
            'country' => 'England',
            'stadium_name' => 'Villa Park',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Aston_Villa_logo.svg/1200px-Aston_Villa_logo.svg.png',
            'league_id' => 3,
        ]);

        Team::factory()->create([
            'team_name' => 'Tottenham',
            'foundation_date' => '1882-09-05',
            'country' => 'England',
            'stadium_name' => 'Tottenham Hotspur Stadium',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b4/Tottenham_Hotspur.svg/1200px-Tottenham_Hotspur.svg.png',
            'league_id' => 3,
        ]);

        Team::factory()->create([
            'team_name' => 'PSG',
            'foundation_date' => '1970-08-12',
            'country' => 'France',
            'stadium_name' => 'Princes Park',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/a/a7/Paris_Saint-Germain_F.C..svg/1200px-Paris_Saint-Germain_F.C..svg.png',
            'league_id' => 4,
        ]);

        Team::factory()->create([
            'team_name' => 'Brest',
            'foundation_date' => '1950-06-26',
            'country' => 'France',
            'stadium_name' => 'Stade Francis Le Ble',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Stade_Brestois_29_logo.svg/1200px-Stade_Brestois_29_logo.svg.png',
            'league_id' => 4,
        ]);

        Team::factory()->create([
            'team_name' => 'Monaco',
            'foundation_date' => '1924-11-23',
            'country' => 'France',
            'stadium_name' => 'Louis II Stadium',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/c/cf/LogoASMonacoFC2021.svg',
            'league_id' => 4,
        ]);

        Team::factory()->create([
            'team_name' => 'Nice',
            'foundation_date' => '1904-07-09',
            'country' => 'France',
            'stadium_name' => 'The Allianz Riviera',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2e/OGC_Nice_logo.svg/1200px-OGC_Nice_logo.svg.png',
            'league_id' => 4,
        ]);

        Team::factory()->create([
            'team_name' => 'LOSC',
            'foundation_date' => '1944-09-23',
            'country' => 'France',
            'stadium_name' => 'Stade Pierre-Mauroy',
            'teamLogo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3f/Lille_OSC_2018_logo.svg/1200px-Lille_OSC_2018_logo.svg.png',
            'league_id' => 4,
        ]);


        
        


        Player::factory()->create([
            'fname' => 'Lionel',
            'lname' => 'Messi',
            'age' => 34,
            'shirt_number' => 10,
            'imageURL' => 'https://wallpapercave.com/wp/wp8687958.jpg',
            'country' => 'Argentina',
            'team_id' => 2,
        ]);

        Player::factory()->create([
            'fname' => 'Karim',
            'lname' => 'Benzema',
            'age' => 34,
            'shirt_number' => 9,
            'imageURL' => 'https://www.thesportsroom.org/wp-content/uploads/2022/05/Karim-Benzema-Real-Madrid-vs.-Chelsea-040622.jpg',
            'country' => 'France',
            'team_id' => 1,
        ]);

        Player::factory()->create([
            'fname' => 'Robert',
            'lname' => 'Lewandowski',
            'age' => 33,
            'shirt_number' => 9,
            'imageURL' => 'https://www.si.com/.image/t_share/MTc3NTM0NzYzMjAzMDQ0NzI5/robert-lewandowski-bayern-fifa-best.jpg',
            'country' => 'Poland',
            'team_id' => 7,
        ]);

        Player::factory()->create([
            'fname' => 'Mohamed',
            'lname' => 'Salah',
            'age' => 30,
            'shirt_number' => 11,
            'imageURL' => 'https://wallpapers.com/images/hd/mohamed-salah-praying-landscape-rr0ydg6kjd66hcsa.jpg',
            'country' => 'Egypt',
            'team_id' => 11,
        ]);

        
        Player::factory()->create([
            'fname' => 'Kevin',
            'lname' => 'De Bruyne',
            'age' => 31,
            'shirt_number' => 17,
            'imageURL' => 'https://wallpapers.com/images/hd/kevin-de-bruyne-man-city-2021-rtfmudp3l8dsjjwk.jpg',
            'country' => 'Belgium',
            'team_id' => 12,
        ]);

        
        Player::factory()->create([
            'fname' => 'Kylian',
            'lname' => 'Mbappé',
            'age' => 23,
            'shirt_number' => 7,
            'imageURL' => 'https://phantom-marca.unidadeditorial.es/dbc144f9ba51fd525ea1c829e42cb96f/resize/828/f/jpg/assets/multimedia/imagenes/2024/02/18/17082948959606.jpg',
            'country' => 'France',
            'team_id' => 16,
        ]);

        
        Player::factory()->create([
            'fname' => 'Son',
            'lname' => 'Heung-min',
            'age' => 29,
            'shirt_number' => 7,
            'imageURL' => 'https://www.japantimes.co.jp/japantimes/uploads/images/2023/12/29/271904.JPG',
            'country' => 'South Korea',
            'team_id' => 15,
        ]);

        
        Player::factory()->create([
            'fname' => 'Gerard',
            'lname' => 'Piqué',
            'age' => 35,
            'shirt_number' => 3,
            'imageURL' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSIThWPJvjfJug3_zhiK85K6tOf5re8YQ5yTVCqol7KQ&s',
            'country' => 'Spain',
            'team_id' => 2,
        ]);

        
        Player::factory()->create([
            'fname' => 'Sergio',
            'lname' => 'Ramos',
            'age' => 35,
            'shirt_number' => 4,
            'imageURL' => 'https://icdn.football-espana.net/wp-content/uploads/2021/03/Sergio-Ramos-3-640x360.jpg',
            'country' => 'Spain',
            'team_id' => 1,
        ]);

        
        Player::factory()->create([
            'fname' => 'Steve',
            'lname' => 'Mounie',
            'age' => 27,
            'shirt_number' => 9,
            'imageURL' => 'https://media.gettyimages.com/id/888831182/photo/huddersfield-england-steve-mounie-of-huddersfield-town-celebrates-after-scoring-his-sides.jpg?s=612x612&w=gi&k=20&c=fon4GvxkGIjV_QTY1dvphMbWUrnrznE2QScH8knyrLE=',
            'country' => 'Benin',
            'team_id' => 17,
        ]);

        
        Player::factory()->create([
            'fname' => 'Marco',
            'lname' => 'Reus',
            'age' => 32,
            'shirt_number' => 11,
            'imageURL' => 'https://m.media-amazon.com/images/M/MV5BMjI1YTZiYWMtZThjYi00Y2MxLWE4ZDAtZTg5YzFjZTU5ZTk3XkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_FMjpg_UX1000_.jpg',
            'country' => 'Germany',
            'team_id' => 9,
        ]);

        
        Player::factory()->create([
            'fname' => 'Joao',
            'lname' => 'Felix',
            'age' => 22,
            'shirt_number' => 7,
            'imageURL' => 'https://w.forfun.com/fetch/c7/c7a7b027dc9c5b2de816d3864da2bf32.jpeg',
            'country' => 'Portugal',
            'team_id' => 4,
        ]);

        
        Player::factory()->create([
            'fname' => 'Nicolas',
            'lname' => 'Gonzalez',
            'age' => 23,
            'shirt_number' => 22,
            'imageURL' => 'https://cdn.theathletic.com/app/uploads/2023/08/08095633/nicolas-gonzalez.jpg',
            'country' => 'Argentina',
            'team_id' => 8,
        ]);

        
        Player::factory()->create([
            'fname' => 'Christopher',
            'lname' => 'Nkunku',
            'age' => 24,
            'shirt_number' => 7,
            'imageURL' => 'https://assets.bundesliga.com/tachyon/sites/2/2022/11/nkunku-scaled.jpg?crop=0px,0px,2560px,1440px&fit=1140,1140',
            'country' => 'France',
            'team_id' => 10,
        ]);

        
        Player::factory()->create([
            'fname' => 'Emiliano',
            'lname' => 'Martinez',
            'age' => 29,
            'shirt_number' => 26,
            'imageURL' => 'https://www.thetimes.co.uk/imageserver/image/%2Fmethode%2Ftimes%2Fprod%2Fweb%2Fbin%2F28c8185c-d187-11ea-8f7a-2750741cc65b.jpg?crop=2980%2C1987%2C387%2C176',
            'country' => 'Argentina',
            'team_id' => 14,
        ]);

        
        Player::factory()->create([
            'fname' => 'Wissam',
            'lname' => 'Ben Yedder',
            'age' => 31,
            'shirt_number' => 9,
            'imageURL' => 'https://www.asmonaco.com/wp-content/uploads/2023/02/wissam-ben-yedder-1160x650.jpg',
            'country' => 'France',
            'team_id' => 18,
        ]);

        
        Player::factory()->create([
            'fname' => 'Renato',
            'lname' => 'Sanches',
            'age' => 24,
            'shirt_number' => 18,
            'imageURL' => 'https://cdn.swanseacity.com/sites/default/files/archive/Renato%20Sanches%2016x9%20Portugal%201.jpg',
            'country' => 'Portugal',
            'team_id' => 20,
        ]);       
        
    }
}
