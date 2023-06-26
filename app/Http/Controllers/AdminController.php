<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }
    public function list()
    {
        $listings = Listing::all();
        return view('admin.list',compact('listings'));
    }
    public function BerandaAdmin()
    {
        $listings = Listing::all();

        return view('admin.beranda', compact('listings'));
    }

    public function store(Request $request)
    {
        $validationArray = [
            'title' => 'required',
            'company' => 'required',
            'logo' => 'file|max:2048',
            'location' => 'required',
        ];

        if($request->file('logo')) {
            $validationArray['logo'] = $request->file('logo')->store('public');
        }


        if (!Auth::check()) {
            $validationArray = array_merge($validationArray, [
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:5',
                'name' => 'required'
            ]);
        }

        // process the payment and create the listing
        try {

            $listing = $request->all();
            $listings = new Listing;
            $listings->title = $listing['title'];
            $listings->company = $listing['company'];
            $listings->location = $listing['location'];
            $listings->logo = $request->file('logo')->store('');
            $listings->save();
            return redirect()->route('admin.beranda');
        } catch(\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
       
        $listingdata = Listing::find($id);
        //dd($program);
        return view('admin.edit', compact('listingdata'));
    }

    public function update(Request $request, $id)
    {
        try {

            $request->validate([
                'title' => 'required',
                'company' => 'required',
                'logo' => 'file|max:2048',
                'location' => 'required',
            ]);

            $web = Listing::find($id);
            $web->update($request->all());
            Listing::where('id', $id)->update([
                'logo' => $request->file('logo')->store('admin', 'public'),
            ]);
            return redirect()->route('admin.list')->with('success', __('Berhasil mengedit data'));
        } catch (\Throwable $th) {
            return redirect()->route('admin.list')->with('error', __($th->getMessage()));
        }
    }
  
    public function hapus($id)
    {
        Listing::where('id', $id)->delete();

        return redirect()->route('admin.beranda')->with('Sukses','Data berhasil di hapus');
    }
}