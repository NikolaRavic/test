<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a73df8b6fb52e08a881780164eb04a549e907337ef19c391b19bcd480f57a207 extends Twig_Template
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
        $__internal_d75bb543571fd18cd5e0d0f39182357b7bda9746e4858ff94816d24e93d48471 = $this->env->getExtension("native_profiler");
        $__internal_d75bb543571fd18cd5e0d0f39182357b7bda9746e4858ff94816d24e93d48471->enter($__internal_d75bb543571fd18cd5e0d0f39182357b7bda9746e4858ff94816d24e93d48471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d75bb543571fd18cd5e0d0f39182357b7bda9746e4858ff94816d24e93d48471->leave($__internal_d75bb543571fd18cd5e0d0f39182357b7bda9746e4858ff94816d24e93d48471_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
