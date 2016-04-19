<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0a2250238ddb5778ac68f4970bca8c197b836626fee8593c85baf4e94af5d22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_96b332fef357d42a94f73387ff854e8c8f055847f1845a5f4a44d373ac1ec9a6 = $this->env->getExtension("native_profiler");
        $__internal_96b332fef357d42a94f73387ff854e8c8f055847f1845a5f4a44d373ac1ec9a6->enter($__internal_96b332fef357d42a94f73387ff854e8c8f055847f1845a5f4a44d373ac1ec9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b332fef357d42a94f73387ff854e8c8f055847f1845a5f4a44d373ac1ec9a6->leave($__internal_96b332fef357d42a94f73387ff854e8c8f055847f1845a5f4a44d373ac1ec9a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_606d81d2558bec1dce7853dd337bdedc14471c8a2f7cde2bbef0f1cfec86a78f = $this->env->getExtension("native_profiler");
        $__internal_606d81d2558bec1dce7853dd337bdedc14471c8a2f7cde2bbef0f1cfec86a78f->enter($__internal_606d81d2558bec1dce7853dd337bdedc14471c8a2f7cde2bbef0f1cfec86a78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_606d81d2558bec1dce7853dd337bdedc14471c8a2f7cde2bbef0f1cfec86a78f->leave($__internal_606d81d2558bec1dce7853dd337bdedc14471c8a2f7cde2bbef0f1cfec86a78f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f03bba7195db763a0feaadad7e6f4864556e9a885e7ca6edb4d391dcce2b0d8c = $this->env->getExtension("native_profiler");
        $__internal_f03bba7195db763a0feaadad7e6f4864556e9a885e7ca6edb4d391dcce2b0d8c->enter($__internal_f03bba7195db763a0feaadad7e6f4864556e9a885e7ca6edb4d391dcce2b0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f03bba7195db763a0feaadad7e6f4864556e9a885e7ca6edb4d391dcce2b0d8c->leave($__internal_f03bba7195db763a0feaadad7e6f4864556e9a885e7ca6edb4d391dcce2b0d8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c8c033173f321e9f547e9d4b1e3b3998a052ec92d0c248f160efd7816aa90b0 = $this->env->getExtension("native_profiler");
        $__internal_0c8c033173f321e9f547e9d4b1e3b3998a052ec92d0c248f160efd7816aa90b0->enter($__internal_0c8c033173f321e9f547e9d4b1e3b3998a052ec92d0c248f160efd7816aa90b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c8c033173f321e9f547e9d4b1e3b3998a052ec92d0c248f160efd7816aa90b0->leave($__internal_0c8c033173f321e9f547e9d4b1e3b3998a052ec92d0c248f160efd7816aa90b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
