<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cd03b51573da9e89b41f8f11203206379a89e7555c11d5609d392f5dcdbffbeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29d39f825272aba98eb9a188202f43e68d0e0b217a26d132602854fc2871d589 = $this->env->getExtension("native_profiler");
        $__internal_29d39f825272aba98eb9a188202f43e68d0e0b217a26d132602854fc2871d589->enter($__internal_29d39f825272aba98eb9a188202f43e68d0e0b217a26d132602854fc2871d589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_29d39f825272aba98eb9a188202f43e68d0e0b217a26d132602854fc2871d589->leave($__internal_29d39f825272aba98eb9a188202f43e68d0e0b217a26d132602854fc2871d589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
