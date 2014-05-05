<?php

namespace VieilleSardine\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

         $builder
                ->add('NomClient','text',array('label' => 'Nom'))            
                ->add('PrenomClient','text',array('label' => 'Prenom'))           
                ->add('NumVoieClient','text',array('label' => 'N° de la voie'))            
                ->add('LibelleVoieClient','text',array('label' => 'Libelle de la voie'))            
                ->add('CodePostalClient','text',array('label' => 'Code postal'))           
                ->add('VilleClient','text',array('label' => 'Ville '))           
                ->add('PaysClient','text',array('label' => 'Pays'))            
                ->add('TelClient','text',array('label' => 'Téléphone '));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VieilleSardine\UserBundle\Entity\Client',
            'intention'  => 'registration',
        ));
    }
    public function getName()
    {
        return 'vieillesardine_user_registration';
    }
}
