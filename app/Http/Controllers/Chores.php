<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chore;

class Chores extends Controller
{
    public function getAllChores()
    {
        $chores = Chore::all();

        return view("index")->with("db", [
            "chores" => $chores,
        ]);
    }
}
