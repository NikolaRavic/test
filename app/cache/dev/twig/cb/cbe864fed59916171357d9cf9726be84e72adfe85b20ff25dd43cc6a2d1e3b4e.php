<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_15b1ff275a358d92f5976f94e24dd043a198597140946e94ac7f56b5da686e81 extends Twig_Template
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
        $__internal_6bc24f94866b8e18a39f92acb1aec96c00922cc761330470774c379c66914e35 = $this->env->getExtension("native_profiler");
        $__internal_6bc24f94866b8e18a39f92acb1aec96c00922cc761330470774c379c66914e35->enter($__internal_6bc24f94866b8e18a39f92acb1aec96c00922cc761330470774c379c66914e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6bc24f94866b8e18a39f92acb1aec96c00922cc761330470774c379c66914e35->leave($__internal_6bc24f94866b8e18a39f92acb1aec96c00922cc761330470774c379c66914e35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
