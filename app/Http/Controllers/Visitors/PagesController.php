<?php

namespace App\Http\Controllers\Visitors;

use App\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     public function home() {
         $profileImage = Home::where('profile', 1)->get();
         $couvertures = Home::where('home_image', 1)->get();
         $fades = Home::where('fade', 1)->get();
         return view('visitors.home', compact('profileImage', 'couvertures', 'fades'));
     }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     public function artist() {
         return view('visitors.artiste');
     }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     public function dj() {
         return view('visitors.discJockeys');
     }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     public function boisson() {
         return view('visitors.boisson');
     }

     /**
      * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
      */
     public function miami() {
         return view('visitors.miami');
     }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
     public function galerie() {
         return view('visitors.galerie');
     }
}
