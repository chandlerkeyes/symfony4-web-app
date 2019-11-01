<?php

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;

    class LandingPageController {
        public function showLandingPage() {
            return new Response('<html><body><h1>Welcome</h1></body></html>');
        }
    }