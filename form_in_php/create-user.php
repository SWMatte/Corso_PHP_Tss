<?php

//spegenre errori a livello di server e anche runtime(durante esecuzione) 
//error_reporting(E_ALL); li vede tutti
//error_reporting(0); li spegne tutti
require "./class/validator/Validable.php";
require "./class/validator/ValidateRequired.php";
require "./class/validator/ValidateMail.php";
require "./class/validator/ValidateDate.php";

//  print_r($_POST);

$validatorName = new ValidateRequired('', 'Il nome è obbligatorio');
$validatorSurname = new ValidateRequired('', 'Il cognome è obbligatorio');
$validatorGender = new ValidateRequired('', 'Il genere è obbligatorio');


$validatorUser = new ValidateMail('', "email obbligatoria");

$validatorDate = new ValidateDate(date("d/m/Y"), 'Data obbligatoria');

print_r($validatorUser->getValid() . "arrivo dal get");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
    $validatedName = $validatorName->isValid($_POST['first_name']);

    $validateUser = $validatorUser->isValid($_POST['username']);

    $validateDate = $validatorDate->isValid($_POST['birthday']);

    $validateSurname = $validatorSurname->isValid($_POST["last_name"]);

    $validateGender = $validatorGender->isValid($_POST["gender"]);
}

/** questo script viene eseguito quanod visualizzo per la prima volta il form */
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    print_r($_GET) . "sono nel get";
    //$validatedName = false; per non far scattare il warning oppure usare isset

}



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esercitazione Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header class="bg-light p-1">
        <h1 class="display-6">Applicazione demo</h1>
    </header>
    <main class="container">

        <section class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <form class="mt-1 mt-md-5" action="create-user.php" method="post">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">nome</label>
                        <input type="text" value="<?= $validatorName->getValue() ?>" class="form-control <?php echo !$validatorName->getValid() ? 'is-invalid' : ''  ?>" name="first_name" id="first_name">
                        <!-- mettere is-invalid -->
                        <?php
                        //GET isset($validatedName) prova a usare una variabile e se non esiste(false) non da warning
                        //POST isset($validatedName) in questo caso da true, nel nostro caso
                        if (!$validatorName->getValid()) { ?>
                            <div class="invalid-feedback">
                                <?php echo $validatorName->getMessage() ?>
                            </div>
                        <?php
                        }
                        ?>


                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">cognome</label>
                        <input type="text" value="<?= $validatorSurname->getValue() ?>" class="form-control <?php echo !$validatorSurname->getValid() ? 'is-invalid' : ''  ?>" name="last_name" id="last_name">
                        <?php
                        if (!$validatorSurname->getValid()) { ?>
                            <div class="invalid-feedback">
                                <?php echo $validatorSurname->getMessage() ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label"> data di nascita</label>
                        <input type="text" value="<?= $validatorDate->getValue() ?>" class="form-control  <?php echo !$validatorDate->getValid() ? 'is-invalid' : '' ?>" name="birthday" id="birthday">
                        <?php
                        if (!$validatorDate->getValid()) { ?>
                            <div class="invalid-feedback">
                                <?php echo $validatorDate->getMessage() ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="birth_place" class="form-label">luogo di nascita</label>
                        <input type="text" class="form-control" name="birth_place" id="birth_place">

                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">genere</label>
                        <select name="gender" value=" <?= $validatorGender->getValue() ?>" class="form-select <?php echo !$validatorGender->getValid() ? 'is-invalid' : ''  ?>" id="gender">
                            <option value="" <?php         ?> ></option>
                            <option value="F " selected>F</option>
                            <option value="M" >M</option>
                            

                            
                    
                        </select>
                        <?php
                        if (!$validatorGender->getValid()) { ?>
                            <div class="invalid-feedback">
                                <?php echo $validatorGender->getMessage() ?>
                            </div>
                        <?php
                        }



                        ?>

                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">nome utente</label>
                        <input type="text" value="<?= $validatorUser->getValue() ?>" class="form-control  <?php echo !$validatorUser->getValid() ? 'is-invalid' : ''  ?>" name="username" id="username">
                        <?php

                        if (!$validatorUser->getValid()) { ?>
                            <div class="invalid-feedback">
                                <?php echo $validatorUser->getMessage() ?>
                            </div>
                        <?php
                        }
                        ?>


                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="text" id="password" name="password" class="form-control <?php echo $isValidPassword ?>">
                        <?php
                        if (isset($validatedPassword) && !$validatedPassword) { ?>
                            <div class="invalid-feedback">
                                la password è obbligatoria
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                    <button class="btn btn-primary btn-sm" type="submit">Registrati</button>
                </form>
            </div>



            <div class="col-sm-3">

            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>