<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use App\Controller\UserController;

    class LandingPageController extends AbstractController {
        /**
         * @Route("/", name="landing")
         */
        public function showLandingPage() {
            return $this->forward('app.user_controller:index');
        }
    }