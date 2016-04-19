<?php

/* base.html.twig */
class __TwigTemplate_575ca00f2a62cea56ce3add1d52548c97b88ccf0e1580f2c2b2fb239c48a9639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd5eb04c45d337c4362dfe574799b296db0b59fbc657fe9c2664216ea0cc7aaa = $this->env->getExtension("native_profiler");
        $__internal_dd5eb04c45d337c4362dfe574799b296db0b59fbc657fe9c2664216ea0cc7aaa->enter($__internal_dd5eb04c45d337c4362dfe574799b296db0b59fbc657fe9c2664216ea0cc7aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-1.12.3.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("app.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_dd5eb04c45d337c4362dfe574799b296db0b59fbc657fe9c2664216ea0cc7aaa->leave($__internal_dd5eb04c45d337c4362dfe574799b296db0b59fbc657fe9c2664216ea0cc7aaa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bf3e8e5643d46d34dad6b2ff8d29deaea30aa5dcdde962f4bc891b251e54e43 = $this->env->getExtension("native_profiler");
        $__internal_8bf3e8e5643d46d34dad6b2ff8d29deaea30aa5dcdde962f4bc891b251e54e43->enter($__internal_8bf3e8e5643d46d34dad6b2ff8d29deaea30aa5dcdde962f4bc891b251e54e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8bf3e8e5643d46d34dad6b2ff8d29deaea30aa5dcdde962f4bc891b251e54e43->leave($__internal_8bf3e8e5643d46d34dad6b2ff8d29deaea30aa5dcdde962f4bc891b251e54e43_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1795f92b4a2eb53117789610adb6486d31fe3e5ea64da992aec0aa896be18128 = $this->env->getExtension("native_profiler");
        $__internal_1795f92b4a2eb53117789610adb6486d31fe3e5ea64da992aec0aa896be18128->enter($__internal_1795f92b4a2eb53117789610adb6486d31fe3e5ea64da992aec0aa896be18128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1795f92b4a2eb53117789610adb6486d31fe3e5ea64da992aec0aa896be18128->leave($__internal_1795f92b4a2eb53117789610adb6486d31fe3e5ea64da992aec0aa896be18128_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc73a7ddd8806632e6cf84d8f0ae901a1273cc5d264230a84fd0264ad4a034a9 = $this->env->getExtension("native_profiler");
        $__internal_bc73a7ddd8806632e6cf84d8f0ae901a1273cc5d264230a84fd0264ad4a034a9->enter($__internal_bc73a7ddd8806632e6cf84d8f0ae901a1273cc5d264230a84fd0264ad4a034a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        ";
        
        $__internal_bc73a7ddd8806632e6cf84d8f0ae901a1273cc5d264230a84fd0264ad4a034a9->leave($__internal_bc73a7ddd8806632e6cf84d8f0ae901a1273cc5d264230a84fd0264ad4a034a9_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77f443cf6ce0a76a25ffdfd4e36f32f98cb4e22eb96dbafb1daf186830f18ac4 = $this->env->getExtension("native_profiler");
        $__internal_77f443cf6ce0a76a25ffdfd4e36f32f98cb4e22eb96dbafb1daf186830f18ac4->enter($__internal_77f443cf6ce0a76a25ffdfd4e36f32f98cb4e22eb96dbafb1daf186830f18ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_77f443cf6ce0a76a25ffdfd4e36f32f98cb4e22eb96dbafb1daf186830f18ac4->leave($__internal_77f443cf6ce0a76a25ffdfd4e36f32f98cb4e22eb96dbafb1daf186830f18ac4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 14,  96 => 13,  90 => 12,  79 => 6,  67 => 5,  58 => 15,  55 => 14,  53 => 12,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script type="text/javascript" src="{{ asset('jquery-1.12.3.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('app.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*         {% block javascripts%}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
