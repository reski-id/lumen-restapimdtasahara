<?php

namespace App\Http\Controllers;

use App\Kas;
use Illuminate\Http\Request;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kas = Kas::all();
        
        if ($kas) {
            return response()->json([
                'success'   => true,
                'message'   => 'Absen Siswa',
                'data'      => $kas
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
            'keterangan' => 'required',
            'tgl' => 'required',
            'jumlah' => 'required|integer',
            'jenis' => 'required'
        ]);


        $kas = new Kas;

        $kas->keterangan = $request->keterangan;
        $kas->tgl = $request->tgl;
        $kas->jumlah = $request->jumlah;
        $kas->jenis = $request->jenis;

        $kas->save();

        return response()->json([
            'success' => true,
            'Message' => 'Data berhasil diupdate',
            'data'    => $kas,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kas = Kas::find($id);

        if ($kas) {
            return response()->json([
                'success' => true,
                'message'   => 'Kas Siswa',
                'data'      => $kas
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
     * @param  \App\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kas = Kas::find($id);

        if(!$kas){
            return response()->json([
                'success' => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }
        $kas->keterangan = $request->keterangan;
        $kas->tgl = $request->tgl;
        $kas->jumlah = $request->jumlah;
        $kas->jenis = $request->jenis;

        $kas->save();

        return response()->json([
            'success' => true,
            'Message' => 'Data berhasil diupdate',
            'data'    => $kas,
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kas = Kas::find($id);
        if(!$kas){
            return response()->json([
                'success' => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }

        $kas->delete();

        return response()->json([
            'success' => true,
            'Message' => 'Data berhasil dihapus'
        ],201);
}
}
