<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_41463a1e035e09343f4653fcfec07f5b65a67479a94bf3a850d0d15aebca879b extends Twig_Template
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
        $__internal_ab1b2305dd5f7c1aee86b25690bf8930a3751b36ef76523c73d2c81aefeca448 = $this->env->getExtension("native_profiler");
        $__internal_ab1b2305dd5f7c1aee86b25690bf8930a3751b36ef76523c73d2c81aefeca448->enter($__internal_ab1b2305dd5f7c1aee86b25690bf8930a3751b36ef76523c73d2c81aefeca448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ab1b2305dd5f7c1aee86b25690bf8930a3751b36ef76523c73d2c81aefeca448->leave($__internal_ab1b2305dd5f7c1aee86b25690bf8930a3751b36ef76523c73d2c81aefeca448_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
