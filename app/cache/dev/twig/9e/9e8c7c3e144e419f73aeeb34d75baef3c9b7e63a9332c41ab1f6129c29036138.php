<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a908271f79cb74b904ba9475bed7291a4148d7e612173a9d998595ae2c23f646 extends Twig_Template
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
        $__internal_7e9d65d7eef3f9a89ceb53784d55b82f2287c427717fc137a2afa834e9fd119c = $this->env->getExtension("native_profiler");
        $__internal_7e9d65d7eef3f9a89ceb53784d55b82f2287c427717fc137a2afa834e9fd119c->enter($__internal_7e9d65d7eef3f9a89ceb53784d55b82f2287c427717fc137a2afa834e9fd119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7e9d65d7eef3f9a89ceb53784d55b82f2287c427717fc137a2afa834e9fd119c->leave($__internal_7e9d65d7eef3f9a89ceb53784d55b82f2287c427717fc137a2afa834e9fd119c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
