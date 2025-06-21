<?php

namespace App\Http\Controllers;

use App\Models\StokDarah;
use Illuminate\Http\Request;
use App\Models\TransaksiStok;

class TransaksiStokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TransaksiStok $transaksi)
    {
        return $transaksi->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'    => 'required',
            'faskes_id'  => 'required',
            'admin_id'   => 'required',
            'jenis_stok' => 'required|in:darah,oksigen',
            'status'     => 'required|in:masuk,keluar',
            'jumlah'     => 'required|integer|min:1',
        ]);

        switch ($validated['jenis_stok']) {
            case 'darah':
                $stok = \App\Models\StokDarah::where('faskes_id', $validated['faskes_id'])->first();
                break;

            case 'oksigen':
                $stok = \App\Models\StokOksigen::where('faskes_id', $validated['faskes_id'])->first();
                break;

            default:
                return response()->json(['message' => 'Jenis stok tidak dikenali.'], 400);
        }

        if (!$stok) {
            return response()->json(['message' => 'Stok tidak ditemukan.'], 404);
        }

        if ($validated['status'] === 'masuk') {
            $stok->jumlah += $validated['jumlah'];
        } elseif ($validated['status'] === 'keluar') {
            if ($stok->jumlah < $validated['jumlah']) {
                return response()->json(['message' => 'Stok tidak mencukupi.'], 400);
            }
            $stok->jumlah -= $validated['jumlah'];
        }
        $stok->save();

        $transaksi = \App\Models\TransaksiStok::create($validated);

        return response()->json([
            'message' => 'Transaksi berhasil dicatat.',
            'data'    => $transaksi
        ], 201);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
