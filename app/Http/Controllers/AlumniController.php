<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Http\Requests\AlumniStoreRequest;
use App\Http\Requests\AlumniUpdateRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumniStoreRequest $request)
    {
        $validatedData = $request->validated();

        // Hash the password and retype_password before saving
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['retype_password'] = Hash::make($validatedData['retype_password']);

        Alumni::create($validatedData);

        return redirect()->route('alumni.index')->with('success', 'Alumni registered successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumni = Alumni::findOrFail($id); 
        return view('alumni.show', compact('alumni')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alumni = Alumni::findOrFail($id); 
        // dd($alumni);
        return view('alumni.edit', compact('alumni')); 
    }

    /**
     * Show the form for updating the specified resource.
     */
    public function update(AlumniUpdateRequest $request, string $id)
    { 
        $validatedData = $request->validated();

        $alumni = Alumni::findOrFail($id);

        $alumni->username = $validatedData['username'];
        $alumni->name = $validatedData['name'];
        $alumni->id_number = $validatedData['id_number'];
        $alumni->gender = $validatedData['gender'];
        $alumni->email = $validatedData['email'];
        $alumni->nationality = $validatedData['nationality'];
        $alumni->qualification = $validatedData['qualification'];
        $alumni->course = $validatedData['course'];
        $alumni->graduation_year = $validatedData['graduation_year'];
        $alumni->address1 = $validatedData['address1'];
        $alumni->address2 = $validatedData['address2'];
        $alumni->city = $validatedData['city'];
        $alumni->postcode = $validatedData['postcode'];
        $alumni->country = $validatedData['country'];
        $alumni->region = $validatedData['region'];
        $alumni->position = $validatedData['position'];
        $alumni->company_name = $validatedData['company_name'];
        $alumni->company_address1 = $validatedData['company_address1'];
        $alumni->company_address2 = $validatedData['company_address2'];
        $alumni->company_city = $validatedData['company_city'];
        $alumni->company_postcode = $validatedData['company_postcode'];
        $alumni->company_country = $validatedData['company_country'];
        $alumni->company_region = $validatedData['company_region'];

        $alumni->save();

        return redirect()->route('alumni.edit', $id)->with('success', 'Alumni updated successfully.');
    }

   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
