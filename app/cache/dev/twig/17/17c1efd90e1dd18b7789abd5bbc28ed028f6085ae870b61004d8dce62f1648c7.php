<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_eac08a249979b67de6e0214e39e1bdf30b02e8da47f59d114e28cf0913547472 extends Twig_Template
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
        $__internal_bdc20aa4e0cbb31e4305c994cbb35ecca9bc1e927b82ca734ce2cc639f86e21a = $this->env->getExtension("native_profiler");
        $__internal_bdc20aa4e0cbb31e4305c994cbb35ecca9bc1e927b82ca734ce2cc639f86e21a->enter($__internal_bdc20aa4e0cbb31e4305c994cbb35ecca9bc1e927b82ca734ce2cc639f86e21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_bdc20aa4e0cbb31e4305c994cbb35ecca9bc1e927b82ca734ce2cc639f86e21a->leave($__internal_bdc20aa4e0cbb31e4305c994cbb35ecca9bc1e927b82ca734ce2cc639f86e21a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
