<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class UserController extends Controller
{
    public function BerandaUser()
    {
        $listings = Listing::all();
        return view('user.beranda', compact('listings'));
    }

    public function aboutus()
    {
        return view('user.about-us');
    }
    public function detail($id)
    {
        $listing = Listing::find($id);
        $listing->increment('views');
        return view('user.detail', compact('listing'));
    }
}