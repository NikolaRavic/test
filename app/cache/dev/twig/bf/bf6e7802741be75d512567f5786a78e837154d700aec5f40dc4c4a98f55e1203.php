<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_392d30d53700e5a94bca2f18648eeb98caf5dda6592698e0ec366cac13650512 extends Twig_Template
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
        $__internal_77a0c169c1127769334011a463a6ff9f8ae42a2946faac20120ab71566efdcdb = $this->env->getExtension("native_profiler");
        $__internal_77a0c169c1127769334011a463a6ff9f8ae42a2946faac20120ab71566efdcdb->enter($__internal_77a0c169c1127769334011a463a6ff9f8ae42a2946faac20120ab71566efdcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_77a0c169c1127769334011a463a6ff9f8ae42a2946faac20120ab71566efdcdb->leave($__internal_77a0c169c1127769334011a463a6ff9f8ae42a2946faac20120ab71566efdcdb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
