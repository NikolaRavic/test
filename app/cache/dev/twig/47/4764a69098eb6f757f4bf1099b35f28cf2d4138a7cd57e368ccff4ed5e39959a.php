<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_59d6423b506cd66c15c2e97fcb9d76bacebdb9d74817ad681597cb4c599259e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85a514e949def6fc3a51645fca16caae78a458f166952bca3b897c7b90126d2b = $this->env->getExtension("native_profiler");
        $__internal_85a514e949def6fc3a51645fca16caae78a458f166952bca3b897c7b90126d2b->enter($__internal_85a514e949def6fc3a51645fca16caae78a458f166952bca3b897c7b90126d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a514e949def6fc3a51645fca16caae78a458f166952bca3b897c7b90126d2b->leave($__internal_85a514e949def6fc3a51645fca16caae78a458f166952bca3b897c7b90126d2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a573182dff3ad4c054b12971a8624420589ca7b9c2865f9f930218c0cb4e98a = $this->env->getExtension("native_profiler");
        $__internal_7a573182dff3ad4c054b12971a8624420589ca7b9c2865f9f930218c0cb4e98a->enter($__internal_7a573182dff3ad4c054b12971a8624420589ca7b9c2865f9f930218c0cb4e98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a573182dff3ad4c054b12971a8624420589ca7b9c2865f9f930218c0cb4e98a->leave($__internal_7a573182dff3ad4c054b12971a8624420589ca7b9c2865f9f930218c0cb4e98a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4d0c8d176f88b63187f6c8b3161d30bd92017dbeb22607ffdecc91aa26e1111 = $this->env->getExtension("native_profiler");
        $__internal_c4d0c8d176f88b63187f6c8b3161d30bd92017dbeb22607ffdecc91aa26e1111->enter($__internal_c4d0c8d176f88b63187f6c8b3161d30bd92017dbeb22607ffdecc91aa26e1111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4d0c8d176f88b63187f6c8b3161d30bd92017dbeb22607ffdecc91aa26e1111->leave($__internal_c4d0c8d176f88b63187f6c8b3161d30bd92017dbeb22607ffdecc91aa26e1111_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdede4ad9bbcfcc856bc75bd60f0598affbaf4ff3cd34c5687f14aa22ff1edf4 = $this->env->getExtension("native_profiler");
        $__internal_cdede4ad9bbcfcc856bc75bd60f0598affbaf4ff3cd34c5687f14aa22ff1edf4->enter($__internal_cdede4ad9bbcfcc856bc75bd60f0598affbaf4ff3cd34c5687f14aa22ff1edf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cdede4ad9bbcfcc856bc75bd60f0598affbaf4ff3cd34c5687f14aa22ff1edf4->leave($__internal_cdede4ad9bbcfcc856bc75bd60f0598affbaf4ff3cd34c5687f14aa22ff1edf4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
