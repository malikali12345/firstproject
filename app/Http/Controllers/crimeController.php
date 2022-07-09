<?php

namespace App\Http\Controllers;
use App\Models\crime;
use Illuminate\Http\Request;

class crimeController extends Controller
{
    function crimeform()
    {
        return view('crime-report');
    }
    function storeCrime(Request $req)
    {

        $req->validate([
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $req->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);

        $name = $req-> name;
        $location = $req-> location;
        $date = $req-> date;
        $time = $req-> time;
        $type = $req-> type;
        $details = $req-> details;

        //image code start
        $imageName = time().'.'.$req->pic->extension();  
        $req->pic->move(public_path('images'), $imageName);
        $img_path = "images/$imageName";
        // echo $img_path;
        //image code End


        //Video code start
        $videoName = time().'.'.$req->video->extension();  
        $req->video->move(public_path('videos'), $videoName);
        $video_path = "videos/$videoName";
        // echo $video_path;
        //Video code End


        // echo $name ." " . $location . " " . $date. "  ".$time. "  ".$type. "  ".$details. "  ".$time;

        $store = new crime();
        $store -> name = $name;
        $store -> location = $location;
        $store -> date = $date;
        $store -> time = $time;
        $store -> crimetype = $type;
        $store -> details = $details;
        $store -> image = $img_path; 
        $store -> video = $video_path;

        $store -> save();
        // echo "data inserted sucessfuly";
        // return redirect()->back();
        // return response()->json("Form Submit Sucessfuly");
    }
}
