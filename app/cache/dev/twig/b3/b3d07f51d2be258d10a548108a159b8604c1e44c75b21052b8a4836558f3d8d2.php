<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d901af6bb5cb41f7e07702e250343e239bc917ebcbd7d187987bf7a09b24748e extends Twig_Template
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
        $__internal_9d9a5726efdbfc1a4b3e52926b703ab87f7f6e7f72cb0faa22b09c80bf7e8c60 = $this->env->getExtension("native_profiler");
        $__internal_9d9a5726efdbfc1a4b3e52926b703ab87f7f6e7f72cb0faa22b09c80bf7e8c60->enter($__internal_9d9a5726efdbfc1a4b3e52926b703ab87f7f6e7f72cb0faa22b09c80bf7e8c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9d9a5726efdbfc1a4b3e52926b703ab87f7f6e7f72cb0faa22b09c80bf7e8c60->leave($__internal_9d9a5726efdbfc1a4b3e52926b703ab87f7f6e7f72cb0faa22b09c80bf7e8c60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
