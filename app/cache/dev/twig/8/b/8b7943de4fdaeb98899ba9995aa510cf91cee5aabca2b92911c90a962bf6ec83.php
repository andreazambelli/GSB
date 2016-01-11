<?php

/* PgGsbFraisBundle:SaisirFrais:erreur.html.twig */
class __TwigTemplate_7dc7bd573cc77ea585d072034c8adc6e4f94946be19a72dd41a5324237c80d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_853c9c7d36f2b4176f36db29f834a8b3f47a252c2cff60e0737ba89b5107e78c = $this->env->getExtension("native_profiler");
        $__internal_853c9c7d36f2b4176f36db29f834a8b3f47a252c2cff60e0737ba89b5107e78c->enter($__internal_853c9c7d36f2b4176f36db29f834a8b3f47a252c2cff60e0737ba89b5107e78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:erreur.html.twig"));

        // line 1
        echo "<div class=\"erreur\">
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leserreurs"]) ? $context["leserreurs"] : $this->getContext($context, "leserreurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
            // line 4
            echo "
     <li>";
            // line 5
            echo twig_escape_filter($this->env, $context["erreur"], "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
</div>
";
        
        $__internal_853c9c7d36f2b4176f36db29f834a8b3f47a252c2cff60e0737ba89b5107e78c->leave($__internal_853c9c7d36f2b4176f36db29f834a8b3f47a252c2cff60e0737ba89b5107e78c_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:erreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="erreur">*/
/* <ul>*/
/*     {% for erreur in leserreurs %}*/
/* */
/*      <li>{{erreur}}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* </div>*/
/* */
