<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_acb35eeeebb9f46df31cbf2044ac1d2be8176d73f2d2527475ac7abd6ce13ef4 extends Twig_Template
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
        $__internal_e06f3c3225a83bcae3fc706fc516dc3b6d687215812069c06d4e6541f0f24f59 = $this->env->getExtension("native_profiler");
        $__internal_e06f3c3225a83bcae3fc706fc516dc3b6d687215812069c06d4e6541f0f24f59->enter($__internal_e06f3c3225a83bcae3fc706fc516dc3b6d687215812069c06d4e6541f0f24f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e06f3c3225a83bcae3fc706fc516dc3b6d687215812069c06d4e6541f0f24f59->leave($__internal_e06f3c3225a83bcae3fc706fc516dc3b6d687215812069c06d4e6541f0f24f59_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
