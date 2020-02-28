<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Home;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|Factory|View
     */
    public function profileIndex()
    {
        $homeProfile = Home::where('profile', 1)->get();
        return view('administrator.home.profile.index', compact('homeProfile'));
    }

    public function profileEdit(Home $home)
    {
        return view('administrator.home.profile.edit', compact('home'));
    }

    /*public function profileStore(Request $request) {

        request()->validate([
            'profile' => 'required|file|image|max:5000|mimes:jpg,jpeg,png'
        ],
            [
                'profile.file' => 'Veuillez choisir un fichier',
                'profile.required' => 'Ce champ est requis',
                'profile.image' => 'Votre fichier n\'est pas une image',
                'profile.max' => 'Votre image ne doit pas excéder 5Mo',
                'profile.mimes' => 'Votre image doit être en format jpg, jpeg ou png'
            ]);

        if(request()->has('profile')) {

            $profile = Home::create([
                'image' => request()->profile->storeAs('assets/images/home/profile', time() . "_" . $request->file('profile')->getClientOriginalName(), 'public'),
                'profile' => 1
            ]);

            $image = Image::make(public_path('storage/' . $profile->image))->fit(1632, 2456);
            $image->save();
        }

        return redirect(route('home.profile'))->with('success', 'Opération effectuée avec succès');
    }*/


    public function profileUpdate(Request $request, Home $home) {
        $request->validate([
            'profile' => 'required|file|image|max:5000|mimes:jpg,jpeg,png'
        ],
            [
                'profile.file' => 'Veuillez choisir un fichier',
                'profile.required' => 'Ce champ est requis',
                'profile.image' => 'Votre fichier n\'est pas une image',
                'profile.max' => 'Votre image ne doit pas excéder 5Mo',
                'profile.mimes' => 'Votre image doit être en format jpg, jpeg ou png'
            ]);

        if(request()->has('profile')) {
            $home->update([
                'image' => $request->profile->storeAs('assets/images/home/profile', time(). "_" .$request->file('profile')->getClientOriginalName() , 'public'),
                'profile' => 1
            ]);
            $image = Image::make('storage/'.$home->image)->fit(1632, 2456);
            $image->save();
        }

        return redirect(route('home.profile'))->with('success', 'Opération effectuée avec succès');
    }

    /**
     * @return Factory|View
     */

    public function couvertureIndex() {
        $couvertures = Home::where(['profile' => null ,'home_image'=> 1, 'fade' => null])->get();
        return view('administrator.home.couverture.index', compact('couvertures'));
    }

    public function couvertureEdit(Home $home) {
        return view('administrator.home.couverture.edit', compact('home'));
    }

    /*public function couvertureStore(Request $request) {
        request()->validate([
            'home_image' => 'required|file|image|max:5000|mimes:jpg,jpeg,png'
        ],
            [
                'home_image.required' => 'Ce champ est requis',
                'home_image.file' => 'Veuillez choisir un fichier',
                'home_image.image' => 'Votre fichier n\'est pas une image',
                'home_image.max' => 'Votre fichier ne doit pas excéder 5Mo',
                'home_image.mimes' => 'Votre fichier doit être en format jpg, jpeg ou png'
            ]);

        if (request()->has('home_image')) {
            $home_image = Home::create([
                'image' => request()->home_image->storeAs('assets/images/home/couverture', time() . "_" . $request->file('home_image')->getClientOriginalName(), 'public'),
                'home_image' => 1
            ]);

            $image = Image::make(public_path('storage/' . $home_image->image))->fit(5760, 3840);
            $image->save();
        }

        return redirect(route('home.couverture'))->with('success', 'Opération réussie avec succès');
    }*/

    public function couvertureUpdate(Request $request, Home $home) {
        $request->validate([
            'home_image' => 'required|file|image|max:8000|mimes:jpg,jpeg,png'
        ],
            [
                'home_image.required' => 'Ce champ est requis',
                'home_image.file' => 'Veuillez choisir un fichier',
                'home_image.image' => 'Votre fichier n\'est pas une image',
                'home_image.max' => 'Votre fichier ne doit pas excéder 8Mo',
                'home_image.mimes' => 'Votre fichier doit être en format jpg, jpeg ou png'
            ]);

        if (request()->has('home_image')) {
            $home->update([
                'image' => $request->home_image->storeAs('assets/images/home/couverture', time(). "_" .$request->file('home_image')->getClientOriginalName(), 'public'),
                'home_image' => 1
            ]);

            /*$image = Image::make(public_path('storage/'.$home->image))->fit(5760, 3840);
            $image->save();*/
        }



        return redirect(route('home.couverture'))->with('success', 'Opération réussie avec succès');
    }

    public function fadeIndex() {
        $fades = Home::where(['profile' => null, 'home_image' => null, 'fade' => 1])->get();
        return view('administrator.home.fade.index', compact('fades'));
    }

    public function fadeEdit(Home $home) {
        return view('administrator.home.fade.edit', compact('home'));
    }

    /*public function fadeStore(Request $request) {
        $request->validate([
            'fade_home' => 'required|file|image|max:9500|mimes:jpg,jpeg,png'
        ], [
           'fade_home.required' => 'Ce champ est requis',
           'fade_home.file' => 'Veuillez choisir un fichier',
           'fade_home.image' => 'Votre fichier n\'est pas une image',
           'fade_home.max' => 'Votre image ne doit pas excéder 9,5Mo',
           'fade_home.mimes' => 'Votre image doit être au format jpg, jpeg ou png'
        ]);

        if (request()->has('fade_home')) {
            $fade = Home::create([
               'image' => $request->fade_home->storeAs('assets/image/home/fade', time(). "_" .$request->file('fade_home')->getClientOriginalName(), 'public'),
               'fade' => 1
            ]);
        }
        return redirect(route('home.fade'))->with('success', 'Opération effectuée avec succès');
    }*/

    public function fadeUpdate(Request $request, Home $home) {
        $request->validate([
            'fade_home' => 'required|file|image|max:9500|mimes:jpg,jpeg,png'
        ], [
            'fade_home.required' => 'Ce champ est requis',
            'fade_home.file' => 'Veuillez choisir un fichier',
            'fade_home.image' => 'Votre fichier n\'est pas une image',
            'fade_home.max' => 'Votre image ne doit pas excéder 9,5Mo',
            'fade_home.mimes' => 'Votre image doit être au format jpg, jpeg ou png'
        ]);

        if (request()->has('fade_home')) {
            $home->update([
                'image' => $request->fade_home->storeAs('assets/image/home/fade', time(). "_" .$request->file('fade_home')->getClientOriginalName(), 'public'),
                'fade' => 1
            ]);
        }
        return redirect(route('home.fade'))->with('success', 'Opération effectuée avec succès');
    }

}
