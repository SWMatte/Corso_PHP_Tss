<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>esercitazione form</title>
</head>

<body>
    <header class="bg-light p-1">
        <h1 class="display-6">Form-demo</h1>
    </header>
    <main class="container">
        <section class="row">
            <div class="col-sm-4">
            </div>

            <div class="col-sm-4">
                <form class="mt-1 mt-md-5 mb-5" action="register-user.php" method="get">
                    <div class="mb-3">
                        <label for="nome" class="form-label" name="first_name">nome</label>
                        <input type="nome" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="mb-3">
                        <label for="cognome" class="form-label" name="last_name">cognome</label>
                        <input type="cognome" class="form-control" id="cognome" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label" name="birthday">data di nascita</label>
                        <input type="date" class="form-control" id="dataDiNascita" name="birthday" min="1990-01-01" max="07-02-31">
                    </div>

                    <div class="mb-3 ">
                        <label for="luogoDiNascita" class="form-label" name="birth_place">luogo di nascita</label>
                        <input type="luogoDiNascita" class="form-control" id="birth_place" name="birth_place">
                    </div>
                    <div class="mb-3 pb-4">
                        <label for="sesso" class="form-label" name="gender">sesso</label> <br>
                        <div>
                            <input type="radio" id="uomo" name="gender" value="uomo"> uomo
                        </div>

                        <div>
                            <input type="radio" id="donna" name="gender" value="donna"> donna
                        </div>


                    </div>

                    <div class="mb-3 pt-5">
                        <label for="nomeUtente" class="form-label" name="username">username</label>
                        <input type="nomeUtente" class="form-control" id="nomeUtente" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" name="password">password</label>
                        <input type="password" id="password" class="form-control" name="password">
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit"> login </button>
                </form>
            </div>

            </div>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>