<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_532a0d884ac0611c4df4f46a056a2c103ac21348335fdddc71f1d8a6b2c464be extends Twig_Template
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
        $__internal_9f806246997ce6ff652285b784c8544413420f7e20c34e46400315b5185315f7 = $this->env->getExtension("native_profiler");
        $__internal_9f806246997ce6ff652285b784c8544413420f7e20c34e46400315b5185315f7->enter($__internal_9f806246997ce6ff652285b784c8544413420f7e20c34e46400315b5185315f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9f806246997ce6ff652285b784c8544413420f7e20c34e46400315b5185315f7->leave($__internal_9f806246997ce6ff652285b784c8544413420f7e20c34e46400315b5185315f7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1726558ee351c40c0a312c9688e70895b863cc86d9ce91811b9fd1ae24d4c03 = $this->env->getExtension("native_profiler");
        $__internal_a1726558ee351c40c0a312c9688e70895b863cc86d9ce91811b9fd1ae24d4c03->enter($__internal_a1726558ee351c40c0a312c9688e70895b863cc86d9ce91811b9fd1ae24d4c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a1726558ee351c40c0a312c9688e70895b863cc86d9ce91811b9fd1ae24d4c03->leave($__internal_a1726558ee351c40c0a312c9688e70895b863cc86d9ce91811b9fd1ae24d4c03_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
