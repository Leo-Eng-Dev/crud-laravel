<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function confirm_register(Request $request)
    {
        $user = new Contato();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->country = $request->country;
        $user->save();

        return view('index');
    }

    public function list(Request $request)
    {
        $users = Contato::all();
        // dd($users);
        return view('listar', ['users' => $users]);
    }

    public function edit(Request $request, $id)
    {
        $userId = Contato::findOrFail($id);

        return view('edit', ['userId' => $userId]);
    }

    public function form_edit(Request $request, $id)
    {
        $userId = Contato::findOrFail($id);
        $userId->name = $request->name;
        $userId->email = $request->email;
        $userId->age = $request->age;
        $userId->country = $request->country;
        $userId->save();

        return redirect()->route('list.users');
    }

    public function delete($id)
    {
        $user = Contato::findOrFail($id);
        $user->delete();

        return redirect()->back();
    }
}
