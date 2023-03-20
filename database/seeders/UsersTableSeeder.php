<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'haluk',
                'email' => 'halukbuyukozkan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iorf6lzGWzwFY5QuttegIOwEPQcZVLX9Up7nHfI8Evd0kWldrgU12',
                'remember_token' => NULL,
                'created_at' => '2023-03-14 20:46:01',
                'updated_at' => '2023-03-14 20:46:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'testuserq',
                'email' => 'test@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iWFQee9aTbx.pkOIqjpNoOZuU4RuO9iN3HefMUMr6cFxEThCgJJM2',
                'remember_token' => NULL,
                'created_at' => '2023-03-20 10:50:30',
                'updated_at' => '2023-03-20 10:50:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Janiya Mann',
                'email' => 'rossie85@example.com',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$5nqcqWVASUHI6dEAJItyX.UmJ0EkEZBFQ3208enOFw4lIQG7J/Bli',
                'remember_token' => 'pLuUQglzpy',
                'created_at' => '2023-03-07 13:45:00',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mrs. Leanne Emard',
                'email' => 'mara.romaguera@example.com',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$JJQwpJjIq8JmwqebB0sBGuTLilIkY2zJGOzsCmZtqG35lP4lLlsg6',
                'remember_token' => 'QDoFx2fpbr',
                'created_at' => '2023-03-16 05:09:16',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Dusty Lowe',
                'email' => 'lou57@example.org',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$JEWUOQJ.9G4Wx5EG3imDcebbezrcnon.eaO8mbdfsdvpKGw/OxlWK',
                'remember_token' => 'lPkRirz3dW',
                'created_at' => '2023-03-15 13:21:59',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mr. Jeramy Mills',
                'email' => 'lulu.rutherford@example.net',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$rpSnEVKWLrbCQJVSk1hv9eYaPIkK14hwPbo3iJd5JRWpCDjdKvOMS',
                'remember_token' => 'X1mMmJROjF',
                'created_at' => '2023-03-18 17:29:28',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Justine Klocko',
                'email' => 'hailee.spencer@example.org',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$FksciUEi53gSJpVaLtI./.3exYqQRHcDZf9KioezmdRyqgTyE3eH2',
                'remember_token' => 'nbFaJ7KjmQ',
                'created_at' => '2023-03-08 21:58:06',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Jacinthe Effertz',
                'email' => 'rrempel@example.com',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$TCOFVQJ.AlKZpB6gtoWB6uaX2meShU5NOWleuubIfOhx757fp5jzm',
                'remember_token' => 'ulZVzfQrW7',
                'created_at' => '2023-03-16 04:11:23',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Reba Rohan',
                'email' => 'cronin.donald@example.org',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$K.uWyES/wd.3bLJ64NcFwuXcEg7XyYXdqcHjn/PiysVgB/xJ/36aO',
                'remember_token' => 'UzO3fCPrJB',
                'created_at' => '2023-03-06 09:01:51',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Trey Turner PhD',
                'email' => 'trey54@example.com',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$XwPCSGFzNGDbVkJiXavk/uF8kWbwntLM5i6x/i9zGLsTOnGjz.e1W',
                'remember_token' => 'ISaWgeDs9s',
                'created_at' => '2023-03-03 17:43:47',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Mr. Dashawn Bosco PhD',
                'email' => 'ena.auer@example.com',
                'email_verified_at' => '2023-03-20 11:33:11',
                'password' => '$2y$10$R.0GRnNn7Aq5ievuYjV4BeSIIII0Mg2/hQ4ELNIyDIElKfAiqishS',
                'remember_token' => 'ItaNLUHofU',
                'created_at' => '2023-03-09 03:54:22',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Junior Metz',
                'email' => 'cheathcote@example.com',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$xgXUFAFBh70NNsGSy2QiieVMz6keElbQAJ1K.CHh1QZW.fW8lmVLi',
                'remember_token' => 'y8RXlMJVWE',
                'created_at' => '2023-03-13 00:04:33',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Clifford Ratke',
                'email' => 'paucek.chauncey@example.org',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$bxyC0jMkxJDcqKgr0nS1Q.HU.EEH8.g6FfcYGQG2lS5iZeT1h3dtO',
                'remember_token' => 'gdYb2U2nMU',
                'created_at' => '2023-03-16 02:21:54',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Adrian West II',
                'email' => 'pdaugherty@example.com',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$sFCtSlxN6O3t989rqIQ/MeDk0LOUwTwybPchMUtVW/DIW1h.TsIAu',
                'remember_token' => 'lpA2SxHk5U',
                'created_at' => '2023-03-15 21:53:18',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Jaiden O\'Reilly',
                'email' => 'welch.ilene@example.org',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$eVFQ84bvTaLHFIiCCQi0CeZwNGjQfVwzr.4YEo//PjhDEPvX8T7lO',
                'remember_token' => 'FU1fOhVKqF',
                'created_at' => '2023-03-16 09:35:55',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Mrs. Abby Jacobs',
                'email' => 'corrine95@example.org',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$wj6Z1sagG0qFaECd60cBt.bTsSn3a1DlAtFwfR6YgYQtXLGVpwZCC',
                'remember_token' => 'sLS458jP3f',
                'created_at' => '2023-03-03 11:11:07',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Prof. Hannah Hermann',
                'email' => 'schinner.rodrick@example.com',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$bI2d2/JIe18h285bT09K7.3tiU1JGE2nn/O2FW44hv0.HyH9..5ju',
                'remember_token' => 'Ranm3GxJsp',
                'created_at' => '2023-03-01 18:13:55',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Alivia Von DVM',
                'email' => 'ofelia.feil@example.net',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$5y7dvj.pofZ49NO.v/hQrehza17.HDwbi/XN6.7zs2mPuD85Z.nA6',
                'remember_token' => 'hewnuSoSbg',
                'created_at' => '2023-03-14 04:59:05',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Charity Jones',
                'email' => 'pkrajcik@example.net',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$W9wUL7gjaespBRHwAcvd4e13DBe0sCWi3Fd5IA39QqpkkPMI3NpR.',
                'remember_token' => 'kT9WlFePiM',
                'created_at' => '2023-03-17 06:26:06',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Prof. Larry Paucek',
                'email' => 'isabel10@example.com',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$m5BE7l8cW1bOW9.XkJ6BoOm87rtxqvwNGpPbkp2JxKoA3pahhAB/q',
                'remember_token' => '0PUfvsCboA',
                'created_at' => '2023-03-11 06:49:39',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Elvie Keebler',
                'email' => 'ward.godfrey@example.org',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$oWE7CFUIgb44EtqnZbi7a.PK6hPXaYjVU0b3/oZofe5cIvshgcBiG',
                'remember_token' => 'FQvehkqEyf',
                'created_at' => '2023-03-07 22:41:25',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Mrs. Nadia Maggio',
                'email' => 'xmills@example.org',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$vwBqHdserKu82gWPSBDI8u9sau0nRoaLsTDLp1Pl31b0Z6ziBpHdK',
                'remember_token' => 'PmfkccxRm3',
                'created_at' => '2023-03-18 20:31:10',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Dr. Elvera Price',
                'email' => 'mosciski.patience@example.net',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$d2swTsONZPA8j/N9DjvlQeCGOeewhZhUkfVNI0TdrnnkDHBN8b.ye',
                'remember_token' => '2BA24kSqRm',
                'created_at' => '2023-03-17 01:42:35',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Janick Braun',
                'email' => 'tremblay.braeden@example.com',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$TGBCFEvv4N2OnIumbr9SYuMTGELh/uGg9R4QOU.UMLC.56v3nSx/K',
                'remember_token' => 'g8xfd2380X',
                'created_at' => '2023-03-08 06:19:11',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Keshawn Kassulke Sr.',
                'email' => 'reilly97@example.com',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$oyPjaw1UgWKbzJOFzzbJMuXzYRWncoEQwmoJepjLYRkaOIo8SyajG',
                'remember_token' => '1uWS5aiCuB',
                'created_at' => '2023-03-08 09:20:57',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Andrew Kovacek',
                'email' => 'moore.rosalyn@example.org',
                'email_verified_at' => '2023-03-20 11:33:12',
                'password' => '$2y$10$rdVRfIfAZGM7YZzVt.G9kuQ0W0Rh26qq3H1dtijirFaQamUEMC6/S',
                'remember_token' => 'wLbFJJtIcp',
                'created_at' => '2023-03-11 10:49:43',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Mrs. Bridget Barrows',
                'email' => 'dquigley@example.net',
                'email_verified_at' => '2023-03-20 11:33:13',
                'password' => '$2y$10$4sOOt1H.N1mb8a2LJvqUFeTD7tfm1F0LQ.D5.nUK6Q2uOzpcewvF6',
                'remember_token' => '7xUc7tdOmI',
                'created_at' => '2023-03-18 07:04:58',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Ettie Lang DDS',
                'email' => 'glover.uriel@example.org',
                'email_verified_at' => '2023-03-20 11:33:13',
                'password' => '$2y$10$g02EzSAibGHAqZzbxLkxQ.0rIEmd.rrLWZZqeFat5rJjNPI8/tmri',
                'remember_token' => 'UCpufpdeI0',
                'created_at' => '2023-03-03 07:11:09',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Gerardo Lind',
                'email' => 'uleannon@example.net',
                'email_verified_at' => '2023-03-20 11:33:13',
                'password' => '$2y$10$d3S6ZU9imNBQW8Jt0VOr5u0XAMX.01/hTEaaWbWwlVxQVg8uzO6P6',
                'remember_token' => 'ePV5JSDIhI',
                'created_at' => '2023-03-11 18:06:38',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Ms. Rosie Langworth I',
                'email' => 'qrunolfsson@example.net',
                'email_verified_at' => '2023-03-20 11:33:13',
                'password' => '$2y$10$bS396cmS2UAer7tfiTamE.dYjvIytATVv366Y3yI8UKf/zLPH0IG6',
                'remember_token' => 'kWw5SdJXRl',
                'created_at' => '2023-03-17 14:56:59',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Sydni Kerluke',
                'email' => 'adelbert13@example.net',
                'email_verified_at' => '2023-03-20 11:33:13',
                'password' => '$2y$10$GRhnUwKWKEX3N1JGIQhKLuaZOrWVD2Gx4LLWFCbNSC/XS6ctGtBHy',
                'remember_token' => '6SvQGVNzhK',
                'created_at' => '2023-03-03 04:16:02',
                'updated_at' => '2023-03-20 11:33:13',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Felix Erdman',
                'email' => 'jazmyne.rodriguez@example.org',
                'email_verified_at' => '2023-03-20 11:33:13',
                'password' => '$2y$10$kr6hVunMKum/h/Kh4xb1ueHKg6/ZBYKP0JtQgbRmqyvXfSrzcc0t6',
                'remember_token' => 'sZYzC5gOS3',
                'created_at' => '2023-03-14 12:13:40',
                'updated_at' => '2023-03-20 11:33:13',
            ),
        ));
        
        
    }
}