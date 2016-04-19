<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_baefa804f2fd011f9ede34624b45360b206601d5287e8c91fffbd27e6545f20b extends Twig_Template
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
        $__internal_8cc7e9ec18a95f9127c482e08bfc4265226aff5d98c9196189ca1a88717d51c5 = $this->env->getExtension("native_profiler");
        $__internal_8cc7e9ec18a95f9127c482e08bfc4265226aff5d98c9196189ca1a88717d51c5->enter($__internal_8cc7e9ec18a95f9127c482e08bfc4265226aff5d98c9196189ca1a88717d51c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8cc7e9ec18a95f9127c482e08bfc4265226aff5d98c9196189ca1a88717d51c5->leave($__internal_8cc7e9ec18a95f9127c482e08bfc4265226aff5d98c9196189ca1a88717d51c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
