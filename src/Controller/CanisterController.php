<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CanisterRepository;

class CanisterController extends AbstractController
{
    /**
     * @Route("/canisters", name="canisters")
     */
    public function index(CanisterRepository $canisterRepository)
    {
        $canisters = $canisterRepository->findAll();

        return $this->render('canister/index.html.twig', [
            'canisters' => $canisters,
        ]);
    }
}
