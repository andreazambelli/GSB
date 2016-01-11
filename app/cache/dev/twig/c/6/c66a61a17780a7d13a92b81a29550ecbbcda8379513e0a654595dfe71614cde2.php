<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_7926b513d5a1d9da7d5cf77ae937c557dd0c8383122e59344128946bb0d431fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab7adee00731e6649a147014dccad960be3aa0e9ea4a0c8675db529588f28a9d = $this->env->getExtension("native_profiler");
        $__internal_ab7adee00731e6649a147014dccad960be3aa0e9ea4a0c8675db529588f28a9d->enter($__internal_ab7adee00731e6649a147014dccad960be3aa0e9ea4a0c8675db529588f28a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab7adee00731e6649a147014dccad960be3aa0e9ea4a0c8675db529588f28a9d->leave($__internal_ab7adee00731e6649a147014dccad960be3aa0e9ea4a0c8675db529588f28a9d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d39476b25d45c9883c01db5b75ffbbaeda6c264ae8dda72ef9c7e709e28e009b = $this->env->getExtension("native_profiler");
        $__internal_d39476b25d45c9883c01db5b75ffbbaeda6c264ae8dda72ef9c7e709e28e009b->enter($__internal_d39476b25d45c9883c01db5b75ffbbaeda6c264ae8dda72ef9c7e709e28e009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d39476b25d45c9883c01db5b75ffbbaeda6c264ae8dda72ef9c7e709e28e009b->leave($__internal_d39476b25d45c9883c01db5b75ffbbaeda6c264ae8dda72ef9c7e709e28e009b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7d739f33fbe74bc960094300f37758b2a6ffbbe234e79d88a906c57b7b4710c = $this->env->getExtension("native_profiler");
        $__internal_d7d739f33fbe74bc960094300f37758b2a6ffbbe234e79d88a906c57b7b4710c->enter($__internal_d7d739f33fbe74bc960094300f37758b2a6ffbbe234e79d88a906c57b7b4710c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  ";
        // line 11
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 16
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_d7d739f33fbe74bc960094300f37758b2a6ffbbe234e79d88a906c57b7b4710c->leave($__internal_d7d739f33fbe74bc960094300f37758b2a6ffbbe234e79d88a906c57b7b4710c_prof);

    }

    // line 16
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_40e7ad29c08cb04f03df9ecb0eeaa60e15056a086f5704f524945d2d3ca091e7 = $this->env->getExtension("native_profiler");
        $__internal_40e7ad29c08cb04f03df9ecb0eeaa60e15056a086f5704f524945d2d3ca091e7->enter($__internal_40e7ad29c08cb04f03df9ecb0eeaa60e15056a086f5704f524945d2d3ca091e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_40e7ad29c08cb04f03df9ecb0eeaa60e15056a086f5704f524945d2d3ca091e7->leave($__internal_40e7ad29c08cb04f03df9ecb0eeaa60e15056a086f5704f524945d2d3ca091e7_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  78 => 16,  70 => 18,  67 => 16,  61 => 11,  58 => 9,  52 => 8,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
