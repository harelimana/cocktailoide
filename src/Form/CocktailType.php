<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Cocktail;
use App\Entity\Ingredient;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\SmallIntType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CocktailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',textType::class,['attr'=>['paceholder'=>"nom du cocktail"]])
            ->add('description',textType::class,['attr'=>['paceholder'=>"description du cocktail"]])
            ->add('prix',SmallIntType::class,['attr'=>['paceholder'=>"prix du cocktail"]])
            ->add('volume',SmallIntType::class,['attr'=>['paceholder'=>"volume du cocktail"]])
            ->add('origine',textType::class,['attr'=>['paceholder'=>"origine du cocktail"]])
            ->add('image_url',textType::class,['attr'=>['paceholder'=>"image du cocktail"]])
            ->add('categorie',EntityType::class, ['class' => Categorie::class])
            ->add('ingredient',EntityType::class, ['class' => Ingredient::class])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cocktail::class,
        ]);
    }
}
