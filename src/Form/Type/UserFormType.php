<?php

    namespace App\Form\Type;

    use App\Entity\User;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class UserFormType extends AbstractType {
        public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('age', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Save User']);
        }

        public function configureOptions(OptionsResolver $resolver) {
            $resolver->setDefaults([
                'data_class' => User::class
            ]);
        }
    }
