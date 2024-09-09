<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manage.datas.index', [
            'datas' => Data::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.datas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:data',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'nomor_hp' => 'nullable',
            'email' => 'nullable|email:dns'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Data::create($validatedData);
        return redirect('data-management')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Data $data)
    // {
    //     // dd($data->all());
    //     return view('manage.datas.show', [
    //         'data' => $data
    //     ]);
    // }
    public function show($id)
    {
        $data = Data::findOrFail($id);
        return view('manage.datas.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Data $data)
    // {
    //     return view('manage.datas.edit', [
    //         'data' => $data
    //     ]);
    // }

    public function edit($id)
{
    $data = Data::findOrFail($id);
    return view('manage.datas.edit', compact('data'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Data::findOrFail($id);
        $rules = [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'nomor_hp' => 'nullable',
            'email' => 'nullable|email:dns'
        ];

        if($request->nik != $data->nik){
            $rules['nik'] = 'required|unique:data';
        }

        $validatedData = $request->validate($rules);

        Data::where('id', $data->id)->update($validatedData);

        return redirect('data-management')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Data::destroy($data->id);
        // return redirect('data-management')->with('success', 'Data has been deleted!');
        // Mencari data berdasarkan ID
        $data = Data::findOrFail($id);

        // Menghapus data
        $data->delete();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('data-management')->with('success', 'Data has been deleted');
    }

}
