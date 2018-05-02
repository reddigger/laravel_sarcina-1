<?php

namespace App\Http\Controllers;
use App\Country;

use Illuminate\Http\Request;



class CountryController extends Controller
{
    public function showCountriesList()
    {

    	$country = Country::all();

    	return view('country/countries_list', ['countries' => $country]);
    }

    public function showAddForm()
    {
    	return view('country/add_form');
    }

    public function addCountry(Request $request)
    {

    	$country = Country::insert(
		    [
		    	'name' => $request->input('name'),
		    	'population' => $request->input('population'),
		    	'code' => $request->input('code'),
		    	'capital' => $request->input('capital')]
		);

    	return redirect('countries');
    }
}