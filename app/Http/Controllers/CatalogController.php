<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    
    public function index(){

        return view('catalog.category');
    }

    public function product(){

        return view('catalog.product');
    }
}