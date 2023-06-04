<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UnluckyController extends AbstractController
{
    #[Route('/unlucky/number', methods: ['POST'])]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render(
            'unlucky/number.html.twig',
            [
                'number' => $number
            ]
        );
    }

}