<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8436e0d37c68dff9912fee549fecdf42a4599d82e0fb2c5161cc3507321e47fb extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 49, $this->source); })()), array(), "FOSUserBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "\" />

                    <div class=\"form-group fg-float\">
                        <div class=\"fg-line\">
                            <input type=\"text\" class=\"input-sm form-control fg-input\"  id=\"username\" name=\"_username\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 59, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  283 => 157,  276 => 153,  268 => 148,  264 => 147,  260 => 146,  250 => 139,  243 => 135,  239 => 134,  235 => 133,  176 => 77,  169 => 73,  159 => 66,  150 => 60,  146 => 59,  139 => 55,  135 => 54,  131 => 52,  125 => 49,  121 => 47,  119 => 46,  110 => 39,  104 => 38,  94 => 34,  90 => 32,  85 => 31,  81 => 30,  72 => 24,  68 => 23,  60 => 18,  56 => 17,  52 => 16,  45 => 12,  41 => 11,  37 => 10,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
    <!--[if IE 9 ]><html class=\"ie9\"><![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Material Admin</title>
        
        <!-- Vendor CSS -->
        <link href=\"{{asset(\"css/animate.min.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/palette.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/material-design-iconic-font.min.css\")}}\" rel=\"stylesheet\">


                <!-- Vendor CSS -->
        <link href=\"{{asset(\"css/animate.min.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/palette.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/material-design-iconic-font.min.css\")}}\" rel=\"stylesheet\">



        <!-- CSS -->
        <link href=\"{{asset(\"css/app.min.1.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/app.min.2.css\")}}\" rel=\"stylesheet\"> 
        
    </head>
    
    <body>

    \t{% for type, messages in app.session.flashbag.all() %}
\t\t\t{% for message in messages %}
\t\t\t\t<div class=\"alert alert-dismissible alert-success alert-i\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t<strong>{{message}}</strong>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t{% endfor %}
        <div class=\"login\" data-lbg=\"teal\">
            <div class=\"l-block toggled\" id=\"l-lockscreen\">
\t\t\t\t<div class=\"lb-header palette-Teal bg\">
                    <i class=\"zmdi zmdi-account-circle\"></i>
                    Hi there! Please Sign in
                </div>
                <br>
\t\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                        {{ error|trans({}, 'FOSUserBundle') }}
                    </div>
\t\t\t\t\t{% endif %}

                <div class=\"lb-body\">
\t\t\t\t\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

                    <div class=\"form-group fg-float\">
                        <div class=\"fg-line\">
                            <input type=\"text\" class=\"input-sm form-control fg-input\"  id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\">
                            <label class=\"fg-label\">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>
                        </div>
                    </div>
                    <div class=\"form-group fg-float\">
                        <div class=\"fg-line\">
                            <input type=\"password\" name=\"_password\" required=\"required\" class=\"input-sm form-control fg-input\"  >
                            <label class=\"fg-label\">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
                        </div>
                    </div>
                    <div class=\"checkbox m-b-15\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                            <i class=\"input-helper\"></i>
                            {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                        </label>
                    </div>

                    <button class=\"btn palette-Teal bg\">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>
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
        <script src=\"{{asset(\"js/jquery.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/bootstrap.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/waves.min.js\")}}\"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src=\"{{asset(\"js/jquery.placeholder.min.js\")}}\"></script>
        <![endif]-->
        
        <script src=\"js/functions.js\"></script>



       <script src=\"{{asset(\"js/jquery.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/bootstrap.min.js\")}}\"></script>
        <script src=\"{{asset(\"js/waves.min.js\")}}\"></script>


        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
        <script src=\"{{asset(\"js/jquery.placeholder.min.js\")}}\"></script>
        <![endif]-->


        <script src=\"{{asset(\"js/functions.js\")}}\"></script>

        
    </body>
</html>

", "FOSUserBundle:Security:login.html.twig", "/var/www/news-app-material/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
