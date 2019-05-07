<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Noob;
use App\Entity\Boss;
use App\Entity\Reason;
use App\Entity\Urgence;
use App\Repository\NoobRepository;
use App\Repository\BossRepository;
use App\Repository\ReasonRepository;
use App\Repository\UrgenceRepository;
use App\Repository\TicketRepository;

class GenerateurTicketController extends AbstractController {
    /**
     * @Route("/generateur_ticket", name="generateur_ticket")
     */
    public function index(NoobRepository $repoNoob, BossRepository $repoBoss, ReasonRepository $repoReason, UrgenceRepository $repoUrgence, TicketRepository $repoTicket) {
        $noobs = $repoNoob->findAll();
        $bosses = $repoBoss->findAll();
        $reasons = $repoReason->findAll();
        $urgences = $repoUrgence->findAll();
        $tickets = $repoTicket->findAll();
        return $this->render('generateur_ticket/index.html.twig', [
            'controller_name' => 'GenerateurTicketController',
            'noobs' => $noobs,
            'bosses' => $bosses,
            'reasons' => $reasons,
            'urgences' => $urgences,
            'tickets' => $tickets
        ]);
    }

    
    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('generateur_ticket/home.html.twig');
    }
}
