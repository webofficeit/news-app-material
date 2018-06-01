<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_1afcab9278076f3159f63cc45eb470fd56064a95c03ba03eee891ebcb6fdd61d extends Twig_Template
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
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if (($context["enable"] ?? null)) {
            // line 5
            echo "        ";
            if (($context["autoload"] ?? null)) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderBasePath(($context["base_path"] ?? null));
                echo "\";
            </script>
            <script type=\"text/javascript\" src=\"";
                // line 9
                echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderJsPath(($context["js_path"] ?? null));
                echo "\"></script>
            ";
                // line 10
                if (($context["jquery"] ?? null)) {
                    // line 11
                    echo "                <script type=\"text/javascript\" src=\"";
                    echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderJsPath(($context["jquery_path"] ?? null));
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
            if (($context["jquery"] ?? null)) {
                // line 16
                echo "                \$(function () {
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderDestroy(($context["id"] ?? null));
            echo "

            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
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
            echo $this->extensions['Ivory\CKEditorBundle\Twig\CKEditorExtension']->renderWidget(($context["id"] ?? null), ($context["config"] ?? null), array("auto_inline" => ($context["auto_inline"] ?? null), "inline" => ($context["inline"] ?? null), "input_sync" => ($context["input_sync"] ?? null)));
            echo "

            ";
            // line 35
            if (($context["jquery"] ?? null)) {
                // line 36
                echo "                });
            ";
            }
            // line 38
            echo "        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  138 => 36,  136 => 35,  131 => 33,  128 => 32,  119 => 30,  115 => 29,  112 => 28,  103 => 26,  99 => 25,  96 => 24,  87 => 22,  83 => 21,  78 => 19,  75 => 18,  71 => 16,  69 => 15,  66 => 14,  63 => 13,  57 => 11,  55 => 10,  51 => 9,  46 => 7,  43 => 6,  40 => 5,  38 => 4,  30 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "/var/www/materialdesign/htdocs/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
