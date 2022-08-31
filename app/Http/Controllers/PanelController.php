<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class PanelController extends Controller
{
//function para login
    public function index(){
        return view('auth.login');
    }

//function para dashboard
    public function dashboard(){
        return view('dashboard');
    }

//function para la pagina post
    public function post(){
        return view('content.pages.post');
    }

//function para la pagina meu-post
    public function meupost(){
        return view('content.pages.meu-post');
    }

//function para la pagina receitas
    public function receitas(){
        return view('content.pages.receitas');
    }

//function para la pagina editar cuenta de usuario
    public function editconta($id){
        
        $edit = Users::findOrFail($id);
        //return $edit;
        return view('auth.edit-conta',['edit' => $edit]);
    }

//function para la pagina cambiar contrasenha
    public function altersenha($id){
            
        $user = Users::findOrFail($id);
        
        return view('auth.alterar-senha',['edit' => $user]);
    }

//function para actualiza la el usuario
    public function updateconta(Request $request){
        $datos = $request->all();
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;
            $requestImage->move(public_path('uploads'),$imageName);
            $datos['image'] = $imageName;
        }
        Users::findOrFail($request->id)->update($datos);
        //return $datos;
        return back()->with('msg','Atualizado com sucesso');
    }

//function para la pagina lista de usuarios
    public function listuser(){
        $users = Users::all();//reacato todos los usarios registrados en la base de datos
        return view('content.user.list-user',['users'=>$users]);//pasamos esos datos a la pagina list-user
    }


}
