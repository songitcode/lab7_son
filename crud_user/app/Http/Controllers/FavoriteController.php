<?php

namespace App\Http\Controllers;

use App\Models\Favorities;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function list()
    {
        $sothich = Favorities::all();
        return view('auth.list_favorite', ['sothich' => $sothich]);
    }
}
