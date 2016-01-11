<?php

/* PgGsbFraisBundle:Home:layout.html.twig */
class __TwigTemplate_9a9ec4924f2ff574916517ff5b6eaab1f210eb7eb58c698d70f678f57420f60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89b597c856bc530bd79d1038559d4f0bb65a5136d5e04e53c8871a2d4da270e3 = $this->env->getExtension("native_profiler");
        $__internal_89b597c856bc530bd79d1038559d4f0bb65a5136d5e04e53c8871a2d4da270e3->enter($__internal_89b597c856bc530bd79d1038559d4f0bb65a5136d5e04e53c8871a2d4da270e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:layout.html.twig"));

        // line 1
        echo "  <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
         \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
  <html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
    <head>
      <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
      <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
      <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
      <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
    </head>
    <body>
      <div id=\"page\">
        <div id=\"entete\">
          <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
          <h1>Suivi du remboursement des frais</h1>
        </div>
      </div>
            ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

";
        
        $__internal_89b597c856bc530bd79d1038559d4f0bb65a5136d5e04e53c8871a2d4da270e3->leave($__internal_89b597c856bc530bd79d1038559d4f0bb65a5136d5e04e53c8871a2d4da270e3_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9ee71a2b7509fbc79993738003ed2c4fa5333573a36e83873513ddf2c72ee40 = $this->env->getExtension("native_profiler");
        $__internal_a9ee71a2b7509fbc79993738003ed2c4fa5333573a36e83873513ddf2c72ee40->enter($__internal_a9ee71a2b7509fbc79993738003ed2c4fa5333573a36e83873513ddf2c72ee40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "            ";
        
        $__internal_a9ee71a2b7509fbc79993738003ed2c4fa5333573a36e83873513ddf2c72ee40->leave($__internal_a9ee71a2b7509fbc79993738003ed2c4fa5333573a36e83873513ddf2c72ee40_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4dab5d8171c4ae98857f4ecf9ab8e2f27ce8e67c84e20fdf6afc87c44703bf2 = $this->env->getExtension("native_profiler");
        $__internal_a4dab5d8171c4ae98857f4ecf9ab8e2f27ce8e67c84e20fdf6afc87c44703bf2->enter($__internal_a4dab5d8171c4ae98857f4ecf9ab8e2f27ce8e67c84e20fdf6afc87c44703bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "                    ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "            ";
        
        $__internal_a4dab5d8171c4ae98857f4ecf9ab8e2f27ce8e67c84e20fdf6afc87c44703bf2->leave($__internal_a4dab5d8171c4ae98857f4ecf9ab8e2f27ce8e67c84e20fdf6afc87c44703bf2_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_cf720bf9efffce8588b04fb8f602f9c25c9ed9aeb0d1fc7ca0ca4a8db2041420 = $this->env->getExtension("native_profiler");
        $__internal_cf720bf9efffce8588b04fb8f602f9c25c9ed9aeb0d1fc7ca0ca4a8db2041420->enter($__internal_cf720bf9efffce8588b04fb8f602f9c25c9ed9aeb0d1fc7ca0ca4a8db2041420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                    ";
        
        $__internal_cf720bf9efffce8588b04fb8f602f9c25c9ed9aeb0d1fc7ca0ca4a8db2041420->leave($__internal_cf720bf9efffce8588b04fb8f602f9c25c9ed9aeb0d1fc7ca0ca4a8db2041420_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  93 => 20,  86 => 22,  83 => 20,  77 => 19,  70 => 18,  64 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/*   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"*/
/*          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/*   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">*/
/*     <head>*/
/*       <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>*/
/*       <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*       <link href="{{ asset('bundles/gsbfrais/styles/styles.css')}}" rel="stylesheet" type="text/css" />*/
/*       <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/*     </head>*/
/*     <body>*/
/*       <div id="page">*/
/*         <div id="entete">*/
/*           <img src="{{ asset ('bundles/gsbfrais/images/logo.jpg')}}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />*/
/*           <h1>Suivi du remboursement des frais</h1>*/
/*         </div>*/
/*       </div>*/
/*             {% block menu %}*/
/*             {% endblock %}*/
/*             {% block body %}*/
/*                     {% block bloc1 %}*/
/*                     {% endblock %}*/
/*             {% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
/* */
