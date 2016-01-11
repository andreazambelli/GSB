<?php

/* ::layout.html.twig */
class __TwigTemplate_ac94ed9d7c6428863c1c5a3116bf61b9f1c16fd956ece9ef6980043687d26621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc23b2005a7c63078ceb225fbb47e9f44567676494f1c4c221121cbe3e3fed75 = $this->env->getExtension("native_profiler");
        $__internal_bc23b2005a7c63078ceb225fbb47e9f44567676494f1c4c221121cbe3e3fed75->enter($__internal_bc23b2005a7c63078ceb225fbb47e9f44567676494f1c4c221121cbe3e3fed75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 39
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "
</body>
</html>

";
        
        $__internal_bc23b2005a7c63078ceb225fbb47e9f44567676494f1c4c221121cbe3e3fed75->leave($__internal_bc23b2005a7c63078ceb225fbb47e9f44567676494f1c4c221121cbe3e3fed75_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_888ee8316e5a969cb4ce2112c24e19dd6a7b8d8de115bfb6a05d793404279595 = $this->env->getExtension("native_profiler");
        $__internal_888ee8316e5a969cb4ce2112c24e19dd6a7b8d8de115bfb6a05d793404279595->enter($__internal_888ee8316e5a969cb4ce2112c24e19dd6a7b8d8de115bfb6a05d793404279595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_888ee8316e5a969cb4ce2112c24e19dd6a7b8d8de115bfb6a05d793404279595->leave($__internal_888ee8316e5a969cb4ce2112c24e19dd6a7b8d8de115bfb6a05d793404279595_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da325dc8dc43b02f567e68d41552a1afb0233320695a6a43a6c9bb2eab846d0d = $this->env->getExtension("native_profiler");
        $__internal_da325dc8dc43b02f567e68d41552a1afb0233320695a6a43a6c9bb2eab846d0d->enter($__internal_da325dc8dc43b02f567e68d41552a1afb0233320695a6a43a6c9bb2eab846d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_da325dc8dc43b02f567e68d41552a1afb0233320695a6a43a6c9bb2eab846d0d->leave($__internal_da325dc8dc43b02f567e68d41552a1afb0233320695a6a43a6c9bb2eab846d0d_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1f5a55a573e3bcbb6601ff966ba30ba3537dfb1a64d8452666e4f0ee5a83ea8 = $this->env->getExtension("native_profiler");
        $__internal_d1f5a55a573e3bcbb6601ff966ba30ba3537dfb1a64d8452666e4f0ee5a83ea8->enter($__internal_d1f5a55a573e3bcbb6601ff966ba30ba3537dfb1a64d8452666e4f0ee5a83ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "        ";
        
        $__internal_d1f5a55a573e3bcbb6601ff966ba30ba3537dfb1a64d8452666e4f0ee5a83ea8->leave($__internal_d1f5a55a573e3bcbb6601ff966ba30ba3537dfb1a64d8452666e4f0ee5a83ea8_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebcf28fbadf5cddc51b680c84b9a61deefc551841147a21c00c579a16f67635b = $this->env->getExtension("native_profiler");
        $__internal_ebcf28fbadf5cddc51b680c84b9a61deefc551841147a21c00c579a16f67635b->enter($__internal_ebcf28fbadf5cddc51b680c84b9a61deefc551841147a21c00c579a16f67635b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    ";
        // line 56
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_ebcf28fbadf5cddc51b680c84b9a61deefc551841147a21c00c579a16f67635b->leave($__internal_ebcf28fbadf5cddc51b680c84b9a61deefc551841147a21c00c579a16f67635b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 56,  158 => 55,  152 => 54,  145 => 43,  139 => 42,  131 => 11,  129 => 10,  123 => 9,  111 => 7,  100 => 59,  98 => 54,  91 => 50,  83 => 44,  81 => 42,  75 => 39,  68 => 35,  64 => 34,  41 => 13,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony2,*/
/*         et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
