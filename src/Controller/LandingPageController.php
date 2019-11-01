<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class LandingPageController extends AbstractController {
        public function showLandingPage() {
            $name = "Chandler";
            return $this->render('landing-page/landing_page.html.twig', [
                'name' => $name
            ]);
        }
    }