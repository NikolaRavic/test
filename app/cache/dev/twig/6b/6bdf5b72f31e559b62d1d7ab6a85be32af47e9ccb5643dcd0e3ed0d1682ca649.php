<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0253a310ef7c6663fe9dc2bd6d5bff89665bea136792fb6e1cd294ec5f8645d7 extends Twig_Template
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
        $__internal_4227ffeed15c21153c80975331a98e60c02c5aeeb9ec1ed4816bc358976d85e5 = $this->env->getExtension("native_profiler");
        $__internal_4227ffeed15c21153c80975331a98e60c02c5aeeb9ec1ed4816bc358976d85e5->enter($__internal_4227ffeed15c21153c80975331a98e60c02c5aeeb9ec1ed4816bc358976d85e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4227ffeed15c21153c80975331a98e60c02c5aeeb9ec1ed4816bc358976d85e5->leave($__internal_4227ffeed15c21153c80975331a98e60c02c5aeeb9ec1ed4816bc358976d85e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
