<?php

/* SecurityBundle:Collector:security.html.twig */
class __TwigTemplate_5b284cd505ae7137796dc12a9158a36f5a1ee438644da3796b9f158b37ef896b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "SecurityBundle:Collector:security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo "Security";
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", array())) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", array()) && twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", array()));
            // line 8
            echo "        ";
            $context["color_code"] = ((($context["is_authenticated"] ?? null)) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", array())) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", array())) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 27
            echo ((($context["is_authenticated"] ?? null)) ? ("green") : ("red"));
            echo "\">";
            echo ((($context["is_authenticated"] ?? null)) ? ("Yes") : ("No"));
            echo "</span>
            </div>

            ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", array()) != null)) {
                // line 31
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                <span>";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", array()));
                echo "</span>
            </div>
            ";
            }
            // line 36
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", array())) {
                // line 37
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Actions</b>
                <span><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a></span>
            </div>
            ";
            }
            // line 42
            echo "        ";
        } elseif (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", array())) {
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>You are not authenticated.</span>
            </div>
        ";
        } else {
            // line 47
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        ";
        }
        // line 51
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "status" => ($context["color_code"] ?? null)));
        echo "
";
    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        // line 57
        echo "    <span class=\"label ";
        echo ((( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", array()) ||  !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 58
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        // line 64
        echo "    <h2>Security Token</h2>

    ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", array())) {
            // line 67
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", array()) == "anon.")) ? ("Anonymous") : (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", array()))), "html", null, true);
            echo "</span>
                <span class=\"label\">Username</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
            echo "</span>
                <span class=\"label\">Authenticated</span>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">Property</th>
                    <th scope=\"col\">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Roles</th>
                    <td>
                        ";
            // line 90
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", array()))) ? ("none") : ($this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", array())))), "html", null, true);
            echo "

                        ";
            // line 92
            if (( !twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", array()) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "roles", array())))) {
                // line 93
                echo "                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                        ";
            }
            // line 95
            echo "                    </td>
                </tr>

                ";
            // line 98
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", array())) {
                // line 99
                echo "                <tr>
                    <th>Inherited Roles</th>
                    <td>";
                // line 101
                echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", array()))) ? ("none") : ($this->extensions['Symfony\Bridge\Twig\Extension\YamlExtension']->encode(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", array())))), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            // line 104
            echo "
                ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", array())) {
                // line 106
                echo "                <tr>
                    <th>Token class</th>
                    <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", array()), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            // line 111
            echo "            </tbody>
        </table>
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 113
($context["collector"] ?? null), "enabled", array())) {
            // line 114
            echo "        <div class=\"empty\">
            <p>There is no security token.</p>
        </div>
    ";
        } else {
            // line 118
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SecurityBundle:Collector:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 118,  262 => 114,  260 => 113,  256 => 111,  250 => 108,  246 => 106,  244 => 105,  241 => 104,  235 => 101,  231 => 99,  229 => 98,  224 => 95,  220 => 93,  218 => 92,  213 => 90,  194 => 74,  186 => 69,  182 => 67,  180 => 66,  176 => 64,  173 => 63,  165 => 58,  160 => 57,  157 => 56,  151 => 53,  148 => 52,  145 => 51,  139 => 47,  133 => 43,  130 => 42,  124 => 39,  120 => 37,  117 => 36,  111 => 33,  107 => 31,  105 => 30,  97 => 27,  89 => 22,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  72 => 15,  67 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SecurityBundle:Collector:security.html.twig", "/var/www/materialdesign/htdocs/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views/Collector/security.html.twig");
    }
}
