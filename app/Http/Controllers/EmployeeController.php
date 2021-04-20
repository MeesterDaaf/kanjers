<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::all(),
            'header' => 'Alle werknemers'
        ];

        return view('users.index', $data);
    }
}
