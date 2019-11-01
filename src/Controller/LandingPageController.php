<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class LandingPageController {
        public function showLandingPage() {
            return new Response('<html><body><h1>Welcome</h1></body></html>');
        }

        /**
         * @Route("/description")
         */

        public function showLandingPageWithDescription() {
            return new Response('<html><body><h1>Welcome</h1></body></html>');
        }
    }