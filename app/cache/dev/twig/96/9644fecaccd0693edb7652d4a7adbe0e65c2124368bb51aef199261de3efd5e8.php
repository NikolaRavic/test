<?php

/* :lucky:number.html.twig */
class __TwigTemplate_10e396af6ce19fed2aa877810f37bfe15274b84c209d79d27dd7b54b8f4b83b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lucky:number.html.twig", 1);
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
        $__internal_ef3b36ef0d4854a5beaae0c557952a1559011cc27ec97e33b1131602a388a387 = $this->env->getExtension("native_profiler");
        $__internal_ef3b36ef0d4854a5beaae0c557952a1559011cc27ec97e33b1131602a388a387->enter($__internal_ef3b36ef0d4854a5beaae0c557952a1559011cc27ec97e33b1131602a388a387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef3b36ef0d4854a5beaae0c557952a1559011cc27ec97e33b1131602a388a387->leave($__internal_ef3b36ef0d4854a5beaae0c557952a1559011cc27ec97e33b1131602a388a387_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f86a6be226a4c731e7b1f3192ff8283142280023a4a82b545cd5a2ec83f26b = $this->env->getExtension("native_profiler");
        $__internal_17f86a6be226a4c731e7b1f3192ff8283142280023a4a82b545cd5a2ec83f26b->enter($__internal_17f86a6be226a4c731e7b1f3192ff8283142280023a4a82b545cd5a2ec83f26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
    <div>This is div!</div>

";
        
        $__internal_17f86a6be226a4c731e7b1f3192ff8283142280023a4a82b545cd5a2ec83f26b->leave($__internal_17f86a6be226a4c731e7b1f3192ff8283142280023a4a82b545cd5a2ec83f26b_prof);

    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
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
