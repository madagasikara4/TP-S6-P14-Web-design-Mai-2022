@extends('layouts.front')
@section('titre')
<title>Informations sur les IA</title>
@endsection
@section('content')  

<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="w-50 mx-auto text-center justify-content-center py-5 my-5">
                   <a href={{route('front_index')}}> <h1 class="page-title mb-0">Informations sur les IA</h1></a>
                    <p class="lead text-muted mb-4">Sur ce site se trouve plusieurs <strong>Informations sur les IA</strong></p>
                    <form class="searchform searchform-lg" method="post" action={{route('front_recherche')}}>
                        @csrf
                      <input class="form-control form-control-lg bg-white rounded-pill pl-5" type="text" placeholder="Recherche" aria-label="Recherche" name="recherche">
                      <p class="help-text mt-2 text-muted"><input type="submit" value="Rechercher" class="btn mb-2 btn-success" /></p>
                    </form>
                  </div>
                
                <div class="row">
                    <?php foreach ($info as $i) { ?>
                        <div class="col-md-4">
                            
                        <div class="card shadow mb-4">
                            
                            <div class="card-body text-center">
                                
                                <div class="avatar avatar-lg mt-4">
                                    <a href={{ route('front_fiche', ['id'=>$i->idinfo.'-'.$i->slug()]) }}>
                                        <img src={{ $i->photo }} alt="..." >
                                    </a>
                                </div>
                                <div class="card-text my-2">
                                    <strong class="card-title my-0">{{$i->titre}} </strong>
                                    <p class="small text-muted mb-0">{{$i->descri}}</p>
                                </div>
                            </div> <!-- ./card-text -->
                            <div class="card-footer">
                                <div class="row align-items-center justify-content-between">
                                    <a  href={{ route('front_fiche', ['id'=>$i->idinfo.'-'.$i->slug()])}}><button type="button" class="btn mb-2 btn-outline-info">Details</button></a> 
                                </div>
                            </div> <!-- /.card-footer -->

                        </div>

                    </div> <!-- .col -->
                    <?php } ?>
                </div> <!-- .row -->
                
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->

@endsection 