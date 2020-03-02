<?php

namespace App\Http\Controllers\Admin;

use App\discJockey;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class DiscJockeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $djs = DiscJockey::all();
        return view('administrator.discJockey.index', compact('djs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('administrator.discJockey.create');
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
            $dj = DiscJockey::create([
                'image' => $request->image->storeAs('assets/images/djs/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
                'name' => $request->input('name'),
                'facebook' => $request->input('facebook'),
                'whatsapp' => $request->input('whatsapp'),
                'instagram' => $request->input('instagram'),
                'youtube' => $request->input('youtube')
            ]);
        }
        return redirect(route('admin.djs'))->with('success', $dj->name.' a bien été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param discJockey $discJockey
     * @return Factory|View
     */
    public function show(discJockey $discJockey)
    {
        return view('administrator.discJockey.show', compact('discJockey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param discJockey $discJockey
     * @return Factory|View
     */
    public function edit(discJockey $discJockey)
    {
        return view('administrator.discJockey.edit', compact('discJockey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param discJockey $discJockey
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, discJockey $discJockey)
    {
        $this->validateRequest();

        $discJockey->update([
            'name' => $request->input('name'),
            'whatsapp' => $request->input('whatsapp'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'youtube' => $request->input('youtube')
        ]);

        if ($request->has('image')) {
            $discJockey->update([
                'image' => $request->image->storeAs('assets/images/djs/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
            ]);
        }
        return redirect(route('admin.djs'))->with('success', 'La modification de '.$discJockey->name.' a été effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param discJockey $discJockey
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(discJockey $discJockey)
    {
        $discJockey->delete();
        return redirect(route('admin.djs'))->with('success', 'Suppression effectuée avec succès');
    }

    private function validateRequest() {
        return request()->validate([
            'name' => 'required',
            'image' => 'file|image|max:9500|mimes:jpg,jpeg,png',
            'whatsapp' => 'sometimes',
            'facebook' => 'sometimes',
            'instagram' => 'sometimes',
            'youtube' => 'sometimes',

        ],
            [
                'name.required' => 'Veuillez saisir le nom',
                'image.file' => 'Veuillez choisir un fichier',
                'image.image' => 'Votre fichier n\'est pas une image',
                'image.max' => 'Votre image ne doit pas excéder 9,5Mo',
                'image.mimes' => 'Choisir une image en format jpg, jpeg ou png',
            ]);
    }
}
