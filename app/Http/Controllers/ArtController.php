<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



use App\Artwork;
use App\User;
use Auth;
use Tags;
use Log;

class ArtController extends Controller
{
    public function upload_art(Request $request)
    {
        if (!empty($request->file('newArt'))) {
            $request->file('newArt')->store('public');

            $artwork = new Artwork;
            $artwork->user_id = Auth::id();
            $artwork->name= $request->artName;
            $artwork->description = $request->artDescription;
            $artwork->image_path = $request->newArt->hashName();
            $artwork->price= $request->artPrice;
            $artwork->type = $request->artType;
            $artwork->medium = $request->artMedium;
            $artwork->style = $request->artStyle;
            $artwork->save();

            return back();
        }
    }

    public function fillDirectory(){
        $artwork = Artwork::with('user')->get();
        $data = [
            'artwork' => $artwork
        ];
        return view('home')->with($data);
    }

    public function fillDirectoryProfile(){
        $user = User::find(Auth::id());
        $uploadedArtwork = Artwork::where('user_id', '=', Auth::id())
        ->get();
        $data = [
            'uploadedArtwork' => $uploadedArtwork
        ];
        return view('artist')->with($data);
    }

}
