<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
/**
* @Route("/index")
*/

    public function index()
    {
	return new Response('<html><body>Hola que tal. Release ?</body></html>'
        );
    }
}
?>
