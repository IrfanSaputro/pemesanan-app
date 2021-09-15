<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
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
        $kendaraan = Kendaraan::all();
        $title = "Kendaraan";
        return view('kendaraan', [
            "title" => $title,
            "kendaraan" => $kendaraan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kendaraan = Kendaraan::all();
        $title = "Kendaraan";
        return view('tambah_kendaraan', [
            "title" => $title,
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
            'nama_kendaraan' => 'required',
            'warna' => 'required',
            'plat' => 'required',
            'konsumsi_bbm' => 'required|numeric',
            'jadwal_service' => 'required'

        ]);

        $kendaraan = new Kendaraan;
        $kendaraan->nama_kendaraan = $request->nama_kendaraan;
        $kendaraan->warna = $request->warna;
        $kendaraan->plat = $request->plat;
        $kendaraan->konsumsi_bbm = $request->konsumsi_bbm;
        $kendaraan->jadwal_service = $request->jadwal_service;
        $kendaraan->save();

        return redirect('/kendaraan');
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
    public function edit($id)
    {
        $title = "Kendaraan";
        // $user = Kendaraan::all();
        $kendaraan = Kendaraan::findOrFail($id);
        return view('edit_kendaraan', [
            "title" => $title,
            "kendaraan" => $kendaraan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kendaraan' => 'required',
            'warna' => 'required',
            'plat' => 'required',
            'konsumsi_bbm' => 'required|numeric',
            'jadwal_service' => 'required'
        ]);
        
        Kendaraan::find($id)->update($request->all());

        return redirect('/kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kendaraan::find($id)->delete();

        return redirect('/kendaraan');
    }
}