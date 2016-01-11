<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_91f589746607f031cd289cc8e98eb642b75a6194ea4afaca37208453609caef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_e724d1198e06e77c9e1f50dd61d44c87a12e16098c25bd391ff9a449f28ec5c8 = $this->env->getExtension("native_profiler");
        $__internal_e724d1198e06e77c9e1f50dd61d44c87a12e16098c25bd391ff9a449f28ec5c8->enter($__internal_e724d1198e06e77c9e1f50dd61d44c87a12e16098c25bd391ff9a449f28ec5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e724d1198e06e77c9e1f50dd61d44c87a12e16098c25bd391ff9a449f28ec5c8->leave($__internal_e724d1198e06e77c9e1f50dd61d44c87a12e16098c25bd391ff9a449f28ec5c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_febee1e951d47ea7ec3800b12cc44735440cdc56d34973ac766240d36a01e0d0 = $this->env->getExtension("native_profiler");
        $__internal_febee1e951d47ea7ec3800b12cc44735440cdc56d34973ac766240d36a01e0d0->enter($__internal_febee1e951d47ea7ec3800b12cc44735440cdc56d34973ac766240d36a01e0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_febee1e951d47ea7ec3800b12cc44735440cdc56d34973ac766240d36a01e0d0->leave($__internal_febee1e951d47ea7ec3800b12cc44735440cdc56d34973ac766240d36a01e0d0_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1ee96a40b1b999a68584c3fe285f1b63422200ec5f03769f5b153d24ac9ee008 = $this->env->getExtension("native_profiler");
        $__internal_1ee96a40b1b999a68584c3fe285f1b63422200ec5f03769f5b153d24ac9ee008->enter($__internal_1ee96a40b1b999a68584c3fe285f1b63422200ec5f03769f5b153d24ac9ee008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_1ee96a40b1b999a68584c3fe285f1b63422200ec5f03769f5b153d24ac9ee008->leave($__internal_1ee96a40b1b999a68584c3fe285f1b63422200ec5f03769f5b153d24ac9ee008_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  86 => 21,  79 => 17,  72 => 13,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
