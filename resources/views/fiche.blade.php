@extends('layouts.tete')
@section('titre')
<title>{{$article->titre}}</title>
@endsection
@section('content')  

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="w-50 mx-auto text-center justify-content-center py-5 my-5">
            <h1 class="page-title mb-0">{{ $article->titre }} </h1>
            <img src={{$article->photo}} alt="..." class="img-fluid">
               
            
          </div>
          
          
          <div class="row mt-5 align-items-center">
            
            <div class="col">
              <div class="row align-items-center">
                <div class="col-md-7">
                  
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-7">
                    <?php echo($article->contenue) ?>
                </div>
                <div class="col">
                  <h4 class="mb-1">{{$article->titre}}</h4>
                  <p class="small mb-0 text-muted">{{$article->descri}}</p>
                <br/>
                <a  href={{ route('edit', ['id'=>$article->idinfo])}}><button type="button" class="btn mb-2 btn-outline-primary">Edit</button></a>
                <a  href={{ route('remove', ['id'=>$article->idinfo])}}><button type="button" class="btn mb-2 btn-outline-danger">remove</button></a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
  </main> <!-- main -->
  @endsection