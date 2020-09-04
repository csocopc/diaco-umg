<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queja;

class QuejasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $quejas = Queja::all()->sortByDesc('created_at');
        return view('admin.quejas.index', compact('quejas'));
    }


    public function detalles($id)
    {
        $queja = Queja::find($id);

        return view('admin.quejas.detalles', compact('queja'));
    }
}