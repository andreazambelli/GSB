<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_07566c11c5aa88988d404e00d13c147335487999afc44c8d7925e1989fb1b89e extends Twig_Template
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
        $__internal_087a9c669857f9a44508c90aae213076779a16c43e8a3953ac78154f7052c44a = $this->env->getExtension("native_profiler");
        $__internal_087a9c669857f9a44508c90aae213076779a16c43e8a3953ac78154f7052c44a->enter($__internal_087a9c669857f9a44508c90aae213076779a16c43e8a3953ac78154f7052c44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_087a9c669857f9a44508c90aae213076779a16c43e8a3953ac78154f7052c44a->leave($__internal_087a9c669857f9a44508c90aae213076779a16c43e8a3953ac78154f7052c44a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_097024d5e63cd708682e5648eb06056058e23b527e6e375709eff45ed0ac1a7f = $this->env->getExtension("native_profiler");
        $__internal_097024d5e63cd708682e5648eb06056058e23b527e6e375709eff45ed0ac1a7f->enter($__internal_097024d5e63cd708682e5648eb06056058e23b527e6e375709eff45ed0ac1a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_097024d5e63cd708682e5648eb06056058e23b527e6e375709eff45ed0ac1a7f->leave($__internal_097024d5e63cd708682e5648eb06056058e23b527e6e375709eff45ed0ac1a7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4908e03e5665c70cd9409f0227e05c2a324d6bbbcdf7a34f8fd1d1afa64544cb = $this->env->getExtension("native_profiler");
        $__internal_4908e03e5665c70cd9409f0227e05c2a324d6bbbcdf7a34f8fd1d1afa64544cb->enter($__internal_4908e03e5665c70cd9409f0227e05c2a324d6bbbcdf7a34f8fd1d1afa64544cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4908e03e5665c70cd9409f0227e05c2a324d6bbbcdf7a34f8fd1d1afa64544cb->leave($__internal_4908e03e5665c70cd9409f0227e05c2a324d6bbbcdf7a34f8fd1d1afa64544cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_01778ee933c817749c31ce40ac4fb814852a6b6ba30d9da634b48d2f7f0742cf = $this->env->getExtension("native_profiler");
        $__internal_01778ee933c817749c31ce40ac4fb814852a6b6ba30d9da634b48d2f7f0742cf->enter($__internal_01778ee933c817749c31ce40ac4fb814852a6b6ba30d9da634b48d2f7f0742cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_01778ee933c817749c31ce40ac4fb814852a6b6ba30d9da634b48d2f7f0742cf->leave($__internal_01778ee933c817749c31ce40ac4fb814852a6b6ba30d9da634b48d2f7f0742cf_prof);

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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
