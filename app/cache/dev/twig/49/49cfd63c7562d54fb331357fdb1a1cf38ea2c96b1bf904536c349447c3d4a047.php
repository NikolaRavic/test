<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8c2aa62ec1004397a6c982c00d4ef0775071e1e9084feb9ec9e4755dd86fe836 extends Twig_Template
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
        $__internal_479838861a466286b160825465f9ad8468914d42702843f332335fadde1a0dd4 = $this->env->getExtension("native_profiler");
        $__internal_479838861a466286b160825465f9ad8468914d42702843f332335fadde1a0dd4->enter($__internal_479838861a466286b160825465f9ad8468914d42702843f332335fadde1a0dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_479838861a466286b160825465f9ad8468914d42702843f332335fadde1a0dd4->leave($__internal_479838861a466286b160825465f9ad8468914d42702843f332335fadde1a0dd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
