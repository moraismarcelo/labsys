<?php

namespace LabSys\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $clients = DB::select("SELECT * FROM clients");

        return view('client.index')->with('clients', $clients);
    }
}
