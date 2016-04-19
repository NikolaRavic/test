<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_40240eb532bc08d4e29f988c7f314ec056c5edbaff2813dbd6dd539cbc87c402 extends Twig_Template
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
        $__internal_aeb2e3f0d11b14476673b0f1825af9005b0a54baa72157f5414b64ef115eb27a = $this->env->getExtension("native_profiler");
        $__internal_aeb2e3f0d11b14476673b0f1825af9005b0a54baa72157f5414b64ef115eb27a->enter($__internal_aeb2e3f0d11b14476673b0f1825af9005b0a54baa72157f5414b64ef115eb27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_aeb2e3f0d11b14476673b0f1825af9005b0a54baa72157f5414b64ef115eb27a->leave($__internal_aeb2e3f0d11b14476673b0f1825af9005b0a54baa72157f5414b64ef115eb27a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
