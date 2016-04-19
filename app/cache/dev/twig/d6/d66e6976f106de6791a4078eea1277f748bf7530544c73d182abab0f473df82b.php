<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d870a5ae564713b98ace2fe720f118986f5a7a337493600d94230f4a8413bd77 extends Twig_Template
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
        $__internal_4bf06aec5e3aff2b2dba6751f520585703edeb9d06b7f6b4de0e045128402bf6 = $this->env->getExtension("native_profiler");
        $__internal_4bf06aec5e3aff2b2dba6751f520585703edeb9d06b7f6b4de0e045128402bf6->enter($__internal_4bf06aec5e3aff2b2dba6751f520585703edeb9d06b7f6b4de0e045128402bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4bf06aec5e3aff2b2dba6751f520585703edeb9d06b7f6b4de0e045128402bf6->leave($__internal_4bf06aec5e3aff2b2dba6751f520585703edeb9d06b7f6b4de0e045128402bf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
