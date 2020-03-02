<?php

namespace App\Http\Controllers\Admin;

use App\Party;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $videos = Party::paginate(3);
        return view('administrator.party.index', compact('videos'));
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
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
           'video' => 'required|mimetypes:video/mp4,video/avi,video/mkv'
        ], [
            'video.required' => 'Veuillez sélectionner la vidéo',
            'video.mimetypes' => 'Votre vidéo n\'est pas au bon format. Formats exigés:.mp4, .avi, .mkv'
        ]);

        if ($request->has('video')) {
            Party::create([
               'video' => $request->video->storeAs('assets/videos/miami/parties/', time(). "_" .$request->file('video')->getClientOriginalName(), 'public')
            ]);
        }
        return back()->with('success', 'Votre vidéo a bien été uploadée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param Party $party
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Party $party
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Party $party
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Party $party)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Party $party
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Party $party)
    {
        $party->delete();
        return back()->with('success', 'La vidéo a été supprimée avec succès');
    }
}
