<?php
declare(strict_types=1);

namespace App\Controller\Dashboard;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('pages/dashboard.html.twig', [
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Dashboard/DashboardController.php',
        ]);
    }
}
