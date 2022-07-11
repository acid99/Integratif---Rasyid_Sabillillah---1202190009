<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            // 'name' => 'CNBC Tech',
            // 'url' => 'https://www.cnbcindonesia.com/tech/rss'
            // 'name' => 'CNBC Indonesia',
            // 'url' => 'https://www.cnbcindonesia.com/market/rss/'
            'name' => 'Kumparan',
            'url' => 'https://lapi.kumparan.com/v2.0/rss/'
        ]);    
    }
}
