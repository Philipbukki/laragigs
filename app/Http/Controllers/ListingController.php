<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function index(){

        $listings = Listing::all();

        return view('listings/index',[
            "listings"=> $listings
    
        ]);

    }

    public function show($id){

        $listing = Listing::find($id);

        return view('listings/show',[

        "listing"=> $listing,

    ]);

    }
}
