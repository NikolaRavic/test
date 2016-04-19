<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6c4198200b91675fba7a104c9a6cbce30b1d2087ea633f89367463912d5bddb6 extends Twig_Template
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
        $__internal_a82392e23f682dcbdb980db12dfe0ca21c2bc6be82fa6b0fedd136c70a3bfa88 = $this->env->getExtension("native_profiler");
        $__internal_a82392e23f682dcbdb980db12dfe0ca21c2bc6be82fa6b0fedd136c70a3bfa88->enter($__internal_a82392e23f682dcbdb980db12dfe0ca21c2bc6be82fa6b0fedd136c70a3bfa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a82392e23f682dcbdb980db12dfe0ca21c2bc6be82fa6b0fedd136c70a3bfa88->leave($__internal_a82392e23f682dcbdb980db12dfe0ca21c2bc6be82fa6b0fedd136c70a3bfa88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
