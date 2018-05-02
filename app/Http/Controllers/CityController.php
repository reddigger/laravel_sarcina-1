<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\City;
use App\Country;


class CityController extends Controller
{
    public function showCitiesList()
    {
    	$cities = DB::table('cities')
            ->join('countries', 'cities.id_country', '=', 'countries.id')
            ->select('cities.*', 'countries.name as country_name')
            ->get();

        return view('city/cities_list', ['cities' => $cities]);
    }

    public function showAddForm()
    {

        $countries = Country::all();

    	return view('city/add_form', ['countries' => $countries]);
    }

    public function addCity(Request $request)
    {   
    	$newCity = City::insert(
		    [
		    	'name' => $request->input('name'),
		    	'id_country' => $request->input('country'),
		    	'population' => $request->input('population')]
		);

    	return redirect('cities');
    }
}