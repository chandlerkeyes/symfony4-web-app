<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class AboutPageController {
        /**
         * @Route("/about")
         */
        public function showAboutPage() {
            return new Response('<html><body><h1>About</h1></body></html>');
        }
    }