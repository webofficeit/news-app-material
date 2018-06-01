<?php

/* AppBundle:Poll:add.html.twig */
class __TwigTemplate_ede175bec6171a45c6d9e8eaeca0225d31a16ea92db0fa1e319f785c59702359 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Poll:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Poll:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"card col-md-offset-1 col-sm-8\">
        <div class=\"card-header\">
            <h2>ADD NEW POLL<small>
            </small></h2>
        </div>
          <div class=\"card-body card-padding\">
          ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  <div class=\"form-group fg-line\">
  ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "question", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
          ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "question", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "question", array()), 'errors');
        echo "

    </div>


    <div>Options</div>
    <ul class=\"polloption\" data-prototype=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "polloptions", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "polloptions", array()), "vars", array()), "prototype", array()), "answer", array()), 'widget', array("attr" => array("class" => "form-control polloption_widget"))));
        echo "

    </ul>
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo "
";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
          <br>
          <br>
      </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "<script>
var \$collectionHolder;

// setup an \"add a tag\" link
var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Add  Option</a>');
var \$newLinkLi = \$('<li></li>').append(\$addTagLink);


\$(document).ready(function() {
    // Get the ul that holds the collection of tags
    \$collectionHolder = \$('ul.polloption');

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

    \$addTagLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addTagForm(\$collectionHolder, \$newLinkLi);
    });
});

function addTagForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<li class=\"polloption_widget\"></li>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
}
</script>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Poll:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  104 => 32,  90 => 25,  86 => 24,  80 => 21,  76 => 20,  67 => 14,  63 => 13,  59 => 12,  54 => 10,  45 => 3,  39 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}
<div class=\"container\">
    <div class=\"card col-md-offset-1 col-sm-8\">
        <div class=\"card-header\">
            <h2>ADD NEW POLL<small>
            </small></h2>
        </div>
          <div class=\"card-body card-padding\">
          {{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}
  <div class=\"form-group fg-line\">
  {{form_label(form.question,null,{label_attr:{\"class\":\"\"}})}}
          {{form_widget(form.question,{attr:{\"class\":\"form-control\"}})}}
          {{form_errors(form.question)}}

    </div>


    <div>Options</div>
    <ul class=\"polloption\" data-prototype=\"{{ form_widget(form.polloptions.vars.prototype)|e('html_attr') }}\">
    {{ form_widget(form.polloptions.vars.prototype.answer,{attr:{\"class\":\"form-control polloption_widget\"}})|e }}

    </ul>
    {{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}}
{{ form_end(form) }}
          <br>
          <br>
      </div>
  </div>
</div>
{% endblock %}
{% block javascripts %}
<script>
var \$collectionHolder;

// setup an \"add a tag\" link
var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Add  Option</a>');
var \$newLinkLi = \$('<li></li>').append(\$addTagLink);


\$(document).ready(function() {
    // Get the ul that holds the collection of tags
    \$collectionHolder = \$('ul.polloption');

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

    \$addTagLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addTagForm(\$collectionHolder, \$newLinkLi);
    });
});

function addTagForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<li class=\"polloption_widget\"></li>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
}
</script>

 {% endblock %}
", "AppBundle:Poll:add.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Poll/add.html.twig");
    }
}
