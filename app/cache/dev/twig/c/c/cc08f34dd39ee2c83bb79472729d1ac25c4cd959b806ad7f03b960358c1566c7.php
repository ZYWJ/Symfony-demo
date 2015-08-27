<?php

/* AdminBundle:Default:form.html.twig */
class __TwigTemplate_cc08f34dd39ee2c83bb79472729d1ac25c4cd959b806ad7f03b960358c1566c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Default:form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ad0ba2c1ef1eb51af7e071794e0709293f4eac573cd71121b43d0355eec154c = $this->env->getExtension("native_profiler");
        $__internal_9ad0ba2c1ef1eb51af7e071794e0709293f4eac573cd71121b43d0355eec154c->enter($__internal_9ad0ba2c1ef1eb51af7e071794e0709293f4eac573cd71121b43d0355eec154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ad0ba2c1ef1eb51af7e071794e0709293f4eac573cd71121b43d0355eec154c->leave($__internal_9ad0ba2c1ef1eb51af7e071794e0709293f4eac573cd71121b43d0355eec154c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_462062e178d80f2e1bbe29cc22c7cd3f7b53010cf9ddf9e9efba24009342217d = $this->env->getExtension("native_profiler");
        $__internal_462062e178d80f2e1bbe29cc22c7cd3f7b53010cf9ddf9e9efba24009342217d->enter($__internal_462062e178d80f2e1bbe29cc22c7cd3f7b53010cf9ddf9e9efba24009342217d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
        echo "
";
        
        $__internal_462062e178d80f2e1bbe29cc22c7cd3f7b53010cf9ddf9e9efba24009342217d->leave($__internal_462062e178d80f2e1bbe29cc22c7cd3f7b53010cf9ddf9e9efba24009342217d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_601af58db59dc06a58350d0e5e834f77ebc993605a72c67628fe5aebbfe77e1f = $this->env->getExtension("native_profiler");
        $__internal_601af58db59dc06a58350d0e5e834f77ebc993605a72c67628fe5aebbfe77e1f->enter($__internal_601af58db59dc06a58350d0e5e834f77ebc993605a72c67628fe5aebbfe77e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/admin.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_601af58db59dc06a58350d0e5e834f77ebc993605a72c67628fe5aebbfe77e1f->leave($__internal_601af58db59dc06a58350d0e5e834f77ebc993605a72c67628fe5aebbfe77e1f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9823b740906ab0c9c94b0f48b7d33263a1446af14b1efb8e3c70eab95499a0c = $this->env->getExtension("native_profiler");
        $__internal_c9823b740906ab0c9c94b0f48b7d33263a1446af14b1efb8e3c70eab95499a0c->enter($__internal_c9823b740906ab0c9c94b0f48b7d33263a1446af14b1efb8e3c70eab95499a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), 'form_start');
        echo "
    <div>
        <div class=\"row\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), "name", array()), 'label', array("label" => "产品名称"));
        echo "</div>
        <div class=\"row2\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), "name", array()), 'widget');
        echo "</div>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), "name", array()), 'errors', array("attr" => array("class" => "error")));
        echo "
    </div>

    <div style=\"clear:both\">
        <div class=\"row\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), "price", array()), 'label', array("label" => "价格"));
        echo "</div>
        <div class=\"row2\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), "price", array()), 'widget');
        echo "</div>
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), "price", array()), 'errors', array("attr" => array("class" => "error")));
        echo "
    </div>

    <div style=\"clear:both\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), "save", array()), 'widget', array("label" => "提交"));
        echo "
    </div>
    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["product_form"]) ? $context["product_form"] : $this->getContext($context, "product_form")), 'form_end');
        echo "
";
        
        $__internal_c9823b740906ab0c9c94b0f48b7d33263a1446af14b1efb8e3c70eab95499a0c->leave($__internal_c9823b740906ab0c9c94b0f48b7d33263a1446af14b1efb8e3c70eab95499a0c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  110 => 27,  103 => 23,  99 => 22,  95 => 21,  88 => 17,  84 => 16,  80 => 15,  74 => 13,  68 => 12,  58 => 9,  52 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
