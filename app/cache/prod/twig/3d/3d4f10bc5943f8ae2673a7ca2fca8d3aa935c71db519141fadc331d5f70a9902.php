<?php

/* AppBundle:Support:view.html.twig */
class __TwigTemplate_548c02d1ebf66bc5bfc0575b052226b0a399f2e4b3181c8acfdd7313c9b30778 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Support:view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"card\" id=\"todo-lists\">
    <div class=\"card-header ch-dark palette-Teal-600 bg\">
        <h2>Full name : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "subject", array()), "html", null, true);
        echo "
        <small>E-mail : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "email", array()), "html", null, true);
        echo "</small>
        </h2>

        <ul class=\"actions a-alt\">
            <li class=\"dropdown\">
                <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"zmdi zmdi-more-vert\"></i>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li>
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support_delete", array("id" => twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support_view", array("id" => twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "id", array()))), "html", null, true);
        echo "\">View</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"card-body\">
        <div class=\"list-group lg-alt\">
            <div class=\"list-group-item-header palette-Purple text\">Message</div>
            <div style=\"padding:40px; text-align: justify;padding:40px;\">
            \t";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "message", array());
        echo "
            \t<br>
            \t<br>
            \t<br>
\t            <ul class=\"lgi-attrs pull-right\">
\t                <li>Sending Date:";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "created", array()), "d/m/Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "created", array()), "H:i"), "html", null, true);
        echo "</li>
\t            </ul>
            </div>

        </div>
        <a href=\"mailto:";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support"] ?? null), "email", array()), "html", null, true);
        echo "?subject=feedback\" class=\"btn palette-Blue-300 bg btn-float waves-effect waves-circle waves-float\"><i class=\"zmdi zmdi-mail-reply\"></i></a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Support:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 41,  85 => 36,  77 => 31,  63 => 20,  57 => 17,  43 => 6,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Support:view.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Support/view.html.twig");
    }
}
