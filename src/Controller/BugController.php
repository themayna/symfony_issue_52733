<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BugController extends AbstractController
{
    #[Route('/', name: 'app_bug')]
    public function index(): JsonResponse
    {
        dump($_ENV['APP_SECRET']);die('here');
    }
}