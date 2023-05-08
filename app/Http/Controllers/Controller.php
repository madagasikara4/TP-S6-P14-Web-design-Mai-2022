<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Information;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use PHPUnit\Event\Telemetry\System;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view('login');
    }

    public function recherche(Request $request){
        $input=$request->input();
        $rech=$input['recherche'];
        $mot=strtolower($rech);
        $article=Information::whereRaw('lower(titre) like ?', ['%'.$mot.'%'])
                                ->orWhereRaw('lower(descri) like ?', ['%'.$mot.'%'])
                                ->get();
        return view('liste',[
            'info' => $article
        ]);
    }

    public function login(Request $request){
        $input=$request->input();
        $identifiant=$input['identifiant'];
        $mdp=$input['mdp'];

        $admin=Admin::where('identifiant','=',$identifiant)->first();
        if($admin!=null ){
            if(strcmp($admin->mdp,$mdp)==0)
                return $this->liste();
            else{
                return view('login',[
                    'erreur' => 'Mot de passe incorrecte'
                ]);
            }
        }
        else{
            return view('login',[
                'erreur' => 'Identifiant invalide'
            ]);
        }
    }

    public function fiche($id){
        $article = Information::find($id);
        return view('fiche',[
            'article' => $article
        ]);
    }

    public function remove($id){
        $article = Information::find($id);
        $article->delete();
        return $this->liste();
        
    }

    public function edit($id){
        $article = Information::find($id);
        return view('modif',[
            'article' => $article
        ]);
        
    }

    public function modif(Request $request){
        $input=$request->input();
        $titre=$input['titre'];
        $id=$input['id'];
        $descri=$input['descri'];
        $contenue=$input['contenue'];
        $photo=$input['photo'];


        $info=Information::find($id);

        $info->titre=$titre;
        $info->descri=$descri;
        $info->photo=$photo;
        if(strcmp($contenue,'')!=0){
            $info->contenue=$contenue;
        }

        $info->save();

        return $this->liste();
    }

    public function liste(){
        $info=Information::all();
        return view('liste',[
            'info' => $info
        ]);
    }


    public function ajout(){
        return view('ajout');
    }

    public function create(Request $request){
        $input=$request->input();
        $titre=$input['titre'];
        $descri=$input['descri'];
        $contenue=$input['contenue'];
        $photo=$input['photo'];

        Information::create([
            'titre' => $titre,
            'descri' => $descri,
            'photo' => $photo,
            'contenue' => $contenue,
        ]);
        return $this->liste();
    }
}
