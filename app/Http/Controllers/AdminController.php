<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;
use App\Mahasiswa;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Mata Kuliah
    public function indexMK()
    {
       $mk=Matakuliah::all();
       return view('admin/adminmatakuliah',compact('mk'));
    }
    public function tambahMK(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect('/adminmatakuliah');
    }
    public function editMK($id_mk)
    {
        $mkk = Matakuliah::find($id_mk);
        return view('admin/editmk',compact('mkk'));
    }
    public function updateMK(Request $request,$id_mk)
    {
        $mkk = Matakuliah::find($id_mk);
        $mkk->update($request->all());
        return redirect('/adminmatakuliah');
    }
    public function destroyMK($id_mk)
    {
        $mkk = Matakuliah::find($id_mk);
        $mkk->delete($mkk); 
        return redirect('/adminmatakuliah')->with('sukses','Data berhasil dihapus');
    }



    //Mahasiswa
    public function indexMHS()
    {
       $mhs=Mahasiswa::all();
       return view('admin/adminmahasiswa',compact('mhs'));
    }

    public function createMHS()
    {
        return view('admin/createmhs');
    }
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMHS(Request $request)
    {
        $amhs= new Mahasiswa;
        $amhs->nama_mhs = $request->nama_mhs;
        $amhs->nim_mhs = $request->nim_mhs;
        $amhs->prodi_mhs = $request->prodi_mhs;
        $amhs->fakultas_mhs = $request->fakultas_mhs;
        $amhs->dosen_walimhs = $request->dosen_walimhs;
        $amhs->pass = $request->pass;
        $amhs->save();
        return redirect('/adminmahasiswa');
 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function storeMK(Request $request)
    {
        
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
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function AdminPanel()
    {
        return view('admin/adminpanel');
    }
    public function AdminKrs()
    {
        return view('admin/adminkrs');
    }
    public function AdminKhs()
    {
        return view('admin/adminkhs');
    }
    public function AdminMahasiswa()
    {
        return view('admin/adminmahasiswa');
    }
    public function AdminMatakuliah()
    {
        return view('admin/adminmatakuliah');
    }

}
