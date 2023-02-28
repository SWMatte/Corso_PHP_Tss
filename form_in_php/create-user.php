<?php
/* rappresenta l'ambiente dove gira lo script è una variabile super globale
l'indice lo prendi mandando a schermo solo il server e cercando con ctrl u la richiesta post


*/
//  print_r($_SERVER['REQUEST_METHOD']);
require "./class/validator/Validable.php";
require "./class/validator/ValidateRequired.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo 'POST dati inviati, ora li devo controllare';

  //come associo la validazione ad un campo / input / controllo.

  $validatordName = new ValidateRequired();
  $validatedName = $validatordName->isValid($_POST['first_name']);

  $isValidNameClass = $validatordName->isValid($_POST['first_name']) ? '' : 'is-invalid';
}  /*questo script viene eseguito quando visualizzo x la prima volta il form */
 if($_SERVER['REQUEST_METHOD'] =='GET'){
 /*si dichiara che è false in quanto inizialmente non esiste ancora questa variabile xke entriamo via GET 
  si potrebbe mettere sotto anche if(isset($validatedName) $$ !$validatedName) ma questo andrebbe messo nella parte sotto del codice
  isset sarebbe false inizialmente quindi essendo in and funzionerebbe non mostrando l'errore.
  */
 $validatedName = false;
 /*imposto di default uno spazio vuoto a fianco al nome come definito dalla funzione  */
 $isValidNameClass= ' ';
 }



 
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <header class="bg-light p-1">
    <h1 class="display-6">Applicazione demo</h1>
  </header>
  <main class="container">

    <section class="row">
      <div class="col-sm-2">

      </div>
      <div class="col-sm-8">

        <form class="mt-1 mt-md-5" action="create-user.php" method="POST">
          <!--  con form-control di bootstrap associamo le classi valid-invalid , poi con il tag '<php'
           andiamo a stampare all'interno la classe che fa il controllo-->
          <div class="mb-3">
            <label for="first_name" class="form-label">nome</label>
            <input type="text" class="form-control <?php echo $isValidNameClass ?> " name="first_name" id="first_name">
            <?php
            /* invalid-feedback arriva da bootstrap -> definisce che la classe è invalida 
             apriamo e chiudiamo piu volte il tag di php perche' per andare a capo e inserire in mezzo l'html necessita di 
             essere aperto piu volte.
            */
            if (!$validatedName) {  ?>
              <div class="invalid-feedback">
                il nome è obbligatorio

              </div>

            <?php
            }
            ?>


          </div>

          <div class="mb-3">
            <label for="last_name" class="form-label">cognome</label>
            <input type="text" class="form-control" name="last_name" id="last_name">
            <div class="invalid-feedback">
              errore
            </div>
          </div>

          <div class="mb-3">
            <label for="birthday" class="form-label">data di nascita</label>
            <input type="date" class="form-control" name="birthday" id="birthday">
            <div class="invalid-feedback">
              errore
            </div>
          </div>
          <div class="mb-3">
            <label for="birth_place" class="form-label">luogo di nascita</label>
            <input type="text" class="form-control" name="birth_place" id="birth_place">
            <div class="invalid-feedback">
              errore
            </div>
          </div>



          <div class="mb-3">
            <span>Genere</span>
            <div class="form-check">
              <input class="form-check-input " type="radio" name="gender" id="gender_M">

              <label class="form-check-label" for="gender_M">
                Maschile
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="gender_F">
              <label class="form-check-label" for="gender_F">
                Femminile
              </label>
              <div class="invalid-feedback">
                errore
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Nome utente</label>
            <input type="text" class="form-control" name="username" id="username">
            <div class="invalid-feedback">
              errore
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
            <div class="invalid-feedback">
              errore
            </div>
          </div>


          <button class="btn btn-primary btn-sm" type="submit"> Crea </button>
        </form>
      </div>

      <div class="col-sm-2">
      </div>
    </section>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>