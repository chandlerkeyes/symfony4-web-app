<?php

    namespace App\Form\Type;

    use App\Entity\User;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class UserFormType extends AbstractType {
        public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
            ->add('firstName')
            ->add('lastName')
            ->add('age')
            ->add('save', SubmitType::class, ['label' => 'Save User']);
        }

        public function configureOptions(OptionsResolver $resolver) {
            $resolver->setDefaults([
                'data_class' => User::class
            ]);
        }
    }
