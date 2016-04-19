<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_04e7b004684001d882157f3d59bb54739c2d702bb4e39aae6f05a52d66eb4b71 extends Twig_Template
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
        $__internal_a630c0693212f290dbf75fbf5708f986c10e92f9d8e0f0996e04bd75e8f2728a = $this->env->getExtension("native_profiler");
        $__internal_a630c0693212f290dbf75fbf5708f986c10e92f9d8e0f0996e04bd75e8f2728a->enter($__internal_a630c0693212f290dbf75fbf5708f986c10e92f9d8e0f0996e04bd75e8f2728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_a630c0693212f290dbf75fbf5708f986c10e92f9d8e0f0996e04bd75e8f2728a->leave($__internal_a630c0693212f290dbf75fbf5708f986c10e92f9d8e0f0996e04bd75e8f2728a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
