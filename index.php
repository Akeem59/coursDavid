<?php
namespace Valarep;
//début de l'application web

//chargement automatique des classes
require_once "vendor/autoload.php";

//inclusion des classes externes
use Valarep\controllers\PostController;

if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else{
// page par défaut
    $page = 'post-list';
}

switch($page)
{
    case 'post-list':  
    PostController::ListAction();
        break;
            default:
    }

