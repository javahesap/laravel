<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;


class PersonelController extends Controller
{
    public function index()
    {
        $personels = Personel::all();
        return view('personels.index', compact('personels'));
    }

    public function create()
    {
        return view('personels.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ad' => 'required',
            'soyad' => 'required',
            'email' => 'required|unique:personels,email',
            'telefon' => 'nullable',
        ]);

        Personel::create($validatedData);

        return redirect('/personels')->with('success', 'Personel başarıyla eklendi.');
    }

    public function edit($id)
    {
        $personel = Personel::findOrFail($id);
        return view('personels.edit', compact('personel'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ad' => 'required',
            'soyad' => 'required',
            'email' => 'required|unique:personels,email,' . $id,
            'telefon' => 'nullable',
        ]);

        Personel::whereId($id)->update($validatedData);

        return redirect('/personels')->with('success', 'Personel başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $personel = Personel::findOrFail($id);
        $personel->delete();

        return redirect('/personels')->with('success', 'Personel başarıyla silindi.');
    }
}
