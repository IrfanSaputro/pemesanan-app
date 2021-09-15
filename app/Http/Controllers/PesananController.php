<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Kendaraan;
use App\Models\Driver;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::all();
        $title = "Pesanan";
        return view('pesanan', [
            "title" => $title,
            "pesanan" => $pesanan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver = Driver::all();
        $kendaraan = Kendaraan::all();
        $title = "Pesanan";
        return view('tambah_pesanan', [
            "title" => $title,
            "driver" => $driver,
            "kendaraan" => $kendaraan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_pesan' => 'required',
            'tanggal_kembali' => 'required',
            'nama_pemesan' => 'required',
            'id_driver' => 'required',
            'id_kendaraan' => 'required'

        ]);

        $pesanan = new Pesanan;
        $pesanan->tanggal_pesan = $request->tanggal_pesan;
        $pesanan->tanggal_kembali = $request->tanggal_kembali;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->id_driver = $request->id_driver;
        $pesanan->id_kendaraan = $request->id_kendaraan;
        $pesanan->save();

        return redirect('/pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPengawas($id)
    {
        $title = "Pesanan";
        // $user = Kendaraan::all();
        $pesanan = Pesanan::findOrFail($id);
        return view('edit_pengawas', [
            "title" => $title,
            "pesanan" => $pesanan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePengawas(Request $request, $id)
    {
        Pesanan::find($id)->update(
            ['pengawas_kendaraan' => 'disetujui']
        );

        return redirect('/pesanan');
    }

    public function editAdmin($id)
    {
        $title = "Pesanan";
        // $user = Kendaraan::all();
        $pesanan = Pesanan::findOrFail($id);
        return view('edit_admin', [
            "title" => $title,
            "pesanan" => $pesanan,
        ]);
    }

    public function updateAdmin(Request $request, $id)
    {
        Pesanan::find($id)->update(
            ['admin_kendaraan' => 'disetujui']
        );

        return redirect('/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}