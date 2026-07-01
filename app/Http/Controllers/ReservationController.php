<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'tel' => 'required',
            'date' => 'required',
            'heure' => 'required',
            'couverts' => 'required',
            'notes' => 'nullable'
        ]);

        $reservation = Reservation::create($data);

        return response()->json([
            'message' => 'Réservation enregistrée avec succès',
            'data' => $reservation
        ]);
    }
}