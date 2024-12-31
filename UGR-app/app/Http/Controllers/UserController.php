<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\View;
use Workbench\App\Models\User as AppModelsUser;

class UserController extends Controller
{
    public function indexUser()
    {
        $usuarios=DB::table('users')->get();// select * from evento_adverso
        return view('indexUser.index',['users'=>$usuarios]);
    }
    public function inndex()
    {
        //return AppModelUser::all();
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $usuario=User::create($request->all());
        return response()->json($usuario,201);
    }
}
