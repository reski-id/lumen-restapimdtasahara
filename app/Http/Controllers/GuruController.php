<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;


class GuruController extends Controller
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
        $Guru = Guru::all();

        if ($Guru) {
            return response()->json([
                'success'   => true,
                'message'   => 'Data Guru',
                'data'      => $Guru
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan!',
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
            'Nama' => 'required|string',
            'JenisKelamin' => 'required',
            'TempatLahir' => 'required|string',
            'Pendidikan' => 'required',
            'TanggalLahir' => 'required|date',
            'Agama' => 'required|string',
            'Alamat' => 'required|string',
            '$Guru->NoHp = $request->NoHp' => 'required|string',
        ]);

        $Guru = new Guru;

        $Guru->Nama = $request->Nama;
        $Guru->JenisKelamin = $request->JenisKelamin;
        $Guru->TempatLahir = $request->TempatLahir;
        $Guru->Pendidikan = $request->Pendidikan;
        $Guru->TanggalLahir = $request->TanggalLahir;
        $Guru->Agama = $request->Agama;
        $Guru->Alamat = $request->Alamat;
        $Guru->NoHp = $request->NoHp;

        $Guru->save();
        
        return response()->json([
            'success'   => true,
            'message'   => 'Data Guru',
            'data'      => $Guru
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $Guru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Guru = Guru::find($id);

        if ($Guru) {
            return response()->json([
                'success'   => true,
                'message'   => 'Data Guru',
                'data'      => $Guru
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
     * @param  \App\Guru  $Guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'Nama' => 'string',
            'JenisKelamin' => 'required',
            'TempatLahir' => 'string',
            'Pendidikan' => 'required',
            'TanggalLahir' => 'date',
            'Agama' => 'string',
            'Alamat' => 'string',
            '$Guru->NoHp = $request->NoHp' => 'string',
        ]);

        $Guru = Guru::find($id);

        if(!$Guru){
            return response()->json([
                'success'   => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }

        $Guru->Nama = $request->Nama;
        $Guru->JenisKelamin = $request->JenisKelamin;
        $Guru->TempatLahir = $request->TempatLahir;
        $Guru->Pendidikan = $request->Pendidikan;
        $Guru->TanggalLahir = $request->TanggalLahir;
        $Guru->Agama = $request->Agama;
        $Guru->Alamat = $request->Alamat;
        $Guru->NoHp = $request->NoHp;

        $Guru->save();

         return response()->json([
            'success'   => true,
            'Message' => 'Data berhasil diupdate'
        ],201);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $Guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $Guru = Guru::find($id);

        if(!$Guru){
            return response()->json([
                'success'   => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }

        $Guru->delete();

        return response()->json([
            'success'   => true,
            'Message' => 'Data berhasil dihapus'
        ],201);

    }
}
