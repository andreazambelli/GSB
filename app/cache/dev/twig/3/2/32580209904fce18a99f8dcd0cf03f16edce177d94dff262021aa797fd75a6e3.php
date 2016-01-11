<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_ee7ec942024644a407f6d0c53f0865b296ce737511443373326c3c1499949ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 1);
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
        $__internal_f6b7a4f0dd1004e4d5aca34bbc7a7a0cb41005f918e5743907bd85caba27472b = $this->env->getExtension("native_profiler");
        $__internal_f6b7a4f0dd1004e4d5aca34bbc7a7a0cb41005f918e5743907bd85caba27472b->enter($__internal_f6b7a4f0dd1004e4d5aca34bbc7a7a0cb41005f918e5743907bd85caba27472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b7a4f0dd1004e4d5aca34bbc7a7a0cb41005f918e5743907bd85caba27472b->leave($__internal_f6b7a4f0dd1004e4d5aca34bbc7a7a0cb41005f918e5743907bd85caba27472b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2c6da973709a8deafedcd4832a68e7eba105004b943cd5c0bdb44a1a4b953f5 = $this->env->getExtension("native_profiler");
        $__internal_b2c6da973709a8deafedcd4832a68e7eba105004b943cd5c0bdb44a1a4b953f5->enter($__internal_b2c6da973709a8deafedcd4832a68e7eba105004b943cd5c0bdb44a1a4b953f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b2c6da973709a8deafedcd4832a68e7eba105004b943cd5c0bdb44a1a4b953f5->leave($__internal_b2c6da973709a8deafedcd4832a68e7eba105004b943cd5c0bdb44a1a4b953f5_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c2aeca070c35b897f673950d2b05580232642bbe99db4f6d56c17464a5fcbc81 = $this->env->getExtension("native_profiler");
        $__internal_c2aeca070c35b897f673950d2b05580232642bbe99db4f6d56c17464a5fcbc81->enter($__internal_c2aeca070c35b897f673950d2b05580232642bbe99db4f6d56c17464a5fcbc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "      <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>

";
        
        $__internal_c2aeca070c35b897f673950d2b05580232642bbe99db4f6d56c17464a5fcbc81->leave($__internal_c2aeca070c35b897f673950d2b05580232642bbe99db4f6d56c17464a5fcbc81_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  92 => 21,  84 => 18,  80 => 17,  75 => 15,  71 => 14,  68 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
/* */
