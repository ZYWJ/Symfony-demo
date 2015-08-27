<?php

/* AssistantBundle:Default:index.html.twig */
class __TwigTemplate_749e579aa65d9d35eac087e67296b9f068e8b68b94b01434b04fbee16274e686 extends Twig_Template
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
        $__internal_e31127f56113da8435849629e9de8a0849465e2797deae56556e684536536114 = $this->env->getExtension("native_profiler");
        $__internal_e31127f56113da8435849629e9de8a0849465e2797deae56556e684536536114->enter($__internal_e31127f56113da8435849629e9de8a0849465e2797deae56556e684536536114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AssistantBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_e31127f56113da8435849629e9de8a0849465e2797deae56556e684536536114->leave($__internal_e31127f56113da8435849629e9de8a0849465e2797deae56556e684536536114_prof);

    }

    public function getTemplateName()
    {
        return "AssistantBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
