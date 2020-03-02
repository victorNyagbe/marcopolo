<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('administrator.gallery.index', compact('galleries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'file|image|mimes:jpg,jpeg,png',
            'whatsapp' => 'sometimes',
            'facebook' => 'sometimes',
            'instagram' => 'sometimes',
            'youtube' => 'sometimes',

        ],
            [
                'name.required' => 'Veuillez saisir le nom',
                'image.file' => 'Veuillez choisir un fichier',
                'image.image' => 'Votre fichier n\'est pas une image',
                'image.mimes' => 'Choisir une image en format jpg, jpeg ou png',
            ]);

        if($request->has('image')) {

            $images = Collection::wrap($request->file('image'));

            $images->each(function ($image) {

                $basename = Str::random();
                $image_name = $basename. "." .$image->getClientOriginalExtension();
                /*$thumbnail = $basename. "_thumb." .$image->getClientOriginalExtension();*/

                Gallery::create([
                    'image' => $image->storeAs('assets/images/gallery/', $image_name, 'public'),
                ]);

            });
        }


        return back()->with('success', 'Opération réussie');
    }

    public function destroy(Gallery $gallery) {
        File::delete([
            public_path('storage/'.$gallery->image)
        ]);

        $gallery->delete();

        return back()->with('success', 'Suppression réussie');
    }
}
