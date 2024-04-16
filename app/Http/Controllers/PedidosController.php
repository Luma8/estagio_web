<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\PedidosModel;

class PedidosController extends Controller
{
    public function index()
    {
       return Inertia::render("Listagem/list");
    }

    public function create() {
        return Inertia::render("Listagem/create");
    }

    public function update() {
        return Inertia::render("Listagem/edit");
    }

}
