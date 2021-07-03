<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allPenginapan = Penginapan::get();

        // filtering jenis penginapan
        if(isset($_GET['jenis'])){
            $allPenginapanOri = $allPenginapan;
            $allPenginapan = [];
            foreach ($allPenginapanOri as $penginapan) {
                if(strtolower($penginapan->jenis_penginapan) == strtolower($_GET['jenis'])){
                    $allPenginapan[] = $penginapan;
                }
            }
        }

        // filtering covid
        if(isset($_GET['undercovid'])){
            $allPenginapanOri = $allPenginapan;
            $allPenginapan = [];
            foreach ($allPenginapanOri as $penginapan) {
                if($penginapan->lokasi->kasus_covid->last()->jumlahKasus <= $_GET['undercovid']){
                    $allPenginapan[] = $penginapan;
                }
            }
        }

        //data
        $data = [];
        foreach ($allPenginapan as $penginapan) {
            $jumlahKasusTerakhir = $penginapan->lokasi->kasus_covid->last();
            $jumlahKasusKemarin = $penginapan->lokasi->kasus_covid
                                        ->where('last_update','<',$jumlahKasusTerakhir->last_update)
                                        ->last()->jumlahKasus;
            if(!isset($jumlahKasusKemarin)) $jumlahKasusKemarin = 0;

            $data[] = [
                'nama' => $penginapan->nama_penginapan,
                'jenis' => $penginapan->jenis_penginapan,
                'lokasi' => $penginapan->lokasi->lokasi,
                'jumlah_kasus' => $jumlahKasusTerakhir->jumlahKasus,
                'jumlah_kasus_sebelumnya' => $jumlahKasusKemarin,
                'last_update' => $jumlahKasusTerakhir->last_update,
                'deskripsi' => $penginapan->deskripsi_penginapan
            ];
        }

        $messages = "Success";
        $responseData = [
            'messages' => $messages,
            'jumlah_data' => count($data),
            'data' => $data
        ];

        return response()->json($responseData,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function show(Penginapan $penginapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penginapan $penginapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penginapan $penginapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penginapan  $penginapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penginapan $penginapan)
    {
        //
    }
}
