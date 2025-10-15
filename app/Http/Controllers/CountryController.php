<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('admin.pages.book-appointment.country.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.pages.book-appointment.country.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:countries,name']);
        Country::create($request->all());
        return redirect()->route('admin.countries.index')->with('success', 'Country added successfully.');
    }

    public function edit(Country $country)
    {
        return view('admin.pages.book-appointment.country.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $request->validate(['name' => 'required|unique:countries,name,' . $country->id]);
        $country->update($request->all());
        return redirect()->route('admin.countries.index')->with('success', 'Country updated successfully.');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('admin.countries.index')->with('success', 'Country deleted successfully.');
    }
}
