<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0cd508c98789ff73318331dd7c26e1ee832458949176237b80956b5fef8f0505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a49adcd4f045664bfe386418e126e2863fba93114c6c30109abc5c50d826858 = $this->env->getExtension("native_profiler");
        $__internal_6a49adcd4f045664bfe386418e126e2863fba93114c6c30109abc5c50d826858->enter($__internal_6a49adcd4f045664bfe386418e126e2863fba93114c6c30109abc5c50d826858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a49adcd4f045664bfe386418e126e2863fba93114c6c30109abc5c50d826858->leave($__internal_6a49adcd4f045664bfe386418e126e2863fba93114c6c30109abc5c50d826858_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_389e9cc8653c8a946be5f108d4fbd07800f89bfdaef8930d954f969aca137a8b = $this->env->getExtension("native_profiler");
        $__internal_389e9cc8653c8a946be5f108d4fbd07800f89bfdaef8930d954f969aca137a8b->enter($__internal_389e9cc8653c8a946be5f108d4fbd07800f89bfdaef8930d954f969aca137a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_389e9cc8653c8a946be5f108d4fbd07800f89bfdaef8930d954f969aca137a8b->leave($__internal_389e9cc8653c8a946be5f108d4fbd07800f89bfdaef8930d954f969aca137a8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b507889e6ab2d0e71581a08a4d8cc6c7c7267efc93029f7f7f3924a157a6e15a = $this->env->getExtension("native_profiler");
        $__internal_b507889e6ab2d0e71581a08a4d8cc6c7c7267efc93029f7f7f3924a157a6e15a->enter($__internal_b507889e6ab2d0e71581a08a4d8cc6c7c7267efc93029f7f7f3924a157a6e15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b507889e6ab2d0e71581a08a4d8cc6c7c7267efc93029f7f7f3924a157a6e15a->leave($__internal_b507889e6ab2d0e71581a08a4d8cc6c7c7267efc93029f7f7f3924a157a6e15a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab320e3ae99128eac0cf2ac61c3e14cc9415e8afe0795bdca386ab03ae8049e6 = $this->env->getExtension("native_profiler");
        $__internal_ab320e3ae99128eac0cf2ac61c3e14cc9415e8afe0795bdca386ab03ae8049e6->enter($__internal_ab320e3ae99128eac0cf2ac61c3e14cc9415e8afe0795bdca386ab03ae8049e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab320e3ae99128eac0cf2ac61c3e14cc9415e8afe0795bdca386ab03ae8049e6->leave($__internal_ab320e3ae99128eac0cf2ac61c3e14cc9415e8afe0795bdca386ab03ae8049e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
