<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_fcdcc9537888c76157a9ae465af1f23c085bf6b7e59340deaedb2e00e6c07a16 extends Twig_Template
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
        $__internal_d94dec37cb212eedef7757059545f54a83f01075054fd5886f1c8033147c119f = $this->env->getExtension("native_profiler");
        $__internal_d94dec37cb212eedef7757059545f54a83f01075054fd5886f1c8033147c119f->enter($__internal_d94dec37cb212eedef7757059545f54a83f01075054fd5886f1c8033147c119f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d94dec37cb212eedef7757059545f54a83f01075054fd5886f1c8033147c119f->leave($__internal_d94dec37cb212eedef7757059545f54a83f01075054fd5886f1c8033147c119f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
