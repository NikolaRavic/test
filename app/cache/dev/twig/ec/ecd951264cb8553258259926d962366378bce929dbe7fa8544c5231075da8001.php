<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_740b3dee032afb3cafdb642ae3b8553fc52238cf5ea8783b94590495180dede7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_21eb69744470a68ca44682d29788bb322fac58bbf02f1abbae4d39f36c7408c8 = $this->env->getExtension("native_profiler");
        $__internal_21eb69744470a68ca44682d29788bb322fac58bbf02f1abbae4d39f36c7408c8->enter($__internal_21eb69744470a68ca44682d29788bb322fac58bbf02f1abbae4d39f36c7408c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21eb69744470a68ca44682d29788bb322fac58bbf02f1abbae4d39f36c7408c8->leave($__internal_21eb69744470a68ca44682d29788bb322fac58bbf02f1abbae4d39f36c7408c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_617d82c2b0167c4635db482522ee0702ee56936877609bb42b2f08456c5d651a = $this->env->getExtension("native_profiler");
        $__internal_617d82c2b0167c4635db482522ee0702ee56936877609bb42b2f08456c5d651a->enter($__internal_617d82c2b0167c4635db482522ee0702ee56936877609bb42b2f08456c5d651a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_617d82c2b0167c4635db482522ee0702ee56936877609bb42b2f08456c5d651a->leave($__internal_617d82c2b0167c4635db482522ee0702ee56936877609bb42b2f08456c5d651a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68eac6c9d0678f2909fa1fcf872fbe445f93d2f89db77edb8a5172c1a2e49ce = $this->env->getExtension("native_profiler");
        $__internal_a68eac6c9d0678f2909fa1fcf872fbe445f93d2f89db77edb8a5172c1a2e49ce->enter($__internal_a68eac6c9d0678f2909fa1fcf872fbe445f93d2f89db77edb8a5172c1a2e49ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a68eac6c9d0678f2909fa1fcf872fbe445f93d2f89db77edb8a5172c1a2e49ce->leave($__internal_a68eac6c9d0678f2909fa1fcf872fbe445f93d2f89db77edb8a5172c1a2e49ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
