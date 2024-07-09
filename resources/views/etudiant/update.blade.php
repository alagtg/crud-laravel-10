<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container ">
        <div class="row">
          <div class="col">
            <h1>modefier un etudiant</h1>
            <hr>
@if (session('status'))
<div class="alert alert-succes">
  {{session ('status')}}
</div>
 <ul>   
@endif
@foreach ($errors->all() as $error)
<li class="alert alert-danger">{{$error}}</li>
 </ul>   
@endforeach
            <form action="/update/traitement" method="POST" class ="form-groupe">
@csrf
<input type="text" name="id" style="display: none;" value="{{$etudiant->id}}">
                <div class="form-groupe">
                  <label for="Nom" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="Nom" name="nom"value="{{$etudiant->nom}}">
                </div>
                <div class="form-groupe">
                    <label for="Prenom" class="form-label"> Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom"value="{{$etudiant->prenom}}">
                  </div>
                <div class="form-groupe">
                    <label for="Classe" class="form-label">Classe</label>
                    <input type="text" class="form-control" id="Classe" name="classe"value="{{$etudiant->classe}}">
                  </div>  
          <br>
                <button type="submit" class="btn btn-primary">modefier une etudiant</button>
                <br>
                <br>
                <a href="/etudiant" class="btn btn-danger"> Revenir a la liste des etudiants</a>
            </form>
          </div>
         
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>