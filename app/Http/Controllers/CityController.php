<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function showCitiesList()
    {
    	echo 'Lista cu orase';
    }

    public function showAddForm()
    {
    	echo 'Forma oraselor';
    }

    public function addCity()
    {
    	echo 'adaugarea datelor prin post';
    }
}