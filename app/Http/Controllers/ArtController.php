<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artwork;
use App\User;

class ArtController extends Controller
{
    public function upload_art(Request $request)
    {
        if (!empty($request->file('newArt'))) {
            $request->file('newArt')->store('artwork');
            return back();
        }
    }
}
