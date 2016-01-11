<?php

/* PgGsbFraisBundle:Home:accueil.html.twig */
class __TwigTemplate_9f0be45191bde2d83fc33c65b13feb95639adb7fc2d90356717ade83e62b0a73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle:Home:layout.html.twig", "PgGsbFraisBundle:Home:accueil.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle:Home:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445686cfa93a1cf3c6d9b82409c54cebe4111bb460db478b6bc9655c7ec56015 = $this->env->getExtension("native_profiler");
        $__internal_445686cfa93a1cf3c6d9b82409c54cebe4111bb460db478b6bc9655c7ec56015->enter($__internal_445686cfa93a1cf3c6d9b82409c54cebe4111bb460db478b6bc9655c7ec56015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445686cfa93a1cf3c6d9b82409c54cebe4111bb460db478b6bc9655c7ec56015->leave($__internal_445686cfa93a1cf3c6d9b82409c54cebe4111bb460db478b6bc9655c7ec56015_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ba1200ade2c3e6617b103500d88b3f84302c8fa0bf646befdc66d88947cf226 = $this->env->getExtension("native_profiler");
        $__internal_2ba1200ade2c3e6617b103500d88b3f84302c8fa0bf646befdc66d88947cf226->enter($__internal_2ba1200ade2c3e6617b103500d88b3f84302c8fa0bf646befdc66d88947cf226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    <div id=\"menuGauche\">
     <div id=\"infosUtil\">
        <h3>
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                                  Visiteur: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>
\t\t\t\t  Immatriculation:";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "immat"), "method"), "html", null, true);
            echo "<br>
            ";
        }
        // line 10
        echo "        </h3>
    
      </div>  
        <ul id=\"menuList\">
           <li class=\"smenu\">
              <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pg_gsb_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("pg_gsb_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
 \t   <li class=\"smenu\">
              <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
            <li class=\"smenu\">
              <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("pg_gsb_validerfraishorsforfait");
        echo "\" title=\"Valider les frais \">Valider fiche de frais</a>
         </ul>
        
    </div>

    ";
        
        $__internal_2ba1200ade2c3e6617b103500d88b3f84302c8fa0bf646befdc66d88947cf226->leave($__internal_2ba1200ade2c3e6617b103500d88b3f84302c8fa0bf646befdc66d88947cf226_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  76 => 21,  70 => 18,  64 => 15,  57 => 10,  52 => 8,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/*     {% extends "PgGsbFraisBundle:Home:layout.html.twig" %}*/
/*     {% block menu %}*/
/*     <div id="menuGauche">*/
/*      <div id="infosUtil">*/
/*         <h3>*/
/*             {%if(app.session.get('nom') is defined)%}*/
/*                                   Visiteur: bonjour {{app.session.get('nom')}}<br>*/
/* 				  Immatriculation:{{app.session.get('immat')}}<br>*/
/*             {%endif%}*/
/*         </h3>*/
/*     */
/*       </div>  */
/*         <ul id="menuList">*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_saisirfrais')}}" title="Saisie fiche de frais ">Saisie fiche de frais</a>*/
/*            </li>*/
/*            <li class="smenu">*/
/*               <a href="{{path('pg_gsb_listefrais')}}" title="Consultation de mes fiches de frais">Mes fiches de frais</a>*/
/*            </li>*/
/*  	   <li class="smenu">*/
/*               <a href="{{path('pg_gsb_frais_deconnexion')}}" title="Se déconnecter">Déconnexion</a>*/
/*            </li>*/
/*             <li class="smenu">*/
/*               <a href="{{path('pg_gsb_validerfraishorsforfait')}}" title="Valider les frais ">Valider fiche de frais</a>*/
/*          </ul>*/
/*         */
/*     </div>*/
/* */
/*     {% endblock%}*/
/* */
