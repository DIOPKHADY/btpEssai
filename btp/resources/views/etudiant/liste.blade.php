<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>les etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>


<div class="container text-center">
    <div class="row">
<div class="col s12">
     <h1>Liste des Etudiants</h1>
    <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Classe</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Diop</td>
            <td>Palla</td>
            <td>CE2</td>
            <td>
                <a href="#" class="btn btn-info">update</a>
                <a href="#" class="btn btn-danger">supprimer</a>
            </td>
        </tr>
         <tr>
            <td>2</td>
            <td>Sylla</td>
            <td>Khady</td>
            <td>CM1</td>
            <td>
                <a href="#" class="btn btn-info">update</a>
                <a href="#" class="btn btn-danger">supprimer</a>
            </td>
        </tr>
         <tr>
            <td>3</td>
            <td>Diop</td>
            <td>Astou</td>
            <td>CE2</td>
            <td>
                <a href="#" class="btn btn-info">update</a>
                <a href="#"  class="btn btn-danger">supprimer</a>
            </td>
        </tr>
    </tbody>
</table>

</div>

    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
