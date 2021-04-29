<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengalaman_kerja;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengalaman_kerja = pengalaman_kerja::all();
        return view('v_home',compact('pengalaman_kerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $arr =[
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'tahun_masuk'=>$request->tahun_masuk,
            'tahun_keluar'=>$request->tahun_keluar
        ];

        DB::table('pengalaman_kerja')->insert($arr);
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('pengalaman_kerja.index')
                        ->with('success','Post created successfully.');
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
        $pk = Pengalaman_kerja::find($id);
        return view('v_update', compact('pk'));
    }
    public function update(Request $request, $id)
    {
        Pengalaman_kerja::find($id)->update($request->all());
        return redirect()->route('pengalaman_kerja.index')->with('success', 'User Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengalaman_kerja::find($id)->delete();
        return redirect()->route('pengalaman_kerja.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
