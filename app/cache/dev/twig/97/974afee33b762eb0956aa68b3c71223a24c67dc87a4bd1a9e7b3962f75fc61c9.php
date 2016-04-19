<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_14a53ccb748a495311ed294a344b6bffbcc3fd5741a91e1a3e076f4064fa7053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_ee600f02725693cb2d6a8aa9b04d8de1f1db1217518768459cfcd3344da112dc = $this->env->getExtension("native_profiler");
        $__internal_ee600f02725693cb2d6a8aa9b04d8de1f1db1217518768459cfcd3344da112dc->enter($__internal_ee600f02725693cb2d6a8aa9b04d8de1f1db1217518768459cfcd3344da112dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee600f02725693cb2d6a8aa9b04d8de1f1db1217518768459cfcd3344da112dc->leave($__internal_ee600f02725693cb2d6a8aa9b04d8de1f1db1217518768459cfcd3344da112dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2110d04f3916f857b7d548ff438c7d626d777dae423330098be125f8f4713fdd = $this->env->getExtension("native_profiler");
        $__internal_2110d04f3916f857b7d548ff438c7d626d777dae423330098be125f8f4713fdd->enter($__internal_2110d04f3916f857b7d548ff438c7d626d777dae423330098be125f8f4713fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2110d04f3916f857b7d548ff438c7d626d777dae423330098be125f8f4713fdd->leave($__internal_2110d04f3916f857b7d548ff438c7d626d777dae423330098be125f8f4713fdd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ea2520a08bfd377f977e02221cc0a235da022ba90adda8212eae2e427bdbc7 = $this->env->getExtension("native_profiler");
        $__internal_42ea2520a08bfd377f977e02221cc0a235da022ba90adda8212eae2e427bdbc7->enter($__internal_42ea2520a08bfd377f977e02221cc0a235da022ba90adda8212eae2e427bdbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42ea2520a08bfd377f977e02221cc0a235da022ba90adda8212eae2e427bdbc7->leave($__internal_42ea2520a08bfd377f977e02221cc0a235da022ba90adda8212eae2e427bdbc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
