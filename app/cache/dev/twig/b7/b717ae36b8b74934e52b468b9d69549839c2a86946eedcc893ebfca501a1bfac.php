<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b4ed0a95be149119fc3ae9331fc4309cb65462f1d07ce41df7321e335e43f0fd extends Twig_Template
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
        $__internal_8eb870db7ee5fe2e923d6f79f635eb8b7b7198e5e22f609e00927c310b46e718 = $this->env->getExtension("native_profiler");
        $__internal_8eb870db7ee5fe2e923d6f79f635eb8b7b7198e5e22f609e00927c310b46e718->enter($__internal_8eb870db7ee5fe2e923d6f79f635eb8b7b7198e5e22f609e00927c310b46e718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8eb870db7ee5fe2e923d6f79f635eb8b7b7198e5e22f609e00927c310b46e718->leave($__internal_8eb870db7ee5fe2e923d6f79f635eb8b7b7198e5e22f609e00927c310b46e718_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
