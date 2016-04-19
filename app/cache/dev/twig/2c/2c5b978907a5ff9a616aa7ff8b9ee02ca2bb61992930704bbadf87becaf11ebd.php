<?php

/* Lucky/number.html.twig */
class __TwigTemplate_c0da68e75c0f283f95e4682e5ce95dcab3ec547a7aacaa6680b5108300c2616b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Lucky/number.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3fa33097e5639b54f3336bad01577a72b12b1cacd2fab9cdc1fdd293d05f1f6 = $this->env->getExtension("native_profiler");
        $__internal_a3fa33097e5639b54f3336bad01577a72b12b1cacd2fab9cdc1fdd293d05f1f6->enter($__internal_a3fa33097e5639b54f3336bad01577a72b12b1cacd2fab9cdc1fdd293d05f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3fa33097e5639b54f3336bad01577a72b12b1cacd2fab9cdc1fdd293d05f1f6->leave($__internal_a3fa33097e5639b54f3336bad01577a72b12b1cacd2fab9cdc1fdd293d05f1f6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d49f060a1c39b8eda935dfeb8c52d1c7c346ceb0f93060ebc44942bd08e02c07 = $this->env->getExtension("native_profiler");
        $__internal_d49f060a1c39b8eda935dfeb8c52d1c7c346ceb0f93060ebc44942bd08e02c07->enter($__internal_d49f060a1c39b8eda935dfeb8c52d1c7c346ceb0f93060ebc44942bd08e02c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
    <div>This is div!</div>

";
        
        $__internal_d49f060a1c39b8eda935dfeb8c52d1c7c346ceb0f93060ebc44942bd08e02c07->leave($__internal_d49f060a1c39b8eda935dfeb8c52d1c7c346ceb0f93060ebc44942bd08e02c07_prof);

    }

    public function getTemplateName()
    {
        return "Lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/*     <div>This is div!</div>*/
/* */
/* {% endblock %}*/
