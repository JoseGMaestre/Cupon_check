<?php

/* OfertaBundle:Default:_privacidad.html.twig */
class __TwigTemplate_c3aa63c7d70c3fb1d8c431d8213425be440530efb55ac736ff7b5b757aa64076 extends Twig_Template
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
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")), "html", null, true);
        echo "!";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:_privacidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* Hello {{ pagina }}!*/
