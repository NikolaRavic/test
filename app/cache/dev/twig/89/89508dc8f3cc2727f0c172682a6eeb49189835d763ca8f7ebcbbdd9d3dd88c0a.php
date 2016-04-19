<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_01ccda0394a57e516b491b20657fc7b041b00277c4e6fa87490b2e5350fa6950 extends Twig_Template
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
        $__internal_b4f65924c5579d60eb9861c97c64b6f34b270df6ad24c3b3a16e4e757611237b = $this->env->getExtension("native_profiler");
        $__internal_b4f65924c5579d60eb9861c97c64b6f34b270df6ad24c3b3a16e4e757611237b->enter($__internal_b4f65924c5579d60eb9861c97c64b6f34b270df6ad24c3b3a16e4e757611237b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b4f65924c5579d60eb9861c97c64b6f34b270df6ad24c3b3a16e4e757611237b->leave($__internal_b4f65924c5579d60eb9861c97c64b6f34b270df6ad24c3b3a16e4e757611237b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
