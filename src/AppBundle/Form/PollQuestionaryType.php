<?php
namespace AppBundle\Form;

use AppBundle\Entity\PollQuestionary;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class PollQuestionaryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('question');


        $builder->add('polloptions', CollectionType::class, array(
            'entry_type' => PollOptionType::class,
            'entry_options' => array('label' => false),
            'allow_add' => true,
            'by_reference' => false,
            'empty_data' => function (FormInterface $form) {
               $faculty = PollOption();
               $faculty->setQuestion($form->getParent()->getData());
               return $parentId;
            },
            'label' => false
        ));
        $builder->add('save', 'submit',array("label"=>"SAVE THE POLL"));
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $polls = $event->getData();
            $form = $event->getForm();
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => PollQuestionary::class,
        ));
    }
}
