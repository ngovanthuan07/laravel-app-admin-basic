<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request, $model) {


        return view('admin.listing', ['model' => $model]);
    }
}
