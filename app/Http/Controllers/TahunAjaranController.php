<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TahunAjaran;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TahunAjaran::select('id', 'tahunAjaran', 'aktif')->get();
        return view('admin/tahunajaran/view')->with('tahunajaran', $data);
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
        $this->validate($request, [
                'tahunAjarans' => 'required|unique:tbltahunajaran,tahunAjaran'
            ]);
        $tahunAjaran = $request->tahunAjarans;
        TahunAjaran::insert(['tahunAjaran' => $tahunAjaran]);
        return back();
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
    public function edit(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
                'tahunAjaran' => 'required|unique:tbltahunajaran,tahunAjaran'
            ]);
        $data = TahunAjaran::find($input['id']);
        $data->tahunAjaran = $input['tahunAjaran'];
        $data->save();
        return redirect(route('getTahunAjaran'));
    }

    public function editView($id)
    {
        $data = TahunAjaran::findOrFail($id);
        return view('admin/tahunajaran/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editStatus(Request $request, $id)
    {
        $data = TahunAjaran::find($id);
        $data->aktif = $request['status'];
        $data->save();
        return back();
    }

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
        TahunAjaran::where('id', $id)->delete();
        return back();
    }
}
