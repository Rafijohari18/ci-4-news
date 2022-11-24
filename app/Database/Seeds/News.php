<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        // membuat data
        $news_data = [
            [
                'title' => 'selamat datang di Codeigniter',
                'slug'  => 'codeigniter-intro',
                'content' => 'pengenalan Codeigniter untuk Pemula'
            ],
            [
                'title' => 'Hello World',
                'slug' => 'hello-world',
                'content' => 'Hello world, ini contoh artikel'
            ],
            [
                'title' => 'Meetup komunitas Codeigniter Indonesia',
				'slug'	=> 'codeigniter-meetup',
				'content' => 'Seru sekali meetup perdana komunitas codeigniter..'
            ]
        ];

        foreach ($news_data as $data) {
            //insert ke semua tabel
            $this->db->table('news')->insert($data);
        }


    }
}
