<?php

    namespace App\Controller;

    use App\Form\Type\UserFormType;
    use App\Entity\User;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    class UserController extends AbstractController {
        public function index() {
            $form = $this->createForm(UserFormType::class);

            return $this->render('landing-page/landing_page.html.twig', [
                'form' => $form->createView()
            ]);
        }
    }