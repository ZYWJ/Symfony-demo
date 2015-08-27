<?php

/* AdminBundle:Default:login.html.twig */
class __TwigTemplate_5984203822193217f84d8b506053f0e68cd4e6036c3eafe3fab29758eeaa1db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Default:login.html.twig", 1);
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
        $__internal_10060e5d65b47ef68a34fd9ceb06954caaa136dbc2e9ecd707bd82218137e79d = $this->env->getExtension("native_profiler");
        $__internal_10060e5d65b47ef68a34fd9ceb06954caaa136dbc2e9ecd707bd82218137e79d->enter($__internal_10060e5d65b47ef68a34fd9ceb06954caaa136dbc2e9ecd707bd82218137e79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10060e5d65b47ef68a34fd9ceb06954caaa136dbc2e9ecd707bd82218137e79d->leave($__internal_10060e5d65b47ef68a34fd9ceb06954caaa136dbc2e9ecd707bd82218137e79d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78f9fab9ee552afbf8eede616537b72225d93281ce71e9d10fc12f93bd1e3dfa = $this->env->getExtension("native_profiler");
        $__internal_78f9fab9ee552afbf8eede616537b72225d93281ce71e9d10fc12f93bd1e3dfa->enter($__internal_78f9fab9ee552afbf8eede616537b72225d93281ce71e9d10fc12f93bd1e3dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
    <div class=\"col-sm-5\">
        <div class=\"well\">
            <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_check");
        echo "\" method=\"post\">
                <fieldset>
                    <legend><i class=\"fa fa-lock\"></i>登录</legend>
                    <div class=\"form-group\">
                        <label for=\"username\">用户名</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">密码</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fa fa-sign-in\"></i> 登录
                    </button>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_78f9fab9ee552afbf8eede616537b72225d93281ce71e9d10fc12f93bd1e3dfa->leave($__internal_78f9fab9ee552afbf8eede616537b72225d93281ce71e9d10fc12f93bd1e3dfa_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  53 => 12,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
