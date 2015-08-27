<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_e9f5e533a05563106477f06855c699a040684cc25062b2fd5658a3262ea87957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2713e99047c43d05a23d8ad79c409adf013fe23c04dfd699474e49f0ca0628b7 = $this->env->getExtension("native_profiler");
        $__internal_2713e99047c43d05a23d8ad79c409adf013fe23c04dfd699474e49f0ca0628b7->enter($__internal_2713e99047c43d05a23d8ad79c409adf013fe23c04dfd699474e49f0ca0628b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2713e99047c43d05a23d8ad79c409adf013fe23c04dfd699474e49f0ca0628b7->leave($__internal_2713e99047c43d05a23d8ad79c409adf013fe23c04dfd699474e49f0ca0628b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e460863ae49fb3f614f6bac47a527189d4d4871784e2b978e3311c0b003b50e = $this->env->getExtension("native_profiler");
        $__internal_5e460863ae49fb3f614f6bac47a527189d4d4871784e2b978e3311c0b003b50e->enter($__internal_5e460863ae49fb3f614f6bac47a527189d4d4871784e2b978e3311c0b003b50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
        echo "
";
        
        $__internal_5e460863ae49fb3f614f6bac47a527189d4d4871784e2b978e3311c0b003b50e->leave($__internal_5e460863ae49fb3f614f6bac47a527189d4d4871784e2b978e3311c0b003b50e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7743bc37c4e8a12952d64951398c36fa2ac1c95d8eb70df652acd3e1f1b12873 = $this->env->getExtension("native_profiler");
        $__internal_7743bc37c4e8a12952d64951398c36fa2ac1c95d8eb70df652acd3e1f1b12873->enter($__internal_7743bc37c4e8a12952d64951398c36fa2ac1c95d8eb70df652acd3e1f1b12873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/admin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_7743bc37c4e8a12952d64951398c36fa2ac1c95d8eb70df652acd3e1f1b12873->leave($__internal_7743bc37c4e8a12952d64951398c36fa2ac1c95d8eb70df652acd3e1f1b12873_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88f9e38ee4e4db13cbf4ad870db38b5a177e7080c84228b96330cda965f3ee0d = $this->env->getExtension("native_profiler");
        $__internal_88f9e38ee4e4db13cbf4ad870db38b5a177e7080c84228b96330cda965f3ee0d->enter($__internal_88f9e38ee4e4db13cbf4ad870db38b5a177e7080c84228b96330cda965f3ee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/jquery.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_88f9e38ee4e4db13cbf4ad870db38b5a177e7080c84228b96330cda965f3ee0d->leave($__internal_88f9e38ee4e4db13cbf4ad870db38b5a177e7080c84228b96330cda965f3ee0d_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_61f44d0848fc4ca7b94a184473830446937b93ba320f954bd2e4525523ee1cfe = $this->env->getExtension("native_profiler");
        $__internal_61f44d0848fc4ca7b94a184473830446937b93ba320f954bd2e4525523ee1cfe->enter($__internal_61f44d0848fc4ca7b94a184473830446937b93ba320f954bd2e4525523ee1cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!

    <div class=\"test\"></div>
";
        
        $__internal_61f44d0848fc4ca7b94a184473830446937b93ba320f954bd2e4525523ee1cfe->leave($__internal_61f44d0848fc4ca7b94a184473830446937b93ba320f954bd2e4525523ee1cfe_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  85 => 15,  75 => 12,  69 => 11,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
