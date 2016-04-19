<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d3bae4fd4c0683e66d498736b12a8ce35394ea5b69f55d3f9953309f9d4335c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_491e2678b3a494768c52e722e0f768213a8425b49f177f9834f03d9ba608cd2e = $this->env->getExtension("native_profiler");
        $__internal_491e2678b3a494768c52e722e0f768213a8425b49f177f9834f03d9ba608cd2e->enter($__internal_491e2678b3a494768c52e722e0f768213a8425b49f177f9834f03d9ba608cd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_491e2678b3a494768c52e722e0f768213a8425b49f177f9834f03d9ba608cd2e->leave($__internal_491e2678b3a494768c52e722e0f768213a8425b49f177f9834f03d9ba608cd2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_264670c366bd6e85ec5760dbf947f81df1009634fcdfca80879e7a46d5a9975b = $this->env->getExtension("native_profiler");
        $__internal_264670c366bd6e85ec5760dbf947f81df1009634fcdfca80879e7a46d5a9975b->enter($__internal_264670c366bd6e85ec5760dbf947f81df1009634fcdfca80879e7a46d5a9975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_264670c366bd6e85ec5760dbf947f81df1009634fcdfca80879e7a46d5a9975b->leave($__internal_264670c366bd6e85ec5760dbf947f81df1009634fcdfca80879e7a46d5a9975b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a028fa8e40cb66c5af1fe40a128045c242e5c810cd51688952718e99a7253487 = $this->env->getExtension("native_profiler");
        $__internal_a028fa8e40cb66c5af1fe40a128045c242e5c810cd51688952718e99a7253487->enter($__internal_a028fa8e40cb66c5af1fe40a128045c242e5c810cd51688952718e99a7253487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a028fa8e40cb66c5af1fe40a128045c242e5c810cd51688952718e99a7253487->leave($__internal_a028fa8e40cb66c5af1fe40a128045c242e5c810cd51688952718e99a7253487_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e9f2ee79a8b61f3885d5dae892c4825d1a233b5930463323a75d1a0d49ea0f7 = $this->env->getExtension("native_profiler");
        $__internal_6e9f2ee79a8b61f3885d5dae892c4825d1a233b5930463323a75d1a0d49ea0f7->enter($__internal_6e9f2ee79a8b61f3885d5dae892c4825d1a233b5930463323a75d1a0d49ea0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6e9f2ee79a8b61f3885d5dae892c4825d1a233b5930463323a75d1a0d49ea0f7->leave($__internal_6e9f2ee79a8b61f3885d5dae892c4825d1a233b5930463323a75d1a0d49ea0f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
