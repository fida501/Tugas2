<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;  

class SiswaController extends Controller
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
        //test
                return view('register');

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
            'nama' => 'required',
            'telpon' => 'required|numeric|digits:12',
            'alamat' => 'required',

        ]);
        // dd($request->all());
         Siswa::create($request->all());
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        //
        $allsiswa = Siswa::all();
        return view('table', compact('allsiswa'));
        
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit
        $siswa = Siswa::find($id);  
        return view('editSiswa', compact('siswa'));
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
        // Siswa::updateOrcreate(['id' => $id], $request->all());
        Siswa::updateOrCreate(['id' => $id], $request->all());
        return redirect(route('showSiswa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect(route('showSiswa'));
    }
}
