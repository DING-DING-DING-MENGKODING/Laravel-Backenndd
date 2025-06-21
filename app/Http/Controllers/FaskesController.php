<?php

namespace App\Http\Controllers;

use App\Models\Faskes;
use App\Models\StokDarah;
use App\Models\StokOksigen;
use Illuminate\Http\Request;

class FaskesController extends Controller
{
    public function index(Faskes $faskes)
    {
        return $faskes->all();
    }

    public function infostok()
    {
        $stokDarah = StokDarah::with('jenisDarah')
            ->selectRaw('jenis_darah_id, SUM(jumlah) as total')
            ->groupBy('jenis_darah_id')
            ->get()
            ->map(function ($item) {
                return [
                    'jenis_darah' => $item->jenisDarah->nama_jenis,
                    'total' => $item->total
                ];
            });

        $stokOksigen = StokOksigen::with('jenisOksigen')
            ->selectRaw('jenis_oksigen_id, SUM(jumlah) as total')
            ->groupBy('jenis_oksigen_id')
            ->get()
            ->map(function ($item) {
                return [
                    'jenis_oksigen' => $item->jenisOksigen->nama_jenis,
                    'total' => $item->total
                ];
            });

        return response()->json([
            'stok_darah' => $stokDarah,
            'stok_oksigen' => $stokOksigen
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_layanan' => 'required|in:Rumah Sakit,Puskesmas,Klinik,PMI',
            'alamat' => 'required|string',
            'about' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        $faskes = Faskes::create($validated);

        return response()->json([
            'message' => 'Faskes berhasil ditambahkan',
            'data' => $faskes
        ], 201);
    }

    public function show(string $id)
    {
        $faskes = Faskes::find($id);

        if (!$faskes) {
            return response()->json([
                'message' => 'Faskes tidak ditemukan'
            ], 404);
        }

        return response()->json($faskes);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_layanan' => 'required|in:Rumah Sakit,Puskesmas,Klinik,PMI',
            'alamat' => 'required|string',
            'about' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        $faskes = Faskes::findOrFail($id);

        $faskes->update($validated);

        return response()->json([
            'message' => 'Faskes berhasil diperbarui',
            'data' => $faskes
        ]);
    }

    public function destroy(string $id)
    {
        $faskes = Faskes::findOrFail($id);

        $faskes->delete();

        return response()->json([
            'message' => 'Faskes berhasil dihapus'
        ]);
    }
}
