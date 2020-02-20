<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Home;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
