<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



use App\Artwork;
use App\User;
use Auth;
use Log;

class ArtController extends Controller
{
    public function upload_art(Request $request)
    {
        if (!empty($request->file('newArt'))) {
            $request->file('newArt')->store('artwork');

            Log::debug($request->newArt->path());
            Log::debug($request->file('newArt')->getPathName());

            Log::debug($request->newArt->extension());

            $artwork = new Artwork;
            $artwork->user_id = Auth::id();
            $artwork->name= $request->artName;
            $artwork->description = $request->artDescription;
            $url = Storage::url();
            $artwork->image_path = $url;
            $artwork->price= $request->artPrice;
            $artwork->save();

            return back();
        }
    }
}
