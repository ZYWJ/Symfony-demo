<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7ce3ef327df333ff041dcf89cfc4e0a214bceccb15d10c5de62b30c2fa0bb79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6ba632ac068c29deb30b29646209bf8afc50bdc715d9b90eec7e367010a1549 = $this->env->getExtension("native_profiler");
        $__internal_a6ba632ac068c29deb30b29646209bf8afc50bdc715d9b90eec7e367010a1549->enter($__internal_a6ba632ac068c29deb30b29646209bf8afc50bdc715d9b90eec7e367010a1549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ba632ac068c29deb30b29646209bf8afc50bdc715d9b90eec7e367010a1549->leave($__internal_a6ba632ac068c29deb30b29646209bf8afc50bdc715d9b90eec7e367010a1549_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa68a750ec2b733584be78a9480490b26f6ad2eb24582c3861e4dc491dca641b = $this->env->getExtension("native_profiler");
        $__internal_fa68a750ec2b733584be78a9480490b26f6ad2eb24582c3861e4dc491dca641b->enter($__internal_fa68a750ec2b733584be78a9480490b26f6ad2eb24582c3861e4dc491dca641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fa68a750ec2b733584be78a9480490b26f6ad2eb24582c3861e4dc491dca641b->leave($__internal_fa68a750ec2b733584be78a9480490b26f6ad2eb24582c3861e4dc491dca641b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ca7cf951c85e976cdea803021970a02e78ec18d3ba47709c06818f8d73b1e4f = $this->env->getExtension("native_profiler");
        $__internal_0ca7cf951c85e976cdea803021970a02e78ec18d3ba47709c06818f8d73b1e4f->enter($__internal_0ca7cf951c85e976cdea803021970a02e78ec18d3ba47709c06818f8d73b1e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ca7cf951c85e976cdea803021970a02e78ec18d3ba47709c06818f8d73b1e4f->leave($__internal_0ca7cf951c85e976cdea803021970a02e78ec18d3ba47709c06818f8d73b1e4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6436791e7c0e7c0112fccdd44973ba8806b72f757e7808140345e48448c9d97 = $this->env->getExtension("native_profiler");
        $__internal_b6436791e7c0e7c0112fccdd44973ba8806b72f757e7808140345e48448c9d97->enter($__internal_b6436791e7c0e7c0112fccdd44973ba8806b72f757e7808140345e48448c9d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b6436791e7c0e7c0112fccdd44973ba8806b72f757e7808140345e48448c9d97->leave($__internal_b6436791e7c0e7c0112fccdd44973ba8806b72f757e7808140345e48448c9d97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
