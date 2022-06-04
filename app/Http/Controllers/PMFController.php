<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PMFController extends Controller
{
    public function storeValue(Request $request)
    {
       dd($request);
        session([ 'value' => $request->value  ]);
    }
}
