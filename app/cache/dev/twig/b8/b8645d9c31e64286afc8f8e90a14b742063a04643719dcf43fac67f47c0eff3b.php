<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7c8f4cc46b2a71cea46165421d83fb6855084ad623b577596cd97633b52da98e extends Twig_Template
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
        $__internal_cbd41e51919ff30f6ba4ca764ad6551a641cfd3dbf9c7032e7c3bec3a44165b1 = $this->env->getExtension("native_profiler");
        $__internal_cbd41e51919ff30f6ba4ca764ad6551a641cfd3dbf9c7032e7c3bec3a44165b1->enter($__internal_cbd41e51919ff30f6ba4ca764ad6551a641cfd3dbf9c7032e7c3bec3a44165b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cbd41e51919ff30f6ba4ca764ad6551a641cfd3dbf9c7032e7c3bec3a44165b1->leave($__internal_cbd41e51919ff30f6ba4ca764ad6551a641cfd3dbf9c7032e7c3bec3a44165b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
