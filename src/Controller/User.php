<?php

    namespace App\Controller;

    use App\Form\Type\UserFormType;
    use App\Entity\User;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\HttpFoundation\Request;

    class UserController extends AbstractController {
        // public function new (Request $request) {
        //     $user = new User();

        //     $form = $this->createFormBuilder($user)
        //         ->add('firstName', TextType::class)
        //         ->add('lastName', TextType::class)
        //         ->add('age', TextType::class)
        //         ->add('save', SubmitType::class, ['label' => 'Save User'])
        //         ->getForm();
        // }
        public function new() {
            $user = new User();
            
            $form = $this->createForm(UserFormType::class, $user);
        }
    }