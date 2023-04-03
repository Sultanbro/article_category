<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function translation()
    {
//        $lang = App::getLocale();
        $lang = request()->getLanguages()[0];

        if (is_null($lang) || $lang === 'en') {
            return $this->hasOne(Category::class, 'id', 'id');
        }

        return $this->hasOne(CategoryTranslation::class)->where('lang', $lang);
    }
}
