<?php

//PARA REDIRECCIONAR LA PAGINA
function redireccionar($pagina){
    header('location: ' . RUTA_URL . $pagina);
}