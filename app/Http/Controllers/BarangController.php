<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class BarangController extends Controller
{
    public function view(Request $request): Response
    {
        return Inertia::render('DashboardPages/BarangItem');
    }
}
