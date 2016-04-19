<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_06203c7d5df2b068941fecbccadc6afae5923267e53ca7377141e69ff0f6e2d7 extends Twig_Template
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
        $__internal_968f8b9360441ea560feb4b19e5b6be1b552e3662949c28d8cd7313929a1d90d = $this->env->getExtension("native_profiler");
        $__internal_968f8b9360441ea560feb4b19e5b6be1b552e3662949c28d8cd7313929a1d90d->enter($__internal_968f8b9360441ea560feb4b19e5b6be1b552e3662949c28d8cd7313929a1d90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_968f8b9360441ea560feb4b19e5b6be1b552e3662949c28d8cd7313929a1d90d->leave($__internal_968f8b9360441ea560feb4b19e5b6be1b552e3662949c28d8cd7313929a1d90d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
