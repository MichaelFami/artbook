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

            
            $artwork = Artwork::where('user_id', '=', Auth::id())->get();
            $artwork->name= $request->artName;
            $artwork->description= $request->artDescription;
            $artwork->image_path= $request->email;
            $artwork->price= $request->artPrice;
            $artwork->save();

            return back();
        }
    }
}
