<?php

/* BbsBundle:Default:index.html.twig */
class __TwigTemplate_f35f11b0f46e671a8f779a00a0f0d54fddbe374338a9d23fcf0e570b9f437dd4 extends Twig_Template
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
        $__internal_b69809c71fd94e5b1b99d985e3364d0e5ffa87fa462f86c774cd06375d506db8 = $this->env->getExtension("native_profiler");
        $__internal_b69809c71fd94e5b1b99d985e3364d0e5ffa87fa462f86c774cd06375d506db8->enter($__internal_b69809c71fd94e5b1b99d985e3364d0e5ffa87fa462f86c774cd06375d506db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BbsBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_b69809c71fd94e5b1b99d985e3364d0e5ffa87fa462f86c774cd06375d506db8->leave($__internal_b69809c71fd94e5b1b99d985e3364d0e5ffa87fa462f86c774cd06375d506db8_prof);

    }

    public function getTemplateName()
    {
        return "BbsBundle:Default:index.html.twig";
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
