<?php

namespace App\Http\Controllers\Visitors;

use App\Artist;
use App\DiscJockey;
use App\Drink;
use App\Event;
use App\Gallery;
use App\Home;
use App\Http\Controllers\Controller;
use App\Miami;
use App\Party;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * @return Factory|View
     */
     public function home() {
         $profileImage = Home::where('profile', 1)->get();
         $couvertures = Home::where('home_image', 1)->get();
         $fades = Home::where('fade', 1)->get();
         $events = Event::where('finished', 0)->limit(2)->orderBy('date')->get();
         return view('visitors.home', compact('profileImage', 'couvertures', 'fades', 'events'));
     }

    /**
     * @return Factory|View
     */
     public function artist() {
         $artists = Artist::all();
         return view('visitors.artiste', compact('artists'));
     }

    /**
     * @return Factory|View
     */
     public function dj() {
         $discJockeys = DiscJockey::all();
         return view('visitors.discJockeys', compact('discJockeys'));
     }

    /**
     * @return Factory|View
     */
     public function boisson() {

         $wines = Drink::where('category_id', 1)->get();
         $waters = Drink::where('category_id', 2)->get();
         $beers = Drink::where('category_id', 3)->get();
         return view('visitors.boisson', compact('wines', 'waters', 'beers'));
     }

     /**
      * @return Factory|View
      */
     public function miami() {
         $couvertures = Miami::where(['couverture' => 1, 'pageImage' => null])->get();
         $images = Miami::where(['couverture' => null, 'pageImage' => 1])->get();
         $videos = Party::limit(4)->orderByDesc('id')->get();
         return view('visitors.miami', compact('couvertures', 'images', 'videos'));
     }

    /**
     * @return Factory|View
     */
     public function galerie()
     {
         $galleries = Gallery::paginate(12);
         return view('visitors.galerie', compact('galleries'));
     }

    /**
     * @return Factory|View
     */
     public function events()
     {
         $events = Event::where('finished', 0)->orderBy('date')->get();
         return view('visitors.event', compact('events'));
     }

     public function parties() {
         $videos = Party::paginate(10);
         return view('visitors.party', compact('videos'));
     }
}
