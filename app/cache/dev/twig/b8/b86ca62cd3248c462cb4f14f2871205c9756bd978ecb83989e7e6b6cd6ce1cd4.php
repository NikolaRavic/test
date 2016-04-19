<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9c1173e8bdf3947899e67a97e2ba5ef989e22a9524f87b19e7813dd4ebb3f621 extends Twig_Template
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
        $__internal_8a89db75cb90912c300d03d63666d87e578437c1b3619d456777be80886a173c = $this->env->getExtension("native_profiler");
        $__internal_8a89db75cb90912c300d03d63666d87e578437c1b3619d456777be80886a173c->enter($__internal_8a89db75cb90912c300d03d63666d87e578437c1b3619d456777be80886a173c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8a89db75cb90912c300d03d63666d87e578437c1b3619d456777be80886a173c->leave($__internal_8a89db75cb90912c300d03d63666d87e578437c1b3619d456777be80886a173c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
