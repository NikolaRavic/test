<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8652a3f132584691eb80255abb424585666f8b95d6e1e70a38824d869ebae464 extends Twig_Template
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
        $__internal_ff5258c33c732a32bdf674bfb6a8cee48009464f3070d8bfa2d5404d6ebfdc65 = $this->env->getExtension("native_profiler");
        $__internal_ff5258c33c732a32bdf674bfb6a8cee48009464f3070d8bfa2d5404d6ebfdc65->enter($__internal_ff5258c33c732a32bdf674bfb6a8cee48009464f3070d8bfa2d5404d6ebfdc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ff5258c33c732a32bdf674bfb6a8cee48009464f3070d8bfa2d5404d6ebfdc65->leave($__internal_ff5258c33c732a32bdf674bfb6a8cee48009464f3070d8bfa2d5404d6ebfdc65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
