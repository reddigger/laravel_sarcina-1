<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function showCountriesList()
    {
    	echo 'Lista cu tari';
    }

    public function showAddForm()
    {
    	echo 'Forma tara';
    }

    public function addCoutry()
    {
    	echo 'adaugarea datelor prin post2';
    }
}
