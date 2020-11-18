<?php

namespace App\Http\Controllers;

use App\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absen::all();
        if ($absen) {
            return response()->json([
                'success'   => true,
                'message'   => 'Absen Siswa',
                'data'      => $absen
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
            ], 404);
        }
        // return response()->json($absen);
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
            'TglAbsen' => 'date|required',
            'nis' => 'required|integer',
            'KetAbsen' => 'string|required',
        ]);
        $absen = new Absen;

        $absen->TglAbsen = $request->TglAbsen;
        $absen->nis = $request->nis;
        $absen->KetAbsen = $request->KetAbsen;

        $absen->save();

        if ($absen) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil disimpan!',
                'data' => $absen
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal disimpan!',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = Absen::find($id);
        
        if ($absen) {
            return response()->json([
                'success'   => true,
                'message'   => 'Absen Siswa',
                'data'      => $absen
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'TglAbsen' => 'date',
            'nis' => 'integer',
            'KetAbsen' => 'string',
        ]);

        $absen = Absen::find($id);
        if(!$absen){
            if(!$absen){
                return response()->json([
                    'success' => false,
                    'Message' => 'Data tidak ditemukan'
                ],404);
            }
        }

        $absen->TglAbsen = $request->TglAbsen;
        $absen->nis = $request->nis;
        $absen->KetAbsen = $request->KetAbsen;

        $absen->save();
        return response()->json([
            'Status' => 'Success',
            'Message' => 'Data berhasil diupdate'
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $absen = Absen::find($id);
        if(!$absen){
            return response()->json([
                'success' => false,
                'Message' => 'Data tidak ditemukan'
            ],404);
        }

        $absen->delete();

        if ($absen) {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Dihapus!',
            ], 200);
        }

    }
}
