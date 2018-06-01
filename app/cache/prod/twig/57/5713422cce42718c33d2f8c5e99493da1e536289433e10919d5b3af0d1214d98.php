<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_78d9419c651f701dfec5fa68cc2ea35b5abb0141a1f581b6716e324877f65b8c extends Twig_Template
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
        echo "<!DOCTYPE html>
    <!--[if IE 9 ]><html class=\"ie9\"><![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Material Admin</title>
        
        <!-- Vendor CSS -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/palette.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


                <!-- Vendor CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/palette.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



        <!-- CSS -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.min.1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.min.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        
    </head>
    
    <body>

    \t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 31
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "\t\t\t\t<div class=\"alert alert-dismissible alert-success alert-i\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t<strong>";
                // line 34
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        <div class=\"login\" data-lbg=\"teal\">
            <div class=\"l-block toggled\" id=\"l-lockscreen\">
\t\t\t\t<div class=\"lb-header palette-Teal bg\">
                    <i class=\"zmdi zmdi-account-circle\"></i>
                    Hi there! Please Sign in
                </div>
                <br>
\t\t\t\t\t";
        // line 46
        if (($context["error"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["error"] ?? null), array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </div>
\t\t\t\t\t";
        }
        // line 52
        echo "
                <div class=\"lb-body\">
\t\t\t\t\t<form action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />

                    <div class=\"form-group fg-float\">
                        <div class=\"fg-line\">
                            <input type=\"text\" class=\"input-sm form-control fg-input\"  id=\"username\" name=\"_username\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\">
                            <label class=\"fg-label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"form-group fg-float\">
                        <div class=\"fg-line\">
                            <input type=\"password\" name=\"_password\" required=\"required\" class=\"input-sm form-control fg-input\"  >
                            <label class=\"fg-label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <div class=\"checkbox m-b-15\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                            <i class=\"input-helper\"></i>
                            ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        </label>
                    </div>

                    <button class=\"btn palette-Teal bg\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                \t</form>
                </div>
            </div>
        </div>
        






        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class=\"ie-warning\">
                <h1 class=\"c-white\">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class=\"iew-container\">
                    <ul class=\"iew-download\">
                        <li>
                            <a href=\"http://www.google.com/chrome/\">
                                <img src=\"img/browsers/chrome.png\" alt=\"\">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                                <img src=\"img/browsers/firefox.png\" alt=\"\">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"http://www.opera.com\">
                                <img src=\"img/browsers/opera.png\" alt=\"\">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://www.apple.com/safari/\">
                                <img src=\"img/browsers/safari.png\" alt=\"\">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                                <img src=\"img/browsers/ie.png\" alt=\"\">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
        
        <!-- Javascript Libraries -->
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waves.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        
        <script src=\"js/functions.js\"></script>



       <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waves.min.js"), "html", null, true);
        echo "\"></script>


        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->


        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>

        
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 157,  273 => 153,  265 => 148,  261 => 147,  257 => 146,  247 => 139,  240 => 135,  236 => 134,  232 => 133,  173 => 77,  166 => 73,  156 => 66,  147 => 60,  143 => 59,  136 => 55,  132 => 54,  128 => 52,  122 => 49,  118 => 47,  116 => 46,  107 => 39,  101 => 38,  91 => 34,  87 => 32,  82 => 31,  78 => 30,  69 => 24,  65 => 23,  57 => 18,  53 => 17,  49 => 16,  42 => 12,  38 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
