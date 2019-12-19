<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiakadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
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
        //
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


    public function Home(){
		return view('user/home');
	}
 
	public function Galeri(){
		return view('user.galeri');
	}
 
	public function Tentang(){
        return view('user/tentang');
    }
    
    public function Informasi(){
		return view('user/informasi');
    }

	public function Siakad(){
		return view('user/siakad/index');
	}
	public function Krs(){
		return view('user/siakad/krs');
	}
	public function Khs(){
		return view('user/siakad/khs');
	}
	public function Absensi(){
		return view('user/siakad/absensi');
	}
	public function Struktural(){
		return view('user/struktural');
	}
	public function Administrasi(){
		return view('user/administrasi');
    }
	
    
}
