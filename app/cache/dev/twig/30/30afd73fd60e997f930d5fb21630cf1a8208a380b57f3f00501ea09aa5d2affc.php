<?php

/* lucky/number.html.twig */
class __TwigTemplate_f697b0933f5590490e2ccfe73a15951f35dbcdb8c9bc63d2617bdad5c50d28f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f611debf8ff670c1c8b5cc7efd827ae90be62fd98b8594fb78a698160433b1e5 = $this->env->getExtension("native_profiler");
        $__internal_f611debf8ff670c1c8b5cc7efd827ae90be62fd98b8594fb78a698160433b1e5->enter($__internal_f611debf8ff670c1c8b5cc7efd827ae90be62fd98b8594fb78a698160433b1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f611debf8ff670c1c8b5cc7efd827ae90be62fd98b8594fb78a698160433b1e5->leave($__internal_f611debf8ff670c1c8b5cc7efd827ae90be62fd98b8594fb78a698160433b1e5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6b805ee3c1f4ba79e47b80370508fc2b32908da5856b1f0001e011c436e387b = $this->env->getExtension("native_profiler");
        $__internal_c6b805ee3c1f4ba79e47b80370508fc2b32908da5856b1f0001e011c436e387b->enter($__internal_c6b805ee3c1f4ba79e47b80370508fc2b32908da5856b1f0001e011c436e387b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
    <div>This is div!</div>

";
        
        $__internal_c6b805ee3c1f4ba79e47b80370508fc2b32908da5856b1f0001e011c436e387b->leave($__internal_c6b805ee3c1f4ba79e47b80370508fc2b32908da5856b1f0001e011c436e387b_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/*     <div>This is div!</div>*/
/* */
/* {% endblock %}*/
