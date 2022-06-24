<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        return view('api.index');
    }

    public function __invoke()
    {
        return Http::get('https://jsonplaceholder.typicode.com/posts')->json();
    }
}
