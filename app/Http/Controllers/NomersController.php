<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nomers;
use App\Http\Requests;
use \Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class NomersController extends Controller
{
    //

    public function show($id)
    {
        $nomerRes = Nomers::where('id','=', $id)->firstOrFail();
        return view('nomer.nomer', ['nomer' => $nomerRes]);
    }
}
