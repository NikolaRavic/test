<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2fea7036cd192901549c1dffe562d90026f3c931fcf4541062dc6ebfe637e323 extends Twig_Template
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
        $__internal_68a2f66127f4bd1b6ae03ab7b22d10af9ada4fe0979de01c878acef0ef894671 = $this->env->getExtension("native_profiler");
        $__internal_68a2f66127f4bd1b6ae03ab7b22d10af9ada4fe0979de01c878acef0ef894671->enter($__internal_68a2f66127f4bd1b6ae03ab7b22d10af9ada4fe0979de01c878acef0ef894671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_68a2f66127f4bd1b6ae03ab7b22d10af9ada4fe0979de01c878acef0ef894671->leave($__internal_68a2f66127f4bd1b6ae03ab7b22d10af9ada4fe0979de01c878acef0ef894671_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
