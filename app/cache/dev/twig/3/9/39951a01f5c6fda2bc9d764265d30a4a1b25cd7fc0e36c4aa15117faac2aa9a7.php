<?php

/* base.html.twig */
class __TwigTemplate_c8b7b39145c6e0dc162d5f9e7396cb35246951213ff68daae7f31e46b9e9efd4 extends Twig_Template
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
        $__internal_722287ed56fd6794d707cc201aaa8cc364e24f9ce85e78805f0ac12923ff3169 = $this->env->getExtension("native_profiler");
        $__internal_722287ed56fd6794d707cc201aaa8cc364e24f9ce85e78805f0ac12923ff3169->enter($__internal_722287ed56fd6794d707cc201aaa8cc364e24f9ce85e78805f0ac12923ff3169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_722287ed56fd6794d707cc201aaa8cc364e24f9ce85e78805f0ac12923ff3169->leave($__internal_722287ed56fd6794d707cc201aaa8cc364e24f9ce85e78805f0ac12923ff3169_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc1feff8c2a5181cd7e0ede039c30bb5248fb5a5c6b82ee68d84a5cf2820a5bf = $this->env->getExtension("native_profiler");
        $__internal_dc1feff8c2a5181cd7e0ede039c30bb5248fb5a5c6b82ee68d84a5cf2820a5bf->enter($__internal_dc1feff8c2a5181cd7e0ede039c30bb5248fb5a5c6b82ee68d84a5cf2820a5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dc1feff8c2a5181cd7e0ede039c30bb5248fb5a5c6b82ee68d84a5cf2820a5bf->leave($__internal_dc1feff8c2a5181cd7e0ede039c30bb5248fb5a5c6b82ee68d84a5cf2820a5bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32ae63fd861151bfc21fe7b454368053d5a0cb4a839f8989daa3c9c9030d3c5c = $this->env->getExtension("native_profiler");
        $__internal_32ae63fd861151bfc21fe7b454368053d5a0cb4a839f8989daa3c9c9030d3c5c->enter($__internal_32ae63fd861151bfc21fe7b454368053d5a0cb4a839f8989daa3c9c9030d3c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_32ae63fd861151bfc21fe7b454368053d5a0cb4a839f8989daa3c9c9030d3c5c->leave($__internal_32ae63fd861151bfc21fe7b454368053d5a0cb4a839f8989daa3c9c9030d3c5c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c27d42d391e6483ec9b8883ed5506c6c91be9fee86ddeb9c192ba0234433418 = $this->env->getExtension("native_profiler");
        $__internal_7c27d42d391e6483ec9b8883ed5506c6c91be9fee86ddeb9c192ba0234433418->enter($__internal_7c27d42d391e6483ec9b8883ed5506c6c91be9fee86ddeb9c192ba0234433418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c27d42d391e6483ec9b8883ed5506c6c91be9fee86ddeb9c192ba0234433418->leave($__internal_7c27d42d391e6483ec9b8883ed5506c6c91be9fee86ddeb9c192ba0234433418_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_adb1685ca5f8d48b84dc0621fc89ad4203b7b8e55ef5654d224143a20de5153a = $this->env->getExtension("native_profiler");
        $__internal_adb1685ca5f8d48b84dc0621fc89ad4203b7b8e55ef5654d224143a20de5153a->enter($__internal_adb1685ca5f8d48b84dc0621fc89ad4203b7b8e55ef5654d224143a20de5153a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_adb1685ca5f8d48b84dc0621fc89ad4203b7b8e55ef5654d224143a20de5153a->leave($__internal_adb1685ca5f8d48b84dc0621fc89ad4203b7b8e55ef5654d224143a20de5153a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
