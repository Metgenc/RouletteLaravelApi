<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skor;


class SkorController extends Controller
{
    public function addSkor(Request $request)
    {
            
            $skor= Skor::create([
                'email' => $request->email,
                'skor' => $request->skor,

            ]);
            return response()->json([
                'status' => true,
                'message' => 'Skor Eklendi',
             ], 200);
        
    }

    public function getSkor(Request $request)
    {
            $skor=Skor::Where('email' , $request->email)->orderBy('id', 'desc')->get();


            return response()->json([
                'status' => true,
                'message' => $skor,
             ], 200);
    }

    public function getAllSkor(Request $request)
    {
            $skor=Skor::orderBy('skor', 'desc')->take(10)->get();


            return response()->json([
                'status' => true,
                'message' => $skor,
             ], 200);
    }

}

