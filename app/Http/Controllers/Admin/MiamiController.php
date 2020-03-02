<?php

namespace App\Http\Controllers\Admin;

use App\Miami;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MiamiController extends Controller
{

    public function CouvertureIndex() {
        $couvertures = Miami::where('couverture', 1)->get();
        return view('administrator.miami.couverture.index', compact('couvertures'));
    }

    /*public function couvertureStore(Request $request) {
        $request->validate([
            'image' => 'required|file|image|max:9500|mimes:jp,jpeg,png'
        ],
            [
                'image.required' => 'Veuillez Sélectionner une image',
                'image.file' => 'Veuillez choisir un fichier',
                'image.image' => 'Votre fichier n\'est pas une image',
                'image.max' => 'Votre image ne doit pas excéder 9,5Mo',
                'image.mimes' => 'Choisir une image en format jpg, jpeg ou png'
            ]);

        if ($request->has('image')) {
            Miami::create([
                'image' => $request->image->storeAs('assets/images/miami/couverture/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
                'couverture' => 1
            ]);
        }
        return redirect(route('miami.couverture'))->with('success', 'Insertion effectuée avec succès');
    }*/

    public function couvertureEdit(Miami $miami) {
        return view('administrator.miami.couverture.edit', compact('miami'));
    }

    public function couvertureUpdate(Request $request, Miami $miami) {
        $request->validate([
            'image' => 'required|file|image|max:9500|mimes:jp,jpeg,png'
        ],
            [
                'image.required' => 'Veuillez Sélectionner une image',
                'image.file' => 'Veuillez choisir un fichier',
                'image.image' => 'Votre fichier n\'est pas une image',
                'image.max' => 'Votre image ne doit pas excéder 9,5Mo',
                'image.mimes' => 'Choisir une image en format jpg, jpeg ou png'
            ]);

        if ($request->has('image')) {
            $miami->update([
                'image' => $request->image->storeAs('assets/images/miami/couverture/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
                'couverture' => 1
            ]);
        }
        return redirect(route('miami.couverture'))->with('success', 'Opération de modification effectuée avec succès');
    }

    public function imageIndex() {
        $images = Miami::where(['couverture' => null, 'pageImage' => 1])->get();
        return view('administrator.miami.image.index', compact('images'));
    }

    public function imageStore(Request $request) {
        $request->validate([
            'image' => 'required|file|image|max:9500|mimes:jp,jpeg,png'
        ],
            [
                'image.required' => 'Veuillez Sélectionner une image',
                'image.file' => 'Veuillez choisir un fichier',
                'image.image' => 'Votre fichier n\'est pas une image',
                'image.max' => 'Votre image ne doit pas excéder 9,5Mo',
                'image.mimes' => 'Choisir une image en format jpg, jpeg ou png'
            ]);

        if ($request->has('image')) {
            Miami::create([
                'image' => $request->image->storeAs('assets/images/miami/image/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
                'pageImage' => 1
            ]);
        }
        return redirect(route('miami.image'))->with('success', 'Insertion effectuée avec succès');
    }

    public function imageEdit(Miami $miami) {
        return view('administrator.miami.image.edit', compact('miami'));
    }

    public function imageUpdate(Request $request, Miami $miami) {
        $request->validate([
            'image' => 'required|file|image|max:9500|mimes:jp,jpeg,png'
        ],
            [
                'image.required' => 'Veuillez Sélectionner une image',
                'image.file' => 'Veuillez choisir un fichier',
                'image.image' => 'Votre fichier n\'est pas une image',
                'image.max' => 'Votre image ne doit pas excéder 9,5Mo',
                'image.mimes' => 'Choisir une image en format jpg, jpeg ou png'
            ]);

        if ($request->has('image')) {
            $miami->update([
                'image' => $request->image->storeAs('assets/images/miami/image/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
                'pageImage' => 1
            ]);
        }
        return redirect(route('miami.image'))->with('success', 'Opération de modification effectuée avec succès');
    }
}
