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
        if (isset($_GET['jenis'])) {
            $allPenginapanOri = $allPenginapan;
            $allPenginapan = [];
            foreach ($allPenginapanOri as $penginapan) {
                if (strtolower($penginapan->jenis_penginapan) == strtolower($_GET['jenis'])) {
                    $allPenginapan[] = $penginapan;
                }
            }
        }

        // filtering covid
        if (isset($_GET['undercovid'])) {
            $allPenginapanOri = $allPenginapan;
            $allPenginapan = [];
            foreach ($allPenginapanOri as $penginapan) {
                if ($penginapan->lokasi->kasus_covid->last()->jumlahKasus <= $_GET['undercovid']) {
                    $allPenginapan[] = $penginapan;
                }
            }
        }


        //data
        $data = [];
        foreach ($allPenginapan as $penginapan) {
            $jumlahKasusTerakhir = $penginapan->lokasi->kasus_covid->last();
            $jumlahKasusKemarin = $penginapan->lokasi->kasus_covid
                ->where('last_update', '<', $jumlahKasusTerakhir->last_update)
                ->last()->jumlahKasus;
            if (!isset($jumlahKasusKemarin)) $jumlahKasusKemarin = 0;

            $data[] = [
                'id' => $penginapan->id_penginapan,
                'nama' => $penginapan->nama_penginapan,
                'jenis' => $penginapan->jenis_penginapan,
                'lokasi' => $penginapan->lokasi->lokasi,
                'jumlah_kasus' => $jumlahKasusTerakhir->jumlahKasus,
                'jumlah_kasus_sebelumnya' => $jumlahKasusKemarin,
                'perubahan_kasus' => $jumlahKasusTerakhir->jumlahKasus-$jumlahKasusKemarin,
                'last_update' => $jumlahKasusTerakhir->last_update,
                'deskripsi' => $penginapan->deskripsi_penginapan,
                'rating' => $penginapan->rating,
                'cover_photo' => url($penginapan->photos()->first()->photo),
            ];
        }

        // sort kasus saat ini
        if (isset($_GET['sortByCovid'])) {
            $kasus_covid = array_column($data, 'jumlah_kasus');
            array_multisort($kasus_covid, SORT_ASC, $data);
        }

        // sort penurunan kasus saat ini
        if (isset($_GET['sortByChangeCovid'])) {
            $kasus_covid = array_column($data, 'perubahan_kasus');
            array_multisort($kasus_covid, SORT_ASC, $data);
        }

        $responseData = [
            'messages' => "Success",
            'jumlah_data' => count($data),
            'data' => $data
        ];

        return response()->json($responseData, 200);
    }


    public function detail($id)
    {
        $penginapan = Penginapan::find($id);

        $jumlahKasusTerakhir = $penginapan->lokasi->kasus_covid->last();
        $jumlahKasusKemarin = $penginapan->lokasi->kasus_covid
            ->where('last_update', '<', $jumlahKasusTerakhir->last_update)
            ->last()->jumlahKasus;
        if (!isset($jumlahKasusKemarin)) $jumlahKasusKemarin = 0;

        $photos = array_column($penginapan->photos()->get()->toArray(),'photo');

        $photos = array_map(function($e){
            return url($e);
        },$photos);

        $fasilitas = array_column($penginapan->fasilitas()->get()->toArray(),'nama_fasilitas');

        $review = array_column($penginapan->review()->get()->toArray(),'review');

        $data = [
            'nama' => $penginapan->nama_penginapan,
            'jenis' => $penginapan->jenis_penginapan,
            'lokasi' => $penginapan->lokasi->lokasi,
            'jumlah_kasus' => $jumlahKasusTerakhir->jumlahKasus,
            'jumlah_kasus_sebelumnya' => $jumlahKasusKemarin,
            'last_update' => $jumlahKasusTerakhir->last_update,
            'deskripsi' => $penginapan->deskripsi_penginapan,
            'rating' => $penginapan->rating,
            'photo' => $photos,
            'fasilitas' => $fasilitas,
            'review' => $review
        ];

        $responseData = [
            'messages' => "Success",
            'data' => $data
        ];

        return response()->json($responseData, 200);
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
