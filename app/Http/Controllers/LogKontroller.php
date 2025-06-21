<?php

namespace App\Http\Controllers;

use App\Models\LogStok;
use Illuminate\Http\Request;

class LogKontroller extends Controller
{
    public function index(Logstok $logs)
    {
        return $logs->all();
    }

    public function show(string $id)
    {
        $log = LogStok::find($id);

        if (!$log) {
            return response()->json([
                'message' => 'Log tidak ditemukan'
            ], 404);
        }

        return response()->json($log);
    }
}
