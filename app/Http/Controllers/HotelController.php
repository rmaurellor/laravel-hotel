<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * List the profile for a given user.
     */
    public function list(): View
    {
        $hotels = Hotel::all();
        return view('hotel.list', [
            'hotels' => $hotels
        ]);
    }
}
