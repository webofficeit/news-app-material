<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_7f341da746b4039e131aa57fc2048dbfe7e4569a1ee4b4a825522d487d1ba7b0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<div class=\"pad col-md-offset-4 col-md-4\">
    
    <form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div >
            ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "                <p class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) || array_key_exists("invalid_username", $context) ? $context["invalid_username"] : (function () { throw new Twig_Error_Runtime('Variable "invalid_username" does not exist.', 6, $this->source); })())), "FOSUserBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 8
        echo "            <div class=\"form-group label-floating is-empty\">
                <label for=\"username\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" required=\"required\" />
                <span class=\"error-form\">
                </span>
            </div>
        </div>
        <div>
            <input class=\"btn btn-primary  btn-raised col-md-12\" type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  30 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"pad col-md-offset-4 col-md-4\">
    
    <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div >
            {% if invalid_username is defined %}
                <p class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>
            {% endif %}
            <div class=\"form-group label-floating is-empty\">
                <label for=\"username\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>
                <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" required=\"required\" />
                <span class=\"error-form\">
                </span>
            </div>
        </div>
        <div>
            <input class=\"btn btn-primary  btn-raised col-md-12\" type=\"submit\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\" />
        </div>
    </form>
</div>", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
