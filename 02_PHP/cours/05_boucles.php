<?php 
$titre = "Boucles en PHP";
$leh1 = "Boucles en PHP";
$text = "Les boucles (aussi appelées structures itératives) sont un moyen de répéter plusieurs fois un même morceau de code. Une boucle est donc une répétition, comme on a pu le voir en JS";
/*<!-- ceci est mon header include */
include_once "inc/header.inc.php" ;
?>


    <main class="container-fluid px-5">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h2>Boucle "while"</h2>
                    <p>La boucle "<span>while</span>" est, comme en JS, une boucle permettant d'exécuter un code "TANT QUE" la condition d'entrée n'a pas été remplie</p>
                    <?php
                        $a = 1; // Initialisation de la variable $a à 1 => valeur de départ pour la boucle 
                        while($a < 6){ // Boucle TANT QUE $a est strictement inférieur à 6
                            echo "<p class=\"alert alert-primary\">Tour n°{$a}</p>"; // Affichage du nombre de tour
                            $a++; // Incrémentation de la variable $a afin que la condition d'entrée devienne "false" à un moment donné 
                        }
                        echo "<p>Exercice : Afficher les années de 1920 à 2023</p>";
                        // Exercice
                        // À l'aide d'une boucle "while", afficher les années de 1920 à 2023 dans un menu déroulant.
                        echo "<p>Méthode 1</p>";
                        $year = 1920;
                        echo "<form><select name=\"année\">";
                        while($year < 2024){
                            echo "<option value=\"$year\">{$year}</option>";
                            $year++;
                        }
                        echo "</select></form>";
                    ?>
                    <p>Méthode 2</p>
                    <form>
                        <select name="annee">
                        <?php
                            $annee = 1920;
                            while($annee <= 2023) {
                            echo "<option value=\"$annee\">$annee</option>";
                            $annee++;
                            }
                        ?>
                        </select>
                    </form>
                    <p>Exercice bonus : Afficher les années de 2023 à 1920</p>
                    <p>Méthode 1</p>
                    <form>
                        <select name="year">
                    <?php
                        // Exercice bonus : faire la même chose en décrémentant, de 2023 à 1920
                        $year2 = 2023;
                        while($year2 >= 1920) {
                            echo "<option value=\"$year2\">$year2</option>";
                            $year2--; // Décrémentation de la variable $year2 afin que la condition d'entrée devienne "false" à un moment donné 
                        }
                    ?>
                        </select>
                    </form>
                    <p>Méthode 2</p>
                    <?php $year3 = 2023;?>
                    <form action="#">
                        <select name="<?php echo $year3;?>">
                            <?php
                                while($year3 >= 1920){
                            ?>
                            <option value="<?php echo $year3;?>"><?php echo $year3;?></option>
                            <option value="<?php echo $year3;?>"><?= $year3;?></option>
                            <?php
                                $year3--; 
                                }
                            ?>
                        </select>
                    </form>
                    <p>Méthode 3</p>
                    <?php $year4 = 2023;?>
                    <form action="#">
                        <select name="<?= $year4;?>">
                            <?php
                                while($year4 >= 1920){
                            ?>
                            <option value="<?= $year4;?>"><?= $year4;?></option>
                            <?php
                                $year4--; 
                                }
                            ?>
                        </select>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h2>Boucle "do", "while"</h2>
                    <p>Cette boucle fonctionne avec la même instruction que la boucle "<span>while</span>". Cependant pour cette boucle, la condition est testée à la fin et pas au début</p>
                    <p>La boucle "<span>do</span>" "<span>while</span>" a la particularité de s'exécuter au moins une fois puis TANT QUE la condition de fin est vraie</p>
                    <?php
                        $i = 0; // Déclaration et initialisation de la variable 
                        do{ // Ici on exécute d'abord cette première partie avant même de regarder la condition
                            echo "<p class=\"alert alert-primary\">$i</p>"; // Affiche la valeur de $i
                            $i++; // Incrémentation
                        } while($i > 100) // Condition, si elle est true, le code s'arrête ici sinon la boucle s'exécute jusqu'à ce que la condition soit vraie
                    ?>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h2>Boucle "for"</h2>
                    <p>La boucle "<span>for</span>", comme toutes les boucles, sert à répéter un morceau de code TANT QUE la condition n'est pas respecté. Sa structure est cependant différente : </p>
                    <ol>
                        <li><span>Initialisation de la variable</span></li>
                        <li><span>Condition de sortie</span></li>
                        <li><span>Incrémentation de la variable</span></li>
                    </ol>
                    <?php
                    
                        // Exercice : Créer en PHP un formulaire de sélection de date de naissance (jour - mois - année)
                        echo "<form>
                            <label for='annee'>Année de naissance</label>
                            <select name='année' id='annee'>";
                                for($annee = 1920; $annee < 2024; $annee++){
                                echo"<option value=\"$annee\">{$annee}</option>";}
                            echo "</select>";

                            echo "<label for='jours'>Jours</label>
                            <select name='jour' id='jours'>";
                                for($jours = 0; $jours <= 31; $jours++){
                                echo "<option value='$jours'>{$jours}</option>";}
                            echo "</select>";

                            echo "<label for='mois'>Mois</label>
                            <select name='mois' id='mois'>";
                                for($mois = 0; $mois <= 12; $mois++){
                                echo "<option value='$mois'>{$mois}</option>";}
                            echo "</select>
                        </form>";

                        // Exercice : créer un tableau qui affiche 0 à 9 sur une seule ligne 
                        echo "<p>Excercie : Créer un tableau qui affiche 0 à 9 sur une seule ligne</p>"; 
                        // Solution 1 :

                       


                        echo "<table>
                            <tr>";
                                for($i=1; $i<=10; $i++){
                                echo"<td>Colonne numéro </td>";}
                            echo "</tr> 
                            <tr>";
                                for($i=0; $i<10; $i++){
                                echo"<td> $i </td>";}
                            echo "</tr>
                        </table>";
                    ?>
                </div>
                <div class="col-sm-12 col-md-6 mt-5">
                    <h2>Boucle "foreach"</h2>
                    <p>La boucle foreach sert à parcourir un tableau (array() ou []). On verra cette boucle plus en détails dans la page dédiée aux array().</p>
                    <p class="alert alert-danger">Attention. Lorsque que vous faites une boucle, vérifiez votre condition de sortie ainsi que l'incrémentation de votre variable. Sans incrémentation, vous aurez une boucle infinie.</p>
                    <p class="alert alert-secondary">A force d'utilier les boucles, il sera de plus en plus logique de choisir telle ou telle boucle pour tel ou tel usage.</p>
                </div>
            </div>
    </main>


 <!-- ceci est mon footer vin include -->
 <?php include ("inc/footer.inc.php" );?>