<?php

/* AdminBundle:Default:admin.html.twig */
class __TwigTemplate_af126f891e7c8da8c8abf0e87a77b40b8cdf61d0a2f6a7d06331786267148e99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Default:admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_443466577cabbcc66f717c183ceb109f3805315fdc87f6ec8da636ed25a37951 = $this->env->getExtension("native_profiler");
        $__internal_443466577cabbcc66f717c183ceb109f3805315fdc87f6ec8da636ed25a37951->enter($__internal_443466577cabbcc66f717c183ceb109f3805315fdc87f6ec8da636ed25a37951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_443466577cabbcc66f717c183ceb109f3805315fdc87f6ec8da636ed25a37951->leave($__internal_443466577cabbcc66f717c183ceb109f3805315fdc87f6ec8da636ed25a37951_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e4e7111a78d64369ecee38c8721cfd50fd772ba1ecb5695ec6aac7ca9ceaa95 = $this->env->getExtension("native_profiler");
        $__internal_2e4e7111a78d64369ecee38c8721cfd50fd772ba1ecb5695ec6aac7ca9ceaa95->enter($__internal_2e4e7111a78d64369ecee38c8721cfd50fd772ba1ecb5695ec6aac7ca9ceaa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    用户名：";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "
    密码：";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "
    <a href=\"/logout\">退出</a>
";
        
        $__internal_2e4e7111a78d64369ecee38c8721cfd50fd772ba1ecb5695ec6aac7ca9ceaa95->leave($__internal_2e4e7111a78d64369ecee38c8721cfd50fd772ba1ecb5695ec6aac7ca9ceaa95_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
