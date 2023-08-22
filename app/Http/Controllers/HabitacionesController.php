<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Habitaciones;

class HabitacionesController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(int $id): View
    {
        $habitaciones = Habitaciones::where('hotel_id', $id)->get();
        return view('habitaciones.show', [
            'habitaciones' => $habitaciones
        ]);
    }
}
