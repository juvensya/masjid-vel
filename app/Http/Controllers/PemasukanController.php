<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pemasukan::orderBy('created_at', 'DESC')->get();

        return view('pemasukan.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemasukan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!$request->nominal || !$request->file('bukti_bayar')){
            Alert::error('Gagal', 'mohon masukan data dengan benar humm subul');
            return redirect()->back();
        }
        if($request->file('bukti_bayar')){

            $file = $request->file('bukti_bayar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/images/bukti_bayar/'), $filename);

            Pemasukan::create([
                'nama' => $request->nama,
                'instansi'=> $request->instansi,
                'nominal'=>$request->nominal,
                'bukti_bayar'=>$filename
            ]);
        }

        
        Alert::success('Berhasil', 'Thank youu <3'.$request->nama.'astas infaq yang telah diberikan');
        return redirect()->route('landing');
    }

    /**
     * Display the specified resource.
     */
    public function show(pemasukan $pemasukan)
    {
        //
    }

    public function validasi(string $id){
        $pemasukan = Pemasukan::find($id);
        $pemasukan->is_valid = true;
        $pemasukan->save();

        Alert::success('Berhasil', 'Data valid YIPPIEE.');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pemasukan $pemasukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pemasukan $pemasukan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemasukan $pemasukan)
    {
        $pemasukan->delete();

        Alert::success('Berhasil','Data berhasil dihapus huhuu');
        return rediect()->back();
    }
}
