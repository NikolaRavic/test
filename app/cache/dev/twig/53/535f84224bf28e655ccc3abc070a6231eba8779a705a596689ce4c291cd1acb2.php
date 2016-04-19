<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_680144ec6d0d0b17389b4a0b04b7b41e47660983a4349960c6b30c0c81019194 extends Twig_Template
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
        $__internal_a3ce066cb328b7d28cfd9d810aab0b33c0ed36412bdd61bd82448d76233cd408 = $this->env->getExtension("native_profiler");
        $__internal_a3ce066cb328b7d28cfd9d810aab0b33c0ed36412bdd61bd82448d76233cd408->enter($__internal_a3ce066cb328b7d28cfd9d810aab0b33c0ed36412bdd61bd82448d76233cd408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a3ce066cb328b7d28cfd9d810aab0b33c0ed36412bdd61bd82448d76233cd408->leave($__internal_a3ce066cb328b7d28cfd9d810aab0b33c0ed36412bdd61bd82448d76233cd408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
