@extends('layouts.tete')
@section('titre')
<title>Ajout IA information</title>
@endsection
@section('content')  

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Ajouter une information IA</strong>
              
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form method="POST" action={{route('modif')}} >
                    @csrf
                    <input type="hidden" name="id" value={{ $article->idinfo}}>

                  <div class="form-group mb-3">
                    <label for="simpleinput">Titre: <strong>{{ $article->titre}}</strong></label>
                    <input type="text" id="simpleinput" class="form-control" name="titre" value={{ $article->titre}}>
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-email">Description: <strong>{{ $article->descri}}</strong></label>
                    <input type="text" id="simpleinput" class="form-control" name="descri" value={{ $article->descri}}>
                  </div>

                  <div class="form-group mb-3">
                    <label for="customFile">Photo</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="selectImage" >
                      <label class="custom-file-label" for="customFile">Choisie une photo</label>
                      <input type="hidden" id="imageCode" value={{ $article->photo}} name="photo"/>
                    </div>
                  </div>
                  
                  <div class="form-group mb-3">
                    <div class="card shadow">
                      <div class="card-body">
                        <h5 class="card-title">Contenue</h5>
                        <!-- Create the editor container -->
                        <textarea id="editor" name="contenue" value={{ $article->contenue}}> </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <input type="submit" value="Modifier" class="btn mb-2 btn-success" />
                  </div>
                  </form>
                </div> <!-- /.col -->
                
              </div>
            </div>
          </div> <!-- / .card -->
          
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    
  </main>
  
  @endsection
  @section('script')
  <script src={{ url('js/ckeditor.js') }}> </script>
  <script > 
    ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error => {
        console.error(error);
      });
  </script>

<script>
  const imageCode= document.getElementById("imageCode");

  const tobase64=(file) => {
      return new Promise((resolve, reject) => {
          const fileReader=new FileReader();
          fileReader.readAsDataURL(file);

          fileReader.onload=()=>{
              resolve(fileReader.result);
          };

          fileReader.onerror=(error)=>{
              reject(error);
          };
      });
  };

  const uploadImage=async (event) => {
      const file =event.target.files[0];
      const base64=await tobase64(file);
      imageCode.value=base64;
  }

  //appel de fonction en change
  document.getElementById("selectImage").addEventListener("change",(e) =>{
      uploadImage(e);
  });


</script>

  @endsection
