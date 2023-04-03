<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Article extends Model
{
    use HasFactory;

    public function translation()
    {
        $lang = request()->getLanguages()[0];

        if (is_null($lang) || $lang === 'en') {
            return $this->hasOne(Article::class, 'id', 'id');
        }

        return $this->hasOne(ArticlesTranslation::class)->where('lang', $lang);
    }
}
