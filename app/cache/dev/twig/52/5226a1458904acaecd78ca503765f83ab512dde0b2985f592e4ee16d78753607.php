<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0a511e93af54c4ff45f3503b3b894dbcb5fe2e12c0145dcf813ca7701c6ebbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61bee73a38576db42b73dc789032aba35e5f93eeca9a8786f4ee0fc73f918017 = $this->env->getExtension("native_profiler");
        $__internal_61bee73a38576db42b73dc789032aba35e5f93eeca9a8786f4ee0fc73f918017->enter($__internal_61bee73a38576db42b73dc789032aba35e5f93eeca9a8786f4ee0fc73f918017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_61bee73a38576db42b73dc789032aba35e5f93eeca9a8786f4ee0fc73f918017->leave($__internal_61bee73a38576db42b73dc789032aba35e5f93eeca9a8786f4ee0fc73f918017_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b7c6e91c69049896722da53faf369d37097b0e49c1c5cdc7b33af13a7e7a9e0 = $this->env->getExtension("native_profiler");
        $__internal_2b7c6e91c69049896722da53faf369d37097b0e49c1c5cdc7b33af13a7e7a9e0->enter($__internal_2b7c6e91c69049896722da53faf369d37097b0e49c1c5cdc7b33af13a7e7a9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2b7c6e91c69049896722da53faf369d37097b0e49c1c5cdc7b33af13a7e7a9e0->leave($__internal_2b7c6e91c69049896722da53faf369d37097b0e49c1c5cdc7b33af13a7e7a9e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
