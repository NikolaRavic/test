<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_72fa5c66fb2ceebab7fc979f310de5566ce4fdf7c1a2d8fb54c867f8faea06ca extends Twig_Template
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
        $__internal_df5d21263a14d70f00ed7bb00e74372492d79c3538f33582e0b8225c69930d02 = $this->env->getExtension("native_profiler");
        $__internal_df5d21263a14d70f00ed7bb00e74372492d79c3538f33582e0b8225c69930d02->enter($__internal_df5d21263a14d70f00ed7bb00e74372492d79c3538f33582e0b8225c69930d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_df5d21263a14d70f00ed7bb00e74372492d79c3538f33582e0b8225c69930d02->leave($__internal_df5d21263a14d70f00ed7bb00e74372492d79c3538f33582e0b8225c69930d02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
