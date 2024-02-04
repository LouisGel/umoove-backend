<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovementTempController extends Controller
{
    public function create()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }
}
