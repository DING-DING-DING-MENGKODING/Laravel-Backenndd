<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Ambulance $ambulances)
    {
        return $ambulances->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'faskes_id' => 'required',
            'nama_mobil' => 'required|string|max:255',
            'nomor_polisi' => 'required|string',
            'status' => 'required|in:Available,Unavailable',
        ]);

        $ambulance = Ambulance::create($validated);

        return response()->json([
            'message' => 'Ambulance berhasil ditambahkan',
            'data' => $ambulance
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ambulance = Ambulance::find($id);

        if (!$ambulance) {
            return response()->json([
                'message' => 'ambulance tidak ditemukan'
            ], 404);
        }

        return response()->json($ambulance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'faskes_id' => 'required',
            'nama_mobil' => 'required|string|max:255',
            'nomor_polisi' => 'required|string',
            'status' => 'required|in:Available,Unavailable',
        ]);

        $ambulance = Ambulance::findOrFail($id);

        $ambulance->update($validated);

        return response()->json([
            'message' => 'Ambulance berhasil diperbarui',
            'data' => $ambulance
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ambulance = Ambulance::findOrFail($id);

        $ambulance->delete();

        return response()->json([
            'message' => 'Ambulance berhasil dihapus'
        ]);
    }
}
