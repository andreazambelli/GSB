<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_443974f47f7048acb4d6fdab973686d8b4e59a24942267de0050e47e411e8123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle:Home:layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle:Home:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e910cd463757a6b2e9435a0d1d6f3e79600407f0e07f87375a43faeb8968aa7 = $this->env->getExtension("native_profiler");
        $__internal_9e910cd463757a6b2e9435a0d1d6f3e79600407f0e07f87375a43faeb8968aa7->enter($__internal_9e910cd463757a6b2e9435a0d1d6f3e79600407f0e07f87375a43faeb8968aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e910cd463757a6b2e9435a0d1d6f3e79600407f0e07f87375a43faeb8968aa7->leave($__internal_9e910cd463757a6b2e9435a0d1d6f3e79600407f0e07f87375a43faeb8968aa7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c52b2fbc81ce4243d1e266c0b5909408270feafe0aca8effb917b44432dbb773 = $this->env->getExtension("native_profiler");
        $__internal_c52b2fbc81ce4243d1e266c0b5909408270feafe0aca8effb917b44432dbb773->enter($__internal_c52b2fbc81ce4243d1e266c0b5909408270feafe0aca8effb917b44432dbb773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 31
        echo "      ";
        
        $__internal_c52b2fbc81ce4243d1e266c0b5909408270feafe0aca8effb917b44432dbb773->leave($__internal_c52b2fbc81ce4243d1e266c0b5909408270feafe0aca8effb917b44432dbb773_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_4ad3b75c31a2eba46e182ecdee2678916ecbab02135d980ff128cc8c935c2cba = $this->env->getExtension("native_profiler");
        $__internal_4ad3b75c31a2eba46e182ecdee2678916ecbab02135d980ff128cc8c935c2cba->enter($__internal_4ad3b75c31a2eba46e182ecdee2678916ecbab02135d980ff128cc8c935c2cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 7
        if (array_key_exists("message", $context)) {
            // line 8
            echo "            <div class =\"erreur\">
            <ul>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "      


<form method=\"POST\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
   
    
\t\t\t<p>
       <label for=\"nom\">Login*</label>
       <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
      </p>
\t\t\t<p>
\t\t\t\t<label for=\"mdp\">Mot de passe*</label>
\t\t\t  <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
      </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>

 </div>
      ";
        
        $__internal_4ad3b75c31a2eba46e182ecdee2678916ecbab02135d980ff128cc8c935c2cba->leave($__internal_4ad3b75c31a2eba46e182ecdee2678916ecbab02135d980ff128cc8c935c2cba_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  72 => 10,  67 => 9,  64 => 8,  62 => 7,  57 => 4,  51 => 3,  44 => 31,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle:Home:layout.html.twig" %}*/
/* {% block body %}*/
/*  {% block bloc1 %}*/
/* */
/*  <div id="contenu">*/
/*       <h2>Identification utilisateur</h2>*/
/*       {%if(message is defined) %}*/
/*             <div class ="erreur">*/
/*             <ul>{{message}}</ul></div>*/
/*       {%endif%}      */
/* */
/* */
/* <form method="POST" action="{{path('pg_gsb_frais_validerconnexion')}}">*/
/*    */
/*     */
/* 			<p>*/
/*        <label for="nom">Login*</label>*/
/*        <input id="login" type="text" name="login"  size="30" maxlength="45">*/
/*       </p>*/
/* 			<p>*/
/* 				<label for="mdp">Mot de passe*</label>*/
/* 			  <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">*/
/*       </p>*/
/*          <input type="submit" value="Valider" name="valider">*/
/*          <input type="reset" value="Annuler" name="annuler"> */
/*       </p>*/
/* </form>*/
/* */
/*  </div>*/
/*       {% endblock %}*/
/*       {% endblock%}*/
/* */
