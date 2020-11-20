<?php

namespace App\Http\Controllers;

use App\Absensubuh;
use Illuminate\Http\Request;


class AbsensubuhController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //token
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Absensubuh = Absensubuh::all();
         if ($Absensubuh) {
            return response()->json([
                'success'   => true,
                'message'   => 'Absensubuh Siswa',
                'data'      => $Absensubuh
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
            ], 404);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'TglAbsensubuh' => 'date|required',
            'nis' => 'required|integer',
            'KetAbsensubuh' => 'string|required',
        ]);

        $Absensubuh = new Absensubuh;

        $Absensubuh->TglAbsensubuh = $request->TglAbsensubuh;
        $Absensubuh->nis = $request->nis;
        $Absensubuh->KetAbsensubuh = $request->KetAbsensubuh;

        $Absensubuh->save();
        return response()->json([
            'success' => false,
            'Message' => 'Data berhasil disimpan',
            'data'      => $Absensubuh,
        ],201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Absensubuh  $Absensubuh
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Absensubuh = Absensubuh::find($id); 
        
         if ($Absensubuh) {
            return response()->json([
                'success' => true,
                'message'   => 'Absen subuh Siswa',
                'data'      => $Absensubuh
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan!',
            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absensubuh  $Absensubuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'TglAbsensubuh' => 'date',
            'nis' => 'integer',
            'KetAbsensubuh' => 'string',
        ]);

        $Absensubuh = Absensubuh::find($id);

        if(!$Absensubuh){
            return response()->json([
                'success' => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }

        $Absensubuh->TglAbsensubuh = $request->TglAbsensubuh;
        $Absensubuh->nis = $request->nis;
        $Absensubuh->KetAbsensubuh = $request->KetAbsensubuh;

        $Absensubuh->save();

        return response()->json([
            'success' => true,
            'Message' => 'Data berhasil diupdate',
            'data'    => $Absensubuh,
        ],201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absensubuh  $Absensubuh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $Absensubuh = Absensubuh::find($id);
        if(!$Absensubuh){
            return response()->json([
                'success' => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }

        $Absensubuh->delete();

        return response()->json([
            'success' => true,
            'Message' => 'Data berhasil dihapus'
        ],201);

    }
}
