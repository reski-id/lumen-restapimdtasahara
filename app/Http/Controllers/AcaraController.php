<?php

namespace App\Http\Controllers;

use App\Acara;
use Illuminate\Http\Request;


class AcaraController extends Controller
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
        $Acara = Acara::all();
        if ($Acara) {
            return response()->json([
                'success'   => true,
                'message'   => 'Acara Siswa',
                'data'      => $Acara
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan!',
            ], 404);
        }
        // return response()->json($Acara);
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
            'tanggal' => 'date|required',
            'acara' => 'required|string',
            'lokasi' => 'string|required',
        ]);


        $Acara = new Acara;

        $Acara->tanggal = $request->tanggal;
        $Acara->acara = $request->acara;
        $Acara->lokasi = $request->lokasi;

        $Acara->save();

        return response()->json([
            'success'   => true,
            'message'   => 'Acara Siswa',
            'data'      => $Acara
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Acara  $Acara
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Acara = Acara::find($id);
        if(!$Acara){
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan!',
            ],404);
        }

        return response()->json([
            'success'   => true,
            'message'   => 'Acara Siswa',
            'data'      => $Acara
        ],201);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Acara  $Acara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tanggal' => 'date',
            'acara' => 'string',
            'lokasi' => 'string',
        ]);


        $Acara = Acara::find($id);
        if(!$Acara){
            return response()->json([
                'success'   => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }

        $Acara->tanggal = $request->tanggal;
        $Acara->acara = $request->acara;
        $Acara->lokasi = $request->lokasi;
        $Acara->save();
        return response()->json([
            'success'   => true,
            'Message' => 'Data berhasil diupdate',
            'data'    => $Acara
        ],201);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Acara  $Acara
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $Acara = Acara::find($id);
        
        if(!$Acara){
            return response()->json([
                'success'   => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }

        $Acara->delete();

        return response()->json([
            'success'   => true,
            'Message' => 'Data berhasil dihapus'
        ],201);

    }
}
