<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8626c39474dfaf42697c2c062b8674c29bdc50e139d80dae4c1ee5be7ba34dc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b151a0469b33c9ecb8ea05d298c3046a9ebbdba7f6722bd4a489fe3a47a52578 = $this->env->getExtension("native_profiler");
        $__internal_b151a0469b33c9ecb8ea05d298c3046a9ebbdba7f6722bd4a489fe3a47a52578->enter($__internal_b151a0469b33c9ecb8ea05d298c3046a9ebbdba7f6722bd4a489fe3a47a52578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b151a0469b33c9ecb8ea05d298c3046a9ebbdba7f6722bd4a489fe3a47a52578->leave($__internal_b151a0469b33c9ecb8ea05d298c3046a9ebbdba7f6722bd4a489fe3a47a52578_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
