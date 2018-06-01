<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title',null,array("label"=>"Title")) 
                ->add("category")
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
        $builder->add('save', 'submit',array("label"=>"SAVE ARTICLE"));

               
    }
    public function getName()
    {
        return 'article';
    }
}
?>