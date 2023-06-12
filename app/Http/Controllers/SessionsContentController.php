<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SessionsContentController extends Controller
{
    public function index()
    {
        return json_decode(file_get_contents(storage_path() . "/data/sessions.json"), true);
    }
}