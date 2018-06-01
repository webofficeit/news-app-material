<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_12fe3b3ae2eafab67440a2fd649e70f49fe49527a512e377c13a9df4bb71514d extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

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
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.min.1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.min.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    
    <body>
        <div class=\"four-zero\">
            <div class=\"fz-inner\">
                <h2>404!</h2>
                <p>Nah.. it's 404</p>
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
    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  47 => 14,  42 => 12,  37 => 10,  26 => 1,);
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

        <link href=\"{{asset(\"css/material-design-iconic-font.min.css\")}}\" rel=\"stylesheet\">
        <!-- CSS -->
        <link href=\"{{asset(\"css/app.min.1.css\")}}\" rel=\"stylesheet\">
        <link href=\"{{asset(\"css/app.min.2.css\")}}\" rel=\"stylesheet\">
    </head>
    
    <body>
        <div class=\"four-zero\">
            <div class=\"fz-inner\">
                <h2>404!</h2>
                <p>Nah.. it's 404</p>
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
    </body>
</html>", "TwigBundle:Exception:error.html.twig", "/var/www/materialdesign/htdocs/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
