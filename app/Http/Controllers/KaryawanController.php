<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        $karyawan = Karyawan::orderBy('nama', 'asc')->get();
        return view('welcome', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Karyawan::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,

        ]);

        return redirect('/');
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
        $karyawan = Karyawan::findOrFail($id);

        return view('update', compact('karyawan'));
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
        $karyawan = Karyawan::findOrFail($id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon
        ]);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::destroy($id);
        return redirect()->route('home');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $karyawan = Karyawan::where('nama', 'like', "%" . $keyword . "%")->get();
        return view('welcome', compact('karyawan'));
    }
}
