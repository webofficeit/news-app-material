<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title',null,array("label"=>"Title")) 
                ->add("category",null, array(
                    'required' => true,
                ))
                ->add("video",TextType::class,
                    array(
                        "label"=>"Youtube video url",
                        'constraints' => array(
                                new NotBlank(),
                                new Url()
                            )
                        )
                    )
                ->add('content', CKEditorType::class, 
                    array(
                        'config_name' => 'user_config'
                    )
                )
                ->add("enabled")
                ->add("comment");
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $article = $event->getData();
            $form = $event->getForm();
            if ($article and null !== $article->getId()) {
                 $form->add("file",null,array("label"=>"","required"=>false));
            }else{
                 $form->add("file",null,array("label"=>"","required"=>true));
            }
        });
        $builder->add('save', 'submit',array("label"=>"SAVE VIDEO"));
    }
    public function getName()
    {
        return 'article';
    }
}
?>