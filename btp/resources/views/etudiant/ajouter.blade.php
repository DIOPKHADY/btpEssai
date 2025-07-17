<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>les etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>


<div class="container text">
    <div class="row">
<div class="col s12">
    <h1>Ajouter un etudiant</h1>
   <hr>
   <form>
  <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="Nom" name="nom">
  </div>
  <div class="mb-3">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="Prenom" name="prenom">
  </div>
   <div class="mb-3">
    <label for="Classe" class="form-label">Classe</label>
    <input type="text" class="form-control" id="classe" name="classe">
  </div>

<br>
  <button type="submit" class="btn btn-primary">ajouter l'etudiant</button>
<br>
<br>
<a href="/etudiant" class="btn btn-danger"> Revenir à la liste</a>
</form>

</div>

    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
