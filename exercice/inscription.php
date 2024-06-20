<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercices en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="assets/img/PHP.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse row" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link " href="index.php">index</a>
                        <a class="nav-link" href="connexion.php">connexion</a>
                        <a class="nav-link" href="inscription.php">inscription</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class="bg-warning p-4 mb-5">
            <?php
            echo '<pre>';
            var_dump($_POST);
            echo '<pre>';
            ?>
        </div>

        <form class = "form-inscription " method = "POST">

            <div class="mb-3">
                <label for="exampleInputText">Nom</label>
                <input type="text" class="form-control" name= "exampleInputText" id="exampleInputText">
            </div>

            <div class="mb-3">
                <label for="exampleInputText2">Prénom</label>
                <input type="text" class="form-control" name="exampleInputText2" id="exampleInputText2">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" >Email address</label>
                <input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="exampleInputPassword1" id="exampleInputPassword1">
            </div>

            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" name="exampleCheck1" for="exampleCheck1">Check me out</label>
            </div> -->

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>