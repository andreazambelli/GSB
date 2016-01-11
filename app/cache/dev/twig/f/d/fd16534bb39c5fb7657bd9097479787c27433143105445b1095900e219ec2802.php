<?php

/* PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig */
class __TwigTemplate_616a36da54f640125caba733cf001bcd4f25540efbf7777724fdaf45d9eed0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle:Home:accueil.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle:Home:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a42e90e70362693d23625de3f616bd08c2673af521baca4d1d1511afe32f51b = $this->env->getExtension("native_profiler");
        $__internal_1a42e90e70362693d23625de3f616bd08c2673af521baca4d1d1511afe32f51b->enter($__internal_1a42e90e70362693d23625de3f616bd08c2673af521baca4d1d1511afe32f51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a42e90e70362693d23625de3f616bd08c2673af521baca4d1d1511afe32f51b->leave($__internal_1a42e90e70362693d23625de3f616bd08c2673af521baca4d1d1511afe32f51b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_26b2d67c2951bc583f26d44aa5c9f84690ed5e9286f178c4fe15a6f423201166 = $this->env->getExtension("native_profiler");
        $__internal_26b2d67c2951bc583f26d44aa5c9f84690ed5e9286f178c4fe15a6f423201166->enter($__internal_26b2d67c2951bc583f26d44aa5c9f84690ed5e9286f178c4fe15a6f423201166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_26b2d67c2951bc583f26d44aa5c9f84690ed5e9286f178c4fe15a6f423201166->leave($__internal_26b2d67c2951bc583f26d44aa5c9f84690ed5e9286f178c4fe15a6f423201166_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_e70dc4ec1c3ca2dc81f3c9f81df6dfffde166e3ac3a273a464ba4aa4fd6d54b1 = $this->env->getExtension("native_profiler");
        $__internal_e70dc4ec1c3ca2dc81f3c9f81df6dfffde166e3ac3a273a464ba4aa4fd6d54b1->enter($__internal_e70dc4ec1c3ca2dc81f3c9f81df6dfffde166e3ac3a273a464ba4aa4fd6d54b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "  ";
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreur.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 4)->display(array_merge($context, array("leserreurs" => (isset($context["leserreursforfait"]) ? $context["leserreursforfait"] : $this->getContext($context, "leserreursforfait")))));
        // line 5
        echo "  ";
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 5)->display(array_merge($context, array("lesfraisforfait" => (isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")), "nummois" => (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "numannee" => (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")))));
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:erreur.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 7)->display(array_merge($context, array("leserreurs" => (isset($context["leserreurshorsforfait"]) ? $context["leserreurshorsforfait"] : $this->getContext($context, "leserreurshorsforfait")))));
        // line 8
        $this->loadTemplate("PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig", "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig", 8)->display(array_merge($context, array("lesfraishorsforfait" => (isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")))));
        
        $__internal_e70dc4ec1c3ca2dc81f3c9f81df6dfffde166e3ac3a273a464ba4aa4fd6d54b1->leave($__internal_e70dc4ec1c3ca2dc81f3c9f81df6dfffde166e3ac3a273a464ba4aa4fd6d54b1_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirtouslesfrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle:Home:accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/*   {% include 'PgGsbFraisBundle:SaisirFrais:erreur.html.twig' with {'leserreurs':leserreursforfait} %}*/
/*   {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig' with {'lesfraisforfait':lesfraisforfait,'nummois':nummois,'numannee':numannee} %}*/
/* */
/* {% include 'PgGsbFraisBundle:SaisirFrais:erreur.html.twig' with {'leserreurs':leserreurshorsforfait} %}*/
/* {% include 'PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig' with {'lesfraishorsforfait':lesfraishorsforfait} %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
