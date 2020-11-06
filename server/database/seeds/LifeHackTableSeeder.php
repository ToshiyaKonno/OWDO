<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LifeHackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('life_hacks')->insert([
            'title' => 'ツナ缶でランプ',
            'description' => '【身近なモノ活用術】ツナ缶の油を利用したランプです。缶に穴を開け、芯を差し込みます。芯には綿のひも等が良いそうですが、コーヒーのフィルタをこよりにして作ってみました。2時間位もちます。もちろん中身も食べました（油が減ってヘルシーかも）',
            'img_path' => 'https://www.keishicho.metro.tokyo.jp/kurashi/saigai/yakudachi/house/lifeline/405974518117580800.images/BaJPrFzCQAEYog9.jpg'
        ]);
    }
}


