<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_2e30bb64acc1883eeafe5d3d47de442b5b90bed29cd49e0bc5a2588421813be0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--[if IE 9 ]><html class=\"ie9\"><![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>News Admin Panel</title>

        <!-- Vendor CSS -->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">        
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/palette.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <!-- CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.min.1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.min.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
          <script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>

    </head>
    <body data-ma-header=\"teal\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "        <div class=\"alert alert-success alert-dismissible alert-home\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
            ";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                echo "
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "

        <header id=\"header\" class=\"media\">
            <div class=\"pull-left h-logo\">
                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_index");
        echo "\" class=\"hidden-xs\">
                    News  
                    <small>admin panel</small>
                </a>
                
                <div class=\"menu-collapse\" data-ma-action=\"sidebar-open\" data-ma-target=\"main-menu\">
                    <div class=\"mc-wrap\">
                        <div class=\"mcw-line top palette-White bg\"></div>
                        <div class=\"mcw-line center palette-White bg\"></div>
                        <div class=\"mcw-line bottom palette-White bg\"></div>
                    </div>
                </div>
            </div>

            <ul class=\"pull-right h-menu\">
                <li class=\"hm-search-trigger\">
                    <a href=\"\" data-ma-action=\"search-open\">
                        <i class=\"hm-icon zmdi zmdi-search\"></i>
                    </a>
                </li>
                <li class=\"dropdown hm-profile\">
                    <a data-toggle=\"dropdown\" href=\"\">
                        <i style=\"font-size:30pt\" class=\"hm-icon zmdi zmdi-account-circle\"></i>
                    </a>
                    
                    <ul class=\"dropdown-menu pull-right dm-icon\">
                        <li>
                            <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\"><i class=\"zmdi zmdi-settings\"></i> Change Password</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"><i class=\"zmdi zmdi-time-restore\"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>        
        </header>

        <section id=\"main\">
            <aside id=\"s-main-menu\" class=\"sidebar\">
                ";
        // line 73
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->controller("AppBundle:Elements:menu"), array());
        // line 74
        echo "            </aside>

            <section id=\"content\">
                ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "            </section>

            <footer id=\"footer\">
                Copyright &copy; 2017 News Admin Panel

            </footer>

        </section>

        <!-- Page Loader -->
        <div class=\"page-loader palette-Teal bg\">
            <div class=\"preloader pl-xl pls-white\">
                <svg class=\"pl-circular\" viewBox=\"25 25 50 50\">
                    <circle class=\"plc-path\" cx=\"50\" cy=\"50\" r=\"20\"/>
                </svg>
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
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waves.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-growl.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.simpleWeather.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/salvattore.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/curvedLines.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/curved-line-chart.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/line-chart.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script>
       ";
        // line 169
        $this->displayBlock('javascripts', $context, $blocks);
        // line 173
        echo "
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

    </body>
  </html>";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        // line 78
        echo "
                ";
    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        // line 170
        echo "
        
        ";
    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 170,  347 => 169,  342 => 78,  339 => 77,  331 => 177,  327 => 176,  323 => 175,  319 => 174,  316 => 173,  314 => 169,  310 => 168,  306 => 167,  301 => 165,  296 => 163,  289 => 159,  285 => 158,  281 => 157,  277 => 156,  273 => 155,  269 => 154,  265 => 153,  261 => 152,  256 => 150,  252 => 149,  248 => 148,  244 => 147,  240 => 146,  236 => 145,  232 => 144,  228 => 143,  224 => 142,  160 => 80,  158 => 77,  153 => 74,  151 => 73,  139 => 64,  133 => 61,  103 => 34,  97 => 30,  91 => 29,  82 => 26,  78 => 24,  73 => 23,  69 => 22,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::layout.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/layout.html.twig");
    }
}
