<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_961ff53b127edcb3ba0c2438a534058e03d2a6ee22d3796d60dbbdbbd5a7f84a extends Twig_Template
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
        $__internal_6b0db4b7ed6d6bf368e5f1f17820057bdd62a5ac0d041a902cf6b490ea93516c = $this->env->getExtension("native_profiler");
        $__internal_6b0db4b7ed6d6bf368e5f1f17820057bdd62a5ac0d041a902cf6b490ea93516c->enter($__internal_6b0db4b7ed6d6bf368e5f1f17820057bdd62a5ac0d041a902cf6b490ea93516c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6b0db4b7ed6d6bf368e5f1f17820057bdd62a5ac0d041a902cf6b490ea93516c->leave($__internal_6b0db4b7ed6d6bf368e5f1f17820057bdd62a5ac0d041a902cf6b490ea93516c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
