<?php

namespace App\Form;


use App\Entity\Takimlar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TakimType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ad',TextType::class,["attr"=>["class"=>"form-control"]])
            ->add('save', SubmitType::class, ['label' => 'Takım ekle Task',"attr"=>["class"=>"form-control"]]);

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Takimlar::class,
        ]);
    }
}
