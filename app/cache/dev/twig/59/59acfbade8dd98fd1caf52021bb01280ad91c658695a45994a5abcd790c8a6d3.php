<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_52a0a38fe0f4dd8119bea9a88a24d1fa48d180a522ca3c82538d8da2911ee653 extends Twig_Template
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
        $__internal_383efb58d45aa81f5c225dd1406cd8216d082a4134cd84d10e7e47d4b3fdb75c = $this->env->getExtension("native_profiler");
        $__internal_383efb58d45aa81f5c225dd1406cd8216d082a4134cd84d10e7e47d4b3fdb75c->enter($__internal_383efb58d45aa81f5c225dd1406cd8216d082a4134cd84d10e7e47d4b3fdb75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_383efb58d45aa81f5c225dd1406cd8216d082a4134cd84d10e7e47d4b3fdb75c->leave($__internal_383efb58d45aa81f5c225dd1406cd8216d082a4134cd84d10e7e47d4b3fdb75c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
