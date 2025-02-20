<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (array_key_exists($lang, config('app.available_locales'))) {
            session()->put('locale', $lang);
            app()->setLocale($lang);

            // Force session to be saved immediately
            session()->save();
        }
        return redirect()->back();
    }
}
