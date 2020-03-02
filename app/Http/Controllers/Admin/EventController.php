<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $events = Event::where('finished', 0)->orderBy('date')->paginate(10);
        $eventFinished = Event::where('finished', 1)->orderByDesc('date')->paginate(10);
        return view('administrator.event.index', compact('events', 'eventFinished'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('administrator.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|file|image|mimes:jpg,jpeg,png',
            'date' => 'required|date_format:Y-m-d',
            'hour' => 'required|date_format:H:i',
            'lieu' => 'required',
        ], [
            'name.required' => 'Veuillez saisir le nom de l\'événement',
            'image.required' => 'Veuillez sélectionner une image',
            'date.required' => 'Veuillez saisir la date',
            'hour.required' => 'Veuillez saisir l\'heure',
            'lieu.required' => 'Veuillez saisir le lieu',
            'date.date_format' => 'Format de date incorrect. Format exigé : aaaa-mm-jj',
            'hour.date_format' => 'Format d\'heure incorrect. Format exigé : 18:00',
            'image.file' => 'Veuillez choisir un fichier',
            'image.image' => 'Votre fichier n\'est pas une image',
            'image.mimes' => 'Choisir une image en format jpg, jpeg ou png',
        ]);

        if($request->has('image')) {
            $event = Event::create([
                'image' => $request->image->storeAs('assets/images/events/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
                'name' => $request->input('name'),
                'date' => $request->input('date'),
                'hour' => $request->input('hour'),
                'lieu' => $request->input('lieu'),
                'artists' => $request->input('artist'),
                'discJockeys' => $request->input('discJockey'),
                'dressCode' => $request->input('dressCode'),
                'entry' => $request->input('entry'),
                'finished' => 0
            ]);
        }
        return redirect(route('event.index'))->with('success', 'L\'événement '. $event->name.' a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return Factory|View
     */
    public function show(Event $event)
    {
        return view('administrator.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Factory|View
     */
    public function edit(Event $event)
    {
        if($event->finished != 0) {
            abort('404');
        }
        return view('administrator.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Event $event
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'file|image|mimes:jpg,jpeg,png',
            'date' => 'required|date_format:Y-m-d',
            'hour' => 'required|date_format:H:i',
            'lieu' => 'required',
        ], [
            'name.required' => 'Veuillez saisir le nom de l\'événement',
            'date.required' => 'Veuillez saisir la date',
            'hour.required' => 'Veuillez saisir l\'heure',
            'lieu.required' => 'Veuillez saisir le lieu',
            'date.date_format' => 'Format de date incorrect. Format exigé : aaaa-mm-jj',
            'hour.date_format' => 'Format d\'heure incorrect. Format exigé : 18:00',
            'image.file' => 'Veuillez choisir un fichier',
            'image.image' => 'Votre fichier n\'est pas une image',
            'image.mimes' => 'Choisir une image en format jpg, jpeg ou png',
        ]);

        $event->update([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'hour' => $request->input('hour'),
            'lieu' => $request->input('lieu'),
            'artists' => $request->input('artist'),
            'discJockeys' => $request->input('discJockey'),
            'dressCode' => $request->input('dressCode'),
            'entry' => $request->input('entry'),
            'finished' => 0
        ]);

        if ($request->has('image')) {
            $event->update([
                'image' => $request->image->storeAs('assets/images/events/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
            ]);
        }
        return redirect(route('event.index'))->with('success', ' La modification de l\'événement a bien été effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect(route('admin.index'))->with('success', 'L\'événement a bien été supprimé');
    }

    /**
     * @param Event $event
     * @return RedirectResponse|Redirector
     */
    public function finished(Event $event) {
        $event->update([
            'finished' => 1
        ]);
        return redirect(route('event.index'))->with('success', 'L\'événement a été defini comme étant terminé');
    }
}
