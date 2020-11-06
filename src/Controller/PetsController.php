<?php

namespace App\Controller;

use App\Repository\PetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetsController extends AbstractController
{
    private $petsRepository;

    public function __construct(PetRepository $petsRepository)
    {
        $this->petsRepository = $petsRepository;
    }

    /**
     * @Route("/pets", name="pets")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PetsController.php',
        ]);
    }
}
