<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9613b28f43009d4334ddc9e8aef83f2050cba9e1ea062b21f24ca9f76a8569d3 extends Twig_Template
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
        $__internal_1f4825f7c87fcbf450734883f82b01f0f6336b062692e42be55cd5bcbe0ad9d2 = $this->env->getExtension("native_profiler");
        $__internal_1f4825f7c87fcbf450734883f82b01f0f6336b062692e42be55cd5bcbe0ad9d2->enter($__internal_1f4825f7c87fcbf450734883f82b01f0f6336b062692e42be55cd5bcbe0ad9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1f4825f7c87fcbf450734883f82b01f0f6336b062692e42be55cd5bcbe0ad9d2->leave($__internal_1f4825f7c87fcbf450734883f82b01f0f6336b062692e42be55cd5bcbe0ad9d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
