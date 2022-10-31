<?php

namespace App\Handlers;

use Overtrue\Pinyin\Pinyin;

use Illuminate\Support\Str;

class SlugTranslateHandler
{
    public function translate($text)
    {
        return Str::slug(app(Pinyin::class)->permalink($text));
    }
}
