<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\redirect;
use Illuminate\Http\Request;
use App\Models\loguintb;

class LogintbController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showFormLogin(){
        return view('cadastrar');
    }

    public function storeLogin(Request $request){
        $login= $request->validate([
            'xxx'=>'string|required',
            'xxx'=>'string|required',
            'xxx'=>'string|required'
        ]);

        cadastro::create($login);
        return redirect::route('index');
    }


    public function showGerenciador(Request $request){
       $dados= login::query();
       $dados->when($request->xxx,function($query,$nome){
        $query->where('xxx', 'like' , '%'.$nome.'%');
       });

       $dadoslogin = $dadoslogin->get();

       return view('xxx', ['logintb' => $dadoslogin]);
    }


    public function destroy(login $id){
        $id->delete();
        return redirect::route('xxx');
        
    }


    public function update(login $id, Request $request){
        $login = $request->validate([
            'xxx'=>'string|required',
            'xxx'=>'string|required',
            'xxx'=>'string|required'
        ]);

        $id->fill($login);
        $id->save();
        return redirect::route('xxx');
    }


    public function show(login $id){
        return view('xxx', ['logintb'=> $id]);
    }
}
