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
        if (!empty($request->file('newArt')) && !empty($request->artDescription)) {
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

    public function upload_photo(Request $request)
    {
        if (!empty($request->file('newPhoto'))) {
            $request->file('newPhoto')->store('public');
            $user= User::find(Auth::id());
            $user->profile_image_path = $request->newPhoto->hashName();
            $user->save();

            return back();
        }
    }

    public function upload_bio(Request $request)
    {
        if (!empty($request->newBio)) {
            $user= User::find(Auth::id());
            $user->bio = $request->newBio;
            $user->save();

            return back();
        }

    }


    public function fillDirectory(){
        $user = User::get();
        $artwork = Artwork::get();
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
            'uploadedArtwork' => $uploadedArtwork,
            'user' => $user
        ];
        return view('artist')->with($data);
    }

    public function fillOtherProfile($id){
        $user = User::find($id);
        $uploadedArtwork = Artwork::where('user_id', '=', $id)
        ->get();
        $data = [
            'uploadedArtwork' => $uploadedArtwork,
            'user' => $user
        ];
        return view('seeartist')->with($data);
    }




}
