<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Drink;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response|Factory|View
     */
    public function index()
    {
        $drinks = Drink::all();
        return view('administrator.drink.index', compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view('administrator.drink.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
       $this->validateRequest();

        if ($request->has('image')) {
            $drink = Drink::create([
               'image' => $request->image->storeAs('assets/images/drinks/', time(). "_" . $request->file('image')->getClientOriginalName(), 'public'),
               'category_id' => $request->input('categories'),
               'name' => $request->input('name'),
               'price' => doubleval($request->input('price'))
            ]);
        }
        return redirect(route('admin.drink'))->with('success', $drink->name.' a été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param Drink $drink
     * @return Factory|View
     */
    public function show(Drink $drink)
    {
        return view('administrator.drink.show', compact('drink'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Drink $drink
     * @return Factory|View
     */
    public function edit(Drink $drink)
    {
        $categories = Category::all();
        return view('administrator.drink.edit', compact('drink', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Drink $drink
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Drink $drink)
    {
        $this->validateRequest();

        if ($request->has('image')) {
            $drink->update([
               'image' => $request->image->storeAs('assets/images/drinks/', time(). "_" .$request->file('image')->getClientOriginalName(), 'public'),
               'name' => $request->input('name'),
               'price' => doubleval($request->input('price')),
               'category_id' => $request->input('categories')
            ]);
        }
        return redirect(route('admin.drink'))->with('success', $drink->name.' a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Drink $drink
     * @return RedirectResponse|Redirector
     * @throws Exception
     */
    public function destroy(Drink $drink)
    {
        $drink->delete();
        return redirect(route('admin.drink'))->with('success', 'La suppression a été effectuée avec succès');
    }

    private function validateRequest() {
        return request()->validate([
            'categories' => 'required',
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|file|image|max:9500|mimes:jpg,jpeg,png'
        ], [
            'categories.required' => 'Veuillez sélectionner une option dans catégorie',
            'name.required' => 'Veuillez saisir le nom',
            'price.required' => 'Veuillez saisir le prix',
            'image.required' => 'Veuillez choisir une image',
            'image.file' => 'Veuillez choisir un fichier',
            'image.image' => 'Votre fichier n\'est pas une image',
            'image.max' => 'Votre image ne doit pas excéder 9,5Mo',
            'image.mimes' => 'Choisir une image en format jpg, jpeg ou png'
        ]);
    }
}
