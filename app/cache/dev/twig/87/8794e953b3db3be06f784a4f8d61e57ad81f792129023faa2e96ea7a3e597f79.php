<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1e003381c287da2151299eb0fe87abfa9d4358e99037168557979ba1730ceece extends Twig_Template
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
        $__internal_0e9780ab35d61c04435d5dbec0ddfe85f67d067cb6026965f69abedc7918e5b6 = $this->env->getExtension("native_profiler");
        $__internal_0e9780ab35d61c04435d5dbec0ddfe85f67d067cb6026965f69abedc7918e5b6->enter($__internal_0e9780ab35d61c04435d5dbec0ddfe85f67d067cb6026965f69abedc7918e5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0e9780ab35d61c04435d5dbec0ddfe85f67d067cb6026965f69abedc7918e5b6->leave($__internal_0e9780ab35d61c04435d5dbec0ddfe85f67d067cb6026965f69abedc7918e5b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
