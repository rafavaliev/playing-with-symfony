<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    #[Route('/lucky/number/{max}', name: 'app_lucky_number')]
    public function number(int $max, LoggerInterface $logger): Response
    {

        if ($max > 100) {
            throw $this->createNotFoundException('Max must be under 100');
        }
        $number = random_int(0, $max);
        $url = $this->generateUrl('lucky_number', ['max' => $max]);

        $logger->info('We are logging!');

        return $this->render(
            'lucky/number.html.twig',
            [
                'number' => $number,
                'url' => $url,
            ]
        );
    }



}