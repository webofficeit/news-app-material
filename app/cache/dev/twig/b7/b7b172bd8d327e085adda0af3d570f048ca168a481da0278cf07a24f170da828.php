<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_d33d8a065391de4946e3db2bf7ec214badf4fbe34a710679479ef69638823c38 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable) : ?>
    <?php if (\$autoload) : ?>
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
        </script>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
        <?php if (\$jquery) : ?>
            <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
        <?php endif; ?>
    <?php endif; ?>
    <script type=\"text/javascript\">
        <?php if (\$jquery) : ?>
            \$(function () {
        <?php endif; ?>

        <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

        <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
            <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
        <?php endforeach; ?>

        <?php foreach (\$styles as \$styleName => \$style): ?>
            <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
        <?php endforeach; ?>

        <?php foreach (\$templates as \$templateName => \$template): ?>
            <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
        <?php endforeach; ?>

        <?php echo \$view['ivory_ckeditor']->renderWidget(\$id, \$config, array('auto_inline' => \$auto_inline, 'inline' => \$inline, 'input_sync' => \$input_sync)); ?>

        <?php if (\$jquery) : ?>
            });
        <?php endif; ?>
    </script>
<?php endif; ?>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable) : ?>
    <?php if (\$autoload) : ?>
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
        </script>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
        <?php if (\$jquery) : ?>
            <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
        <?php endif; ?>
    <?php endif; ?>
    <script type=\"text/javascript\">
        <?php if (\$jquery) : ?>
            \$(function () {
        <?php endif; ?>

        <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

        <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
            <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
        <?php endforeach; ?>

        <?php foreach (\$styles as \$styleName => \$style): ?>
            <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
        <?php endforeach; ?>

        <?php foreach (\$templates as \$templateName => \$template): ?>
            <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
        <?php endforeach; ?>

        <?php echo \$view['ivory_ckeditor']->renderWidget(\$id, \$config, array('auto_inline' => \$auto_inline, 'inline' => \$inline, 'input_sync' => \$input_sync)); ?>

        <?php if (\$jquery) : ?>
            });
        <?php endif; ?>
    </script>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/var/www/materialdesign/htdocs/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
