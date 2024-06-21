  <?php include_once "inc/header.inc.php";?>

    <main>
     
      <table>
        <tr>
          <td>
          <?php
            //  création du tableuMoto ou j'insert differentes marque de moto
       
            // $tableauMoto = array (
            // 'buell', 'kawazaki', 'ducatti', 'yamaha', 'honda', 'MV agusta', 'harley-davidson'
            // );
            //  var_dump ($tableauMoto);

            $tableauMoto = array(
              "téléchargement (6).png"  => "buell ",
              " téléchargement (4).png"  => "kawazaki ",
              " téléchargement.png"  => "ducatti ",
              " téléchargement (1).png"  => "yamaha ",
              " téléchargement (2).png"  => "honda ",
              " téléchargement (3).png"  => "MV agusta ",
              " téléchargement (5).png"  => "harley-davidson"
            );

            foreach ($tableauMoto as $key => $value) {
              echo $key ;
              echo $value;
            };
            

            ?>
          </td>
        </tr>
      </table>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>