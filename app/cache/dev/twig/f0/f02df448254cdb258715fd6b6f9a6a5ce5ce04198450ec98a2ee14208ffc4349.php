<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9baddae2f7d455252b477e26aff3875ad7cde6896983cfc13e3a2d93b6a10b64 extends Twig_Template
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
        $__internal_76335afcbb32a1c24288b77c814beac8f037519577289497d580467e5bf6d2a2 = $this->env->getExtension("native_profiler");
        $__internal_76335afcbb32a1c24288b77c814beac8f037519577289497d580467e5bf6d2a2->enter($__internal_76335afcbb32a1c24288b77c814beac8f037519577289497d580467e5bf6d2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_76335afcbb32a1c24288b77c814beac8f037519577289497d580467e5bf6d2a2->leave($__internal_76335afcbb32a1c24288b77c814beac8f037519577289497d580467e5bf6d2a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
