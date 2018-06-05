<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_c99e7e50456244c824ab064a8869a9ab500fa1d004d0e7a965df2907cab0e47a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () { throw new Twig_Error_Runtime('Variable "enable" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        ";
            if ((isset($context["autoload"]) || array_key_exists("autoload", $context) ? $context["autoload"] : (function () { throw new Twig_Error_Runtime('Variable "autoload" does not exist.', 5, $this->source); })())) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderBasePath((isset($context["base_path"]) || array_key_exists("base_path", $context) ? $context["base_path"] : (function () { throw new Twig_Error_Runtime('Variable "base_path" does not exist.', 7, $this->source); })()));
                echo "\";
            </script>
            <script type=\"text/javascript\" src=\"";
                // line 9
                echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderJsPath((isset($context["js_path"]) || array_key_exists("js_path", $context) ? $context["js_path"] : (function () { throw new Twig_Error_Runtime('Variable "js_path" does not exist.', 9, $this->source); })()));
                echo "\"></script>
            ";
                // line 10
                if ((isset($context["jquery"]) || array_key_exists("jquery", $context) ? $context["jquery"] : (function () { throw new Twig_Error_Runtime('Variable "jquery" does not exist.', 10, $this->source); })())) {
                    // line 11
                    echo "                <script type=\"text/javascript\" src=\"";
                    echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderJsPath((isset($context["jquery_path"]) || array_key_exists("jquery_path", $context) ? $context["jquery_path"] : (function () { throw new Twig_Error_Runtime('Variable "jquery_path" does not exist.', 11, $this->source); })()));
                    echo "\"></script>
            ";
                }
                // line 13
                echo "        ";
            }
            // line 14
            echo "        <script type=\"text/javascript\">
            ";
            // line 15
            if ((isset($context["jquery"]) || array_key_exists("jquery", $context) ? $context["jquery"] : (function () { throw new Twig_Error_Runtime('Variable "jquery" does not exist.', 15, $this->source); })())) {
                // line 16
                echo "                \$(function () {
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderDestroy((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 19, $this->source); })()));
            echo "

            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new Twig_Error_Runtime('Variable "plugins" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 22
                echo "                ";
                echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderPlugin($context["plugin_name"], $context["plugin"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 26
                echo "                ";
                echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderStylesSet($context["style_name"], $context["style"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new Twig_Error_Runtime('Variable "templates" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 30
                echo "                ";
                echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderTemplate($context["template_name"], $context["template"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
            ";
            // line 33
            echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderWidget((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 33, $this->source); })()), (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new Twig_Error_Runtime('Variable "config" does not exist.', 33, $this->source); })()), array("auto_inline" => (isset($context["auto_inline"]) || array_key_exists("auto_inline", $context) ? $context["auto_inline"] : (function () { throw new Twig_Error_Runtime('Variable "auto_inline" does not exist.', 33, $this->source); })()), "inline" => (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 33, $this->source); })()), "input_sync" => (isset($context["input_sync"]) || array_key_exists("input_sync", $context) ? $context["input_sync"] : (function () { throw new Twig_Error_Runtime('Variable "input_sync" does not exist.', 33, $this->source); })())));
            echo "

            ";
            // line 35
            if ((isset($context["jquery"]) || array_key_exists("jquery", $context) ? $context["jquery"] : (function () { throw new Twig_Error_Runtime('Variable "jquery" does not exist.', 35, $this->source); })())) {
                // line 36
                echo "                });
            ";
            }
            // line 38
            echo "        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 38,  147 => 36,  145 => 35,  140 => 33,  137 => 32,  128 => 30,  124 => 29,  121 => 28,  112 => 26,  108 => 25,  105 => 24,  96 => 22,  92 => 21,  87 => 19,  84 => 18,  80 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 11,  64 => 10,  60 => 9,  55 => 7,  52 => 6,  49 => 5,  47 => 4,  39 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    {% if enable %}
        {% if autoload %}
            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"{{ ckeditor_base_path(base_path) }}\";
            </script>
            <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(js_path) }}\"></script>
            {% if jquery %}
                <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(jquery_path) }}\"></script>
            {% endif %}
        {% endif %}
        <script type=\"text/javascript\">
            {% if jquery %}
                \$(function () {
            {% endif %}

            {{ ckeditor_destroy(id) }}

            {% for plugin_name, plugin in plugins %}
                {{ ckeditor_plugin(plugin_name, plugin) }}
            {% endfor %}

            {% for style_name, style in styles %}
                {{ ckeditor_styles_set(style_name, style) }}
            {% endfor %}

            {% for template_name, template in templates %}
                {{ ckeditor_template(template_name, template) }}
            {% endfor %}

            {{ ckeditor_widget(id, config, {auto_inline: auto_inline, inline: inline, input_sync: input_sync}) }}

            {% if jquery %}
                });
            {% endif %}
        </script>
    {% endif %}
{% endblock %}
", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "/var/www/news-app-material/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
