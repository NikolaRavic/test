<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_05838751da9cbd392b89dacf6d4851dfe4dc931e9752fe8f92d7add082c4f4a0 extends Twig_Template
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
        $__internal_fe58e5123f4fdb40a2c292ab3ef8999922b447992e0d3381260ceecbf72678fa = $this->env->getExtension("native_profiler");
        $__internal_fe58e5123f4fdb40a2c292ab3ef8999922b447992e0d3381260ceecbf72678fa->enter($__internal_fe58e5123f4fdb40a2c292ab3ef8999922b447992e0d3381260ceecbf72678fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fe58e5123f4fdb40a2c292ab3ef8999922b447992e0d3381260ceecbf72678fa->leave($__internal_fe58e5123f4fdb40a2c292ab3ef8999922b447992e0d3381260ceecbf72678fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
