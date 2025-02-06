<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RandomAnswerController extends AbstractController
{
    #[Route('/random/{max}', name: 'app_random_answer', requirements: ['max' => '\d+'])]
    public function index(int $max): Response
    {
        $randomNumber = random_int(1, $max);

        return $this->json([
            'random_number' => $randomNumber,
        ]);
    }
}