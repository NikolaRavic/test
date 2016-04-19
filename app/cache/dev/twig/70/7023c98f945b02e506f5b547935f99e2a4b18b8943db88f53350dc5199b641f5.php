<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_51595893defe47b5472f8f347181ee2df9b131c4e9338f33942440efb3ca8c9f extends Twig_Template
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
        $__internal_7354d95e8366f0c041dbca9f0c8b9882bb158d87c575bb4a4851f7d05bb9ce5f = $this->env->getExtension("native_profiler");
        $__internal_7354d95e8366f0c041dbca9f0c8b9882bb158d87c575bb4a4851f7d05bb9ce5f->enter($__internal_7354d95e8366f0c041dbca9f0c8b9882bb158d87c575bb4a4851f7d05bb9ce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7354d95e8366f0c041dbca9f0c8b9882bb158d87c575bb4a4851f7d05bb9ce5f->leave($__internal_7354d95e8366f0c041dbca9f0c8b9882bb158d87c575bb4a4851f7d05bb9ce5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
