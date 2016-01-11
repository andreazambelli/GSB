<?php

/* PgGsbFraisBundle:ListeFrais:listemois.html.twig */
class __TwigTemplate_d635492db3453c36d30a05b85c0f6b18477caea7083d15d5413b5405bcc1b7e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle:Home:accueil.html.twig", "PgGsbFraisBundle:ListeFrais:listemois.html.twig", 1);
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
        $__internal_64d6b2679fc723e455d3171ba764b262ac05382fca25cb5dba70c5e9896fb477 = $this->env->getExtension("native_profiler");
        $__internal_64d6b2679fc723e455d3171ba764b262ac05382fca25cb5dba70c5e9896fb477->enter($__internal_64d6b2679fc723e455d3171ba764b262ac05382fca25cb5dba70c5e9896fb477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listemois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d6b2679fc723e455d3171ba764b262ac05382fca25cb5dba70c5e9896fb477->leave($__internal_64d6b2679fc723e455d3171ba764b262ac05382fca25cb5dba70c5e9896fb477_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_95ba63513085d9fdc74ba7a97b73ea82c3b256a7f690471ee2a3900c012facf3 = $this->env->getExtension("native_profiler");
        $__internal_95ba63513085d9fdc74ba7a97b73ea82c3b256a7f690471ee2a3900c012facf3->enter($__internal_95ba63513085d9fdc74ba7a97b73ea82c3b256a7f690471ee2a3900c012facf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_95ba63513085d9fdc74ba7a97b73ea82c3b256a7f690471ee2a3900c012facf3->leave($__internal_95ba63513085d9fdc74ba7a97b73ea82c3b256a7f690471ee2a3900c012facf3_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_2a704d5e084773806c75aa6cfa2585e8b5cb61c91031bf9a7c73574452cb649b = $this->env->getExtension("native_profiler");
        $__internal_2a704d5e084773806c75aa6cfa2585e8b5cb61c91031bf9a7c73574452cb649b->enter($__internal_2a704d5e084773806c75aa6cfa2585e8b5cb61c91031bf9a7c73574452cb649b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "<div id=\"contenu\">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form method=\"post\">
      <div class=\"corpsForm\">
         
      <p>
\t 
        <label for=\"lstMois\" accesskey=\"n\">Mois : </label>
        <select id=\"lstMois\" name=\"lstMois\"> 
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesmois"]) ? $context["lesmois"] : $this->getContext($context, "lesmois")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 15
            echo "\t\t";
            $context["mois"] = $this->getAttribute($context["unMois"], "mois", array());
            // line 16
            echo "\t\t";
            $context["numAnnee"] = $this->getAttribute($context["unMois"], "numAnnee", array());
            // line 17
            echo "\t\t";
            $context["numMois"] = $this->getAttribute($context["unMois"], "numMois", array());
            // line 18
            echo "\t\t";
            if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["lemois"]) ? $context["lemois"] : $this->getContext($context, "lemois")))) {
                // line 19
                echo "\t\t\t<option selected value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "</option>
\t\t";
            } else {
                // line 21
                echo "\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "</option>
\t\t";
            }
            // line 23
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </select>
      </p>
      </div>
      <div class=\"piedForm\">
      <p>
        <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
        <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        
      </form>
";
        
        $__internal_2a704d5e084773806c75aa6cfa2585e8b5cb61c91031bf9a7c73574452cb649b->leave($__internal_2a704d5e084773806c75aa6cfa2585e8b5cb61c91031bf9a7c73574452cb649b_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listemois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  101 => 23,  91 => 21,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  65 => 14,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle:Home:accueil.html.twig" %}*/
/* {% block body %}*/
/* {% block bloc1 %}*/
/* <div id="contenu">*/
/*       <h2>Mes fiches de frais</h2>*/
/*       <h3>Mois à sélectionner : </h3>*/
/*       <form method="post">*/
/*       <div class="corpsForm">*/
/*          */
/*       <p>*/
/* 	 */
/*         <label for="lstMois" accesskey="n">Mois : </label>*/
/*         <select id="lstMois" name="lstMois"> */
/*             {% for unMois in lesmois %}*/
/* 		{% set mois = unMois.mois %}*/
/* 		{% set numAnnee = unMois.numAnnee %}*/
/* 		{% set numMois = unMois.numMois %}*/
/* 		{% if mois == lemois %}*/
/* 			<option selected value="{{mois}}">{{numMois}}/{{numAnnee}}</option>*/
/* 		{% else %}*/
/* 			<option value="{{mois}}">{{numMois}}/{{numAnnee}}</option>*/
/* 		{% endif %}*/
/* 	    {% endfor %}*/
/*         </select>*/
/*       </p>*/
/*       </div>*/
/*       <div class="piedForm">*/
/*       <p>*/
/*         <input id="ok" type="submit" value="Valider" size="20" />*/
/*         <input id="annuler" type="reset" value="Effacer" size="20" />*/
/*       </p> */
/*       </div>*/
/*         */
/*       </form>*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */
