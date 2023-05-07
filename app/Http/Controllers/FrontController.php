<?php

namespace App\Http\Controllers;

use App\Models\Information;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function fiche($id){
        $i=explode('-',$id);
        $article = Information::find($i[0]);
        return view('frontfiche',[
            'article' => $article
        ]);
    }

    public function liste(){
        $info=Information::all();
        return view('frontListe',[
            'info' => $info
        ]);
    }

    public function recherche(Request $request){
        $input=$request->input();
        $rech=$input['recherche'];
        $article=Information::where('titre', 'like', '%'.$rech.'%')
                                ->orWhere('descri', 'like', '%'.$rech.'%')
                                ->get();
        return view('frontListe',[
            'info' => $article
        ]);
    }

    public function rech($rech){
        $article=Information::where('titre', 'like', '%'.$rech.'%')
                                ->orWhere('descri', 'like', '%'.$rech.'%')
                                ->get();
        return view('frontListe',[
            'info' => $article
        ]);
    }

}