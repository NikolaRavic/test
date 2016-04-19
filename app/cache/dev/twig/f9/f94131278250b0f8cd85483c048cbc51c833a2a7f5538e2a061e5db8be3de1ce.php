<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5bb0fce05a353738754546b04857f776d245e8a21dfd57fa7ebe3d5ace4a273e extends Twig_Template
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
        $__internal_6e55412000d7d80a62c20b59b528e7706e6faad406c65b02a59a467a18d6aa67 = $this->env->getExtension("native_profiler");
        $__internal_6e55412000d7d80a62c20b59b528e7706e6faad406c65b02a59a467a18d6aa67->enter($__internal_6e55412000d7d80a62c20b59b528e7706e6faad406c65b02a59a467a18d6aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6e55412000d7d80a62c20b59b528e7706e6faad406c65b02a59a467a18d6aa67->leave($__internal_6e55412000d7d80a62c20b59b528e7706e6faad406c65b02a59a467a18d6aa67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
