<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','revalidate']);
    }

    public function index()
    {
        return view('home');
    }
    
}
