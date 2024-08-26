
<?php
function debug($var){

     echo '<pre class="border border-dark bg-light text-primary w-50 p-3">';
     var_dump($var); 
     echo '</pre>';

} 

function alert(string $contenu, string $class)
{

    return "<div class=\"alert alert-$class alert-dismissible fade show text-center w-50 m-auto mb-5\" role=\"alert\">
               $contenu
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
}
