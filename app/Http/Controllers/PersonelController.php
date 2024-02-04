<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;

class PersonelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personels =null;
        $personels = Personel::sqlfoction();
       /// $personels = Personel::all();
        return view('personels.index', compact('personels'));
    }

    public function index2()
    {
        $personels = Personel::all();
        return response()->json(['personels' => $personels]);
    }

    
    public function index3()
    {
        $personels = Personel::all();
        return view('personels.indejson', compact('personels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ad' => 'required',
            'soyad' => 'required',
            'email' => 'required|email|unique:personels',
        ]);

        Personel::create($request->all());

        return redirect()->route('personels.index')
            ->with('success', 'Personel başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personel = Personel::find($id);
        print_r( $personel );
        return view('personels.show', compact('personel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personel = Personel::find($id);
        return view('personels.edit', compact('personel'));
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
        $request->validate([
            'ad' => 'required',
            'soyad' => 'required',
            'email' => 'required|email|unique:personels,email,'.$id,
        ]);

        $personel = Personel::find($id);
        $personel->update($request->all());

        return redirect()->route('personels.index')
            ->with('success', 'Personel başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personel = Personel::find($id);
        $personel->delete();

        return redirect()->route('personels.show')
            ->with('success', 'Personel başarıyla silindi.');
    }

    public function showForm()
    {
        return view('personels.showForm');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);

        return back()->with('success', 'Dosya başarıyla yüklendi.');
    }

}
