<?php

namespace App\Http\Controllers;

use Directory;
use Illuminate\Http\Request;
use app\karyawan;
class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('karyawan.Data-karyawan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        karyawan::create([
            'nama'=>request->nama,
            'alamat'=>request->alamat,
            'tgllhr'=>request->tgllhr,
        ])

        return redirect('data-karyawan')
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
