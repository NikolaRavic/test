<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_08e7a2478f1fa573a83f6a5080e1f3f05174402fb116443bfdad022f57960b7f extends Twig_Template
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
        $__internal_52dfbafb68d2ff0a16be99564eabf7c58bea8b051cf6b861e151243396064224 = $this->env->getExtension("native_profiler");
        $__internal_52dfbafb68d2ff0a16be99564eabf7c58bea8b051cf6b861e151243396064224->enter($__internal_52dfbafb68d2ff0a16be99564eabf7c58bea8b051cf6b861e151243396064224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_52dfbafb68d2ff0a16be99564eabf7c58bea8b051cf6b861e151243396064224->leave($__internal_52dfbafb68d2ff0a16be99564eabf7c58bea8b051cf6b861e151243396064224_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
