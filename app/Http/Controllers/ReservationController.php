<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Log;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Store reservation request received', $request->all());

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required',
            'people' => 'required|integer|min:1',
            'pesan' => 'nullable|string',
        ]);

       
        try {
            Reservation::create($validatedData);
            Log::info('Reservation created successfully');
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            Log::error('Failed to create reservation', ['error' => $e->getMessage()]);
            return response()->json(['status' => 'error', 'message' => 'Failed to save reservation. Please try again later.']);
        }
    }
}
