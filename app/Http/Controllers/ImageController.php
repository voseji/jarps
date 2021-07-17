<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function index()
    {

      return view('candidate-passport');
    }

    public function storeImage(Request $request)
    {
        $request->validate([
          'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = new Image;

        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('file')->storeAs('images', $imageName, 'public');
        }

        $image->name = $imageName;
        $image->path = '/images'.$path;
        $image->save();

        return view('candidate-passport')->with('status', 'Candidate succeffully added');
        //return response()->json('Image uploaded successfully');
    }
}
