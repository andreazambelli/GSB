<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_b64f6c04da740e83a8fe66a329e8efd23651b9d0f7f02d65304b9b9ab80ab7a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb00852f3e742352541d1a31a6fe381d864b389ff0ad4e9dfda40b478401b71f = $this->env->getExtension("native_profiler");
        $__internal_fb00852f3e742352541d1a31a6fe381d864b389ff0ad4e9dfda40b478401b71f->enter($__internal_fb00852f3e742352541d1a31a6fe381d864b389ff0ad4e9dfda40b478401b71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb00852f3e742352541d1a31a6fe381d864b389ff0ad4e9dfda40b478401b71f->leave($__internal_fb00852f3e742352541d1a31a6fe381d864b389ff0ad4e9dfda40b478401b71f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d5e2b7efa2856e144a4aa49c8a4bcb70a8089e410ecfcb4f0159b4d09979872 = $this->env->getExtension("native_profiler");
        $__internal_0d5e2b7efa2856e144a4aa49c8a4bcb70a8089e410ecfcb4f0159b4d09979872->enter($__internal_0d5e2b7efa2856e144a4aa49c8a4bcb70a8089e410ecfcb4f0159b4d09979872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0d5e2b7efa2856e144a4aa49c8a4bcb70a8089e410ecfcb4f0159b4d09979872->leave($__internal_0d5e2b7efa2856e144a4aa49c8a4bcb70a8089e410ecfcb4f0159b4d09979872_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_303ee384b622077a6249be097c49bc70d13b5786480f7703bb76d578cd75441c = $this->env->getExtension("native_profiler");
        $__internal_303ee384b622077a6249be097c49bc70d13b5786480f7703bb76d578cd75441c->enter($__internal_303ee384b622077a6249be097c49bc70d13b5786480f7703bb76d578cd75441c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_303ee384b622077a6249be097c49bc70d13b5786480f7703bb76d578cd75441c->leave($__internal_303ee384b622077a6249be097c49bc70d13b5786480f7703bb76d578cd75441c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
