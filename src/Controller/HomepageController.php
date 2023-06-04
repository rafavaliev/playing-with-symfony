<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomepageController
{

    public function homepage(): Response
    {
        return new Response(
            '<html><body>Homepage</body></html>'
        );
    }

    #[Route('/hello/{name}', name: 'hello')]
    public function hello($name): Response
    {
        return new Response(
            '<html><body>Hello '.$name.'</body></html>'
        );

    }


}