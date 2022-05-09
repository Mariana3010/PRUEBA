<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitController extends Controller
{
    //
    public function index()
    {
        $citas = Cita::paginate();

        return view('welcome', compact('citas'));
    }
}
