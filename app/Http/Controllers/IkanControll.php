<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ikan;

class IkanControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Ikan = ikan::latest()->paginate(10);

        return view('ikans.index',compact('Ikan'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ikans.create');
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
        $request ->validate([
            'jenis_ikan' => 'required',
            'harga' => 'required',
            'penjual' => 'required',
            'gambar_ikan' => 'required'
        ]);

        ikan::create($request->all());
        
        return redirect()->route('ikans.index')
                        ->with('success','Ikan created successfully. ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ikan $Ikan)
    {
        //
        return view('ikans.show',compact('Ikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ikan $Ikan)
    {
        //
        return view('ikans.edit', compact('Ikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ikan $Ikan)
    {
        //
        $request ->validate([
            'jenis_ikan' => 'required',
            'harga' => 'required',
            'penjual' => 'required',
            'gambar_ikan' => 'required',
        ]);

        $Ikan->update($request->all());
        
        return redirect()->route('ikans.index')
                        ->with('success','Ikan updated successfully. ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ikan $Ikan)
    {
        //
        $Ikan->delete();

        return redirect()->route('ikans.index')
                        ->with('success','Ikan deleted succesfully');
    }
}
