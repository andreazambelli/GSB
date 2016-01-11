<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_d1b0c81ebebff7ce113a96fdfaf61936f43cb2f5057175953e854c3bc2ce2bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40054174bfd68b508bd7e8e2539309842e6ce59399ba0280c3c8009dd5dd118e = $this->env->getExtension("native_profiler");
        $__internal_40054174bfd68b508bd7e8e2539309842e6ce59399ba0280c3c8009dd5dd118e->enter($__internal_40054174bfd68b508bd7e8e2539309842e6ce59399ba0280c3c8009dd5dd118e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40054174bfd68b508bd7e8e2539309842e6ce59399ba0280c3c8009dd5dd118e->leave($__internal_40054174bfd68b508bd7e8e2539309842e6ce59399ba0280c3c8009dd5dd118e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f61c62cff00e26be2a004088a6b2b58dc9163f4ded86010ebf42bf124d215ec7 = $this->env->getExtension("native_profiler");
        $__internal_f61c62cff00e26be2a004088a6b2b58dc9163f4ded86010ebf42bf124d215ec7->enter($__internal_f61c62cff00e26be2a004088a6b2b58dc9163f4ded86010ebf42bf124d215ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f61c62cff00e26be2a004088a6b2b58dc9163f4ded86010ebf42bf124d215ec7->leave($__internal_f61c62cff00e26be2a004088a6b2b58dc9163f4ded86010ebf42bf124d215ec7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd59347b0f26ee4273b1a5e2de7a7b069aca786d076ec99bb928c5437524f3a9 = $this->env->getExtension("native_profiler");
        $__internal_fd59347b0f26ee4273b1a5e2de7a7b069aca786d076ec99bb928c5437524f3a9->enter($__internal_fd59347b0f26ee4273b1a5e2de7a7b069aca786d076ec99bb928c5437524f3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_fd59347b0f26ee4273b1a5e2de7a7b069aca786d076ec99bb928c5437524f3a9->leave($__internal_fd59347b0f26ee4273b1a5e2de7a7b069aca786d076ec99bb928c5437524f3a9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6a2d805acc36b070e905b372b46134803884d163db7d915d22af56a1d4d16a1 = $this->env->getExtension("native_profiler");
        $__internal_c6a2d805acc36b070e905b372b46134803884d163db7d915d22af56a1d4d16a1->enter($__internal_c6a2d805acc36b070e905b372b46134803884d163db7d915d22af56a1d4d16a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_c6a2d805acc36b070e905b372b46134803884d163db7d915d22af56a1d4d16a1->leave($__internal_c6a2d805acc36b070e905b372b46134803884d163db7d915d22af56a1d4d16a1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9902930b90c1cb496da324a571674ea2d52f32e116740afcc76a9019a8044fe = $this->env->getExtension("native_profiler");
        $__internal_d9902930b90c1cb496da324a571674ea2d52f32e116740afcc76a9019a8044fe->enter($__internal_d9902930b90c1cb496da324a571674ea2d52f32e116740afcc76a9019a8044fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d9902930b90c1cb496da324a571674ea2d52f32e116740afcc76a9019a8044fe->leave($__internal_d9902930b90c1cb496da324a571674ea2d52f32e116740afcc76a9019a8044fe_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
