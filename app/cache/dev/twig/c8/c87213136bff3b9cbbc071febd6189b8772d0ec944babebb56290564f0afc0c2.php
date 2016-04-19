<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5dacbb1898b399a45c3438a17d98f9430915f391064b09c365ee1104b19c808b extends Twig_Template
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
        $__internal_abcad0dfcfdb2996d2dd4ff8de13102c35f74ce332e65aea30cc17fbeef46f16 = $this->env->getExtension("native_profiler");
        $__internal_abcad0dfcfdb2996d2dd4ff8de13102c35f74ce332e65aea30cc17fbeef46f16->enter($__internal_abcad0dfcfdb2996d2dd4ff8de13102c35f74ce332e65aea30cc17fbeef46f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_abcad0dfcfdb2996d2dd4ff8de13102c35f74ce332e65aea30cc17fbeef46f16->leave($__internal_abcad0dfcfdb2996d2dd4ff8de13102c35f74ce332e65aea30cc17fbeef46f16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
