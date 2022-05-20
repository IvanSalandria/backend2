<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Language;

class LanguagesController extends Controller
{
    public function showAllLanguages()
    {
        return response()->json(Language::all());
    }
}
