<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_80c5dbf90769da692dd304f7c516b3cf42630cad9ccffff21f87dd25d188f9ec extends Twig_Template
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
        $__internal_db3e99831403436cb999e02248329067c20cdfc482d5d768376876488ef3a6f2 = $this->env->getExtension("native_profiler");
        $__internal_db3e99831403436cb999e02248329067c20cdfc482d5d768376876488ef3a6f2->enter($__internal_db3e99831403436cb999e02248329067c20cdfc482d5d768376876488ef3a6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_db3e99831403436cb999e02248329067c20cdfc482d5d768376876488ef3a6f2->leave($__internal_db3e99831403436cb999e02248329067c20cdfc482d5d768376876488ef3a6f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
