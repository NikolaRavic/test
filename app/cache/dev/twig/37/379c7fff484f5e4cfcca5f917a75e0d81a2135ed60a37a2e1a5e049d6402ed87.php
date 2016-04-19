<?php

/* ::base.html.twig */
class __TwigTemplate_acab9dd933b531d1f544ad9b9bc318c1c6e81757564b0b67265972de91920f1a extends Twig_Template
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
        $__internal_00b6ab054f00a0b21673ba02b4b078e55771e6c08bd6ab4df8a856c3f4205262 = $this->env->getExtension("native_profiler");
        $__internal_00b6ab054f00a0b21673ba02b4b078e55771e6c08bd6ab4df8a856c3f4205262->enter($__internal_00b6ab054f00a0b21673ba02b4b078e55771e6c08bd6ab4df8a856c3f4205262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_00b6ab054f00a0b21673ba02b4b078e55771e6c08bd6ab4df8a856c3f4205262->leave($__internal_00b6ab054f00a0b21673ba02b4b078e55771e6c08bd6ab4df8a856c3f4205262_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ad8de7aa17de11faecf65cc2ef36d687866d64cfb6df49303fb08df4fe92e9f = $this->env->getExtension("native_profiler");
        $__internal_1ad8de7aa17de11faecf65cc2ef36d687866d64cfb6df49303fb08df4fe92e9f->enter($__internal_1ad8de7aa17de11faecf65cc2ef36d687866d64cfb6df49303fb08df4fe92e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ad8de7aa17de11faecf65cc2ef36d687866d64cfb6df49303fb08df4fe92e9f->leave($__internal_1ad8de7aa17de11faecf65cc2ef36d687866d64cfb6df49303fb08df4fe92e9f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4ea41276f9b1b270d7665ac590776775c812b76d77546e4668fbb0ec64af8b2 = $this->env->getExtension("native_profiler");
        $__internal_e4ea41276f9b1b270d7665ac590776775c812b76d77546e4668fbb0ec64af8b2->enter($__internal_e4ea41276f9b1b270d7665ac590776775c812b76d77546e4668fbb0ec64af8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e4ea41276f9b1b270d7665ac590776775c812b76d77546e4668fbb0ec64af8b2->leave($__internal_e4ea41276f9b1b270d7665ac590776775c812b76d77546e4668fbb0ec64af8b2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e97f83b100c3ca473bbb9a5852c5d1f89c524478ad306ca1d8eb5a7cae7d05ba = $this->env->getExtension("native_profiler");
        $__internal_e97f83b100c3ca473bbb9a5852c5d1f89c524478ad306ca1d8eb5a7cae7d05ba->enter($__internal_e97f83b100c3ca473bbb9a5852c5d1f89c524478ad306ca1d8eb5a7cae7d05ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        ";
        
        $__internal_e97f83b100c3ca473bbb9a5852c5d1f89c524478ad306ca1d8eb5a7cae7d05ba->leave($__internal_e97f83b100c3ca473bbb9a5852c5d1f89c524478ad306ca1d8eb5a7cae7d05ba_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4d7df90d20218e12d9d5389cad852d567c9a3771ea0107d4c524b27e548bd62 = $this->env->getExtension("native_profiler");
        $__internal_a4d7df90d20218e12d9d5389cad852d567c9a3771ea0107d4c524b27e548bd62->enter($__internal_a4d7df90d20218e12d9d5389cad852d567c9a3771ea0107d4c524b27e548bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a4d7df90d20218e12d9d5389cad852d567c9a3771ea0107d4c524b27e548bd62->leave($__internal_a4d7df90d20218e12d9d5389cad852d567c9a3771ea0107d4c524b27e548bd62_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
