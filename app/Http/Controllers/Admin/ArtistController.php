<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $artists = Artist::all();
        return view('administrator.artist.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('administrator.artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ], [
            'image.required' => 'Veuillez Sélectionner une image',
        ]);

        $this->validateRequest();

        if($request->has('image')) {
            $artist = Artist::create([
                'image' => $request->image->storeAs('assets/images/artists/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
                'name' => $request->input('name'),
                'facebook' => $request->input('facebook'),
                'whatsapp' => $request->input('whatsapp'),
                'instagram' => $request->input('instagram'),
                'youtube' => $request->input('youtube')
            ]);
        }
        return redirect(route('admin.artist'))->with('success', $artist->name.' a bien été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param Artist $artist
     * @return Factory|View
     */
    public function show(Artist $artist)
    {
        return view('administrator.artist.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Artist $artist
     * @return Factory|View
     */
    public function edit(Artist $artist)
    {
        return view('administrator.artist.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Artist $artist
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Artist $artist)
    {
        $this->validateRequest();

        $artist->update([
            'name' => $request->input('name'),
            'whatsapp' => $request->input('whatsapp'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'youtube' => $request->input('youtube')
        ]);

        if ($request->has('image')) {
            $artist->update([
                'image' => $request->image->storeAs('assets/images/artists/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
            ]);
        }
        return redirect(route('admin.artist'))->with('success', 'La modification de '.$artist->name.' a été effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Artist $artist
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect(route('admin.artist'))->with('success', 'L\'opération de suppression a été effectuée avec succès');
    }

    private function validateRequest() {
        return request()->validate([
            'name' => 'required',
            'image' => 'file|image|max:9500|mimes:jpg,jpeg,png',
            'whatsapp' => 'sometimes',
            'facebook' => 'sometimes',
            'instagram' => 'sometimes',
            'youtube' => 'required',

        ],
            [
                'name.required' => 'Veuillez saisir le nom',
                'image.file' => 'Veuillez choisir un fichier',
                'image.image' => 'Votre fichier n\'est pas une image',
                'image.max' => 'Votre image ne doit pas excéder 9,5Mo',
                'image.mimes' => 'Choisir une image en format jpg, jpeg ou png',
                'youtube.required' => 'Veuillez entrer l\'url de la chaîne de l\'artiste'
            ]);
    }
}
