<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = Form::all();
        return view('daftar', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormRequest $request)
    {
        // Validasi input
    $validatedData = $request->validate([
        'nama' => 'required|string',
        'email' => 'required|email',
        'instansi' => 'required|string',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Contoh validasi untuk gambar
    ]);

    // Upload gambar jika ada
    if ($request->hasFile('gambar')) {
        $imagePath = $request->file('gambar')->store('uploads', 'public');
        $validatedData['gambar'] = $imagePath;
    }

    Form::create($validatedData);

    return redirect()->route('daftar.index')
        ->with('success', 'Selamat Pendaftaran berhasil.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormRequest $request, Form $form)
    {
        $this->authorize('update', $form);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}