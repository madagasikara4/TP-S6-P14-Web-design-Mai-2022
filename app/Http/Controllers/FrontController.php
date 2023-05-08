<?php

namespace App\Http\Controllers;

use App\Models\Information;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FrontController extends Controller
{
    public function fiche($id){
        $i=explode('-',$id);
        $index=$i[0];
        $list=Cache::remember('fiches'.$index,300,function () use($index){
            return Information::find($index);
        });
        $response = response()->view('frontfiche',['article' => $list]);
        $response->header('Cache-Control','max-age=3600 , public ');
        return $response;
    }

    public function liste(){
        $list=Cache::remember('listes',300,function (){
            return Information::all();
        });
        $response = response()->view('frontListe',['info' => $list]);
        $response->header('Cache-Control','max-age=3600 , public ');
        return $response;
    }

    public function recherche(Request $request){
        $input=$request->input();
        $rech=$input['recherche'];
        $mot=strtolower($rech);
        $article=Information::whereRaw('lower(titre) like ?', ['%'.$mot.'%'])
                                ->orWhereRaw('lower(descri) like ?', ['%'.$mot.'%'])
                                ->get();
        return view('frontListe',[
            'info' => $article
        ]);
    }

    public function rech($rech){
        $mot=strtolower($rech);
        $article=Information::whereRaw('lower(titre) like ?', ['%'.$mot.'%'])
                                ->orWhereRaw('lower(descri) like ?', ['%'.$mot.'%'])
                                ->get();
        return view('frontListe',[
            'info' => $article
        ]);
    }

}