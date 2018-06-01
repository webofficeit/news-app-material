<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_f8332964237e9022018d088b14c9cbe19d20217c3f2c1872f5dc6a91955aec2b extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.request.invalid_username", array("%username%" => ($context["invalid_username"] ?? null)), "FOSUserBundle"), "html", null, true);
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
        return array (  53 => 16,  43 => 9,  40 => 8,  34 => 6,  32 => 5,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
