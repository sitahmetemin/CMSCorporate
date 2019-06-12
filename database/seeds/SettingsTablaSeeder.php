<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('settings')->insert([
		    'id' => '01',
		    'title' => 'Kurumsal CMS',
		    'isComingSoon' => 0,
		    'keywords' => 'Kurumsal, CMS',
		    'description' => 'Ahmet Emin ŞİT Tarafından hazırlanmış Laravel İçerik Yönetim Sistemi',
		    'copyright' => 'Tüm Hakları Ahmet Emin ŞİTe Aittir',
		    'url' => 'http://localhost',
		    'site_theme' => 'default',
		    'slogan' => 'Laravel İle Tasarlanmış CMS',
		    'lang' => 'tr',
		    'tel1' => '02823398508',
		    'tel2' => '02823398508',
		    'gsm1' => '05462459882',
		    'gsm2' => '05462459882',
		    'fax1' => '00000000000',
		    'fax2' => '00000000000',
		    'mail1' => 'sitahmetemin@gmail.com',
		    'mail2' => 'sitahmetemin@hotmail.com',
		    'address' => '3.Defne Sok. Yeşilpınar Mah. 3/5 Şitpa Yapı',
		    'county' => 'Merkez',
		    'province' => 'İstanbul',
		    'facebook' => 'https://www.facebook.com/sitahmetemin',
		    'instagram' => 'https://www.instagram.com/ahmeteminsit',
		    'youtube' => 'https://www.youtube.com/channel/UCXKALFhicB6B8EIydKpCH5g',
		    'twitter' => 'https://twitter.com/sitahmetemin',
	    ]);
    }
}
