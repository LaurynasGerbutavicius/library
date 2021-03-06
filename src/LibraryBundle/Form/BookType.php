<?php

namespace LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class BookType extends AbstractType
{


    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('authors', EntityType::class, [
                        'class' => 'LibraryBundle\Entity\Author',
                        'choice_label' => 'fullName',
                        'label' => 'Author (s)',
                        'multiple' => true,
                        'expanded' => true

                    ])
            ->add('isbn13')
            ->add('title')
            ->add('category', ChoiceType::class, [
                'choices' => [
                    'Drama' => 'drama',
                    'Fantasy' => 'fantasy',
                    'Novel' => 'novel'
                ]
            ])
            ->add('price');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LibraryBundle\Entity\Book'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'librarybundle_book';
    }


}
