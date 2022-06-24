<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterValidate;
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

    public function confirm_register(RegisterValidate $request)
    {
        // $user = new Contato();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->age = $request->age;
        // $user->country = $request->country;
        // $user->save();

        Contato::create($request->all());

        return redirect()
                ->route('list.users')
                ->with('message', 'Usuário cadastrado com sucesso!');

    }

    public function list()
    {
        // para usarmos paginação, chamamos o método paginate no lugar do get() ou all()
        $users = Contato::orderBy('id', 'asc')->paginate(2); // definimos no parâmetro a quantidadde de elementos
        // podemos usarm o orderBy() ou o método latest() que ordena do mais recenta para o mais antigo

        return view('listar', ['users' => $users]);
    }

    public function edit($id)
    {
        $userId = Contato::find($id);

        if(!$userId) {
            return redirect()->route('list.users');
        }

        return view('edit', ['userId' => $userId]);
    }

    public function form_edit(RegisterValidate $request, $id)
    {
        // $userId = Contato::findOrFail($id);
        // $userId->name = $request->name;
        // $userId->email = $request->email;
        // $userId->age = $request->age;
        // $userId->country = $request->country;
        // $userId->save();

        $userId = Contato::find($id);
        $userId->update($request->all());

        return redirect()
                ->route('list.users')
                ->with('message', 'Usuário ' . $userId->name . ' atualizado com sucesso!');
    }

    public function delete($id)
    {
        $user = Contato::findOrFail($id);
        if(!$user) {
            return redirect()->back();
        }

        $user->delete();
        return redirect()
                ->back()
                ->with('message', 'Usuário ' . $user->name . ' deletado(a) com sucesso!');
    }

    public function search(Request $request)
    {
        $filter = $request->except('_token');
        // $searchUser = Contato::where('name', $request->search);
        //ou
        $users = Contato::where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('country', 'LIKE', "%{$request->search}%")
                ->paginate();
                // essa segunda forma busca por correspondência no início ou final da palavra
        return view('listar', [
            'users' => $users,
            'filter' => $filter
        ]);
    }
}
