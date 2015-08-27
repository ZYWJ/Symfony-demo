<?php

/* base.html.twig */
class __TwigTemplate_0f51a6820bdc5f0f7f09565c7e6f7e5e08f46cc8472297dd7d7721f13cf85255 extends Twig_Template
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
        $__internal_a4eac8e0d3bcf2894c96ba959b7feb47fe5e4de509c8d1dbb3e2d5432ad9e0f8 = $this->env->getExtension("native_profiler");
        $__internal_a4eac8e0d3bcf2894c96ba959b7feb47fe5e4de509c8d1dbb3e2d5432ad9e0f8->enter($__internal_a4eac8e0d3bcf2894c96ba959b7feb47fe5e4de509c8d1dbb3e2d5432ad9e0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a4eac8e0d3bcf2894c96ba959b7feb47fe5e4de509c8d1dbb3e2d5432ad9e0f8->leave($__internal_a4eac8e0d3bcf2894c96ba959b7feb47fe5e4de509c8d1dbb3e2d5432ad9e0f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f27f52bd7aa7316626c51533ddbb15af12c216430924a7fee30d5a370c7a6ba = $this->env->getExtension("native_profiler");
        $__internal_5f27f52bd7aa7316626c51533ddbb15af12c216430924a7fee30d5a370c7a6ba->enter($__internal_5f27f52bd7aa7316626c51533ddbb15af12c216430924a7fee30d5a370c7a6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f27f52bd7aa7316626c51533ddbb15af12c216430924a7fee30d5a370c7a6ba->leave($__internal_5f27f52bd7aa7316626c51533ddbb15af12c216430924a7fee30d5a370c7a6ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9839a1c6f6db396a74427844fb4dd1e98f76b15ab5f6695930486de65171d433 = $this->env->getExtension("native_profiler");
        $__internal_9839a1c6f6db396a74427844fb4dd1e98f76b15ab5f6695930486de65171d433->enter($__internal_9839a1c6f6db396a74427844fb4dd1e98f76b15ab5f6695930486de65171d433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9839a1c6f6db396a74427844fb4dd1e98f76b15ab5f6695930486de65171d433->leave($__internal_9839a1c6f6db396a74427844fb4dd1e98f76b15ab5f6695930486de65171d433_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d6121369c120c1c4ba114c3e2a2951d2ff5d2a52ec741e3f56b780c35c20072 = $this->env->getExtension("native_profiler");
        $__internal_8d6121369c120c1c4ba114c3e2a2951d2ff5d2a52ec741e3f56b780c35c20072->enter($__internal_8d6121369c120c1c4ba114c3e2a2951d2ff5d2a52ec741e3f56b780c35c20072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8d6121369c120c1c4ba114c3e2a2951d2ff5d2a52ec741e3f56b780c35c20072->leave($__internal_8d6121369c120c1c4ba114c3e2a2951d2ff5d2a52ec741e3f56b780c35c20072_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de9cfec33eed099e935fd862b6c3b13a06f198a3b6e8d4b08767d3227df98174 = $this->env->getExtension("native_profiler");
        $__internal_de9cfec33eed099e935fd862b6c3b13a06f198a3b6e8d4b08767d3227df98174->enter($__internal_de9cfec33eed099e935fd862b6c3b13a06f198a3b6e8d4b08767d3227df98174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de9cfec33eed099e935fd862b6c3b13a06f198a3b6e8d4b08767d3227df98174->leave($__internal_de9cfec33eed099e935fd862b6c3b13a06f198a3b6e8d4b08767d3227df98174_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
