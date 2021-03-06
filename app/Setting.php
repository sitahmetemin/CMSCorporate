<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'title',
        'menu_id',
        'slider_id',
        'isComingSoon',
        'description',
        'keywords',
        'copyright',
        'site_url',
        'slogan',
        'site_theme',
        'logo',
        'defLang',
        'tel1',
        'tel2',
        'gsm1',
        'gsm2',
        'fax1',
        'fax2',
        'mail1',
        'mail2',
        'address',
        'county',
        'province',
        'maps',
        'analystic',
        'recapctha',
        'smtphost',
        'smtpuser',
        'smtppassword',
        'smtpport',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'linkedin',
        'vimeo',
        'pinterest',
        'whatsapp',
    ];
}
