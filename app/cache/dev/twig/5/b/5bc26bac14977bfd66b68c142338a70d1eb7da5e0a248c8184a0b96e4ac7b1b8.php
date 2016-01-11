<?php

/* base.html.twig */
class __TwigTemplate_9dba2da99a795073941f429cc6e5a5dd00f1515a7493030bd4683b978dd27271 extends Twig_Template
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
        $__internal_10aed34e6d621355a55908b2fc1049a977759180c89687eff9945957cfa6c4a3 = $this->env->getExtension("native_profiler");
        $__internal_10aed34e6d621355a55908b2fc1049a977759180c89687eff9945957cfa6c4a3->enter($__internal_10aed34e6d621355a55908b2fc1049a977759180c89687eff9945957cfa6c4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_10aed34e6d621355a55908b2fc1049a977759180c89687eff9945957cfa6c4a3->leave($__internal_10aed34e6d621355a55908b2fc1049a977759180c89687eff9945957cfa6c4a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_270a48362da4d15f55a17c8a4cd2b29a41c10463c6d11fa0b78d20134024df64 = $this->env->getExtension("native_profiler");
        $__internal_270a48362da4d15f55a17c8a4cd2b29a41c10463c6d11fa0b78d20134024df64->enter($__internal_270a48362da4d15f55a17c8a4cd2b29a41c10463c6d11fa0b78d20134024df64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_270a48362da4d15f55a17c8a4cd2b29a41c10463c6d11fa0b78d20134024df64->leave($__internal_270a48362da4d15f55a17c8a4cd2b29a41c10463c6d11fa0b78d20134024df64_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9587708fe5d7fc87070e16c8b722b7ead53f2fac4d33491e3149fa6a3a15bd9 = $this->env->getExtension("native_profiler");
        $__internal_e9587708fe5d7fc87070e16c8b722b7ead53f2fac4d33491e3149fa6a3a15bd9->enter($__internal_e9587708fe5d7fc87070e16c8b722b7ead53f2fac4d33491e3149fa6a3a15bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9587708fe5d7fc87070e16c8b722b7ead53f2fac4d33491e3149fa6a3a15bd9->leave($__internal_e9587708fe5d7fc87070e16c8b722b7ead53f2fac4d33491e3149fa6a3a15bd9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aaea273c53d54894d27c760d3c6f52e1a25a72f34443219085d3fc3e2d2f191 = $this->env->getExtension("native_profiler");
        $__internal_6aaea273c53d54894d27c760d3c6f52e1a25a72f34443219085d3fc3e2d2f191->enter($__internal_6aaea273c53d54894d27c760d3c6f52e1a25a72f34443219085d3fc3e2d2f191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6aaea273c53d54894d27c760d3c6f52e1a25a72f34443219085d3fc3e2d2f191->leave($__internal_6aaea273c53d54894d27c760d3c6f52e1a25a72f34443219085d3fc3e2d2f191_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_711f930cee5d9a60170fb8658d4f92ac01de9cf75e68eab461762e0d8626aa29 = $this->env->getExtension("native_profiler");
        $__internal_711f930cee5d9a60170fb8658d4f92ac01de9cf75e68eab461762e0d8626aa29->enter($__internal_711f930cee5d9a60170fb8658d4f92ac01de9cf75e68eab461762e0d8626aa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_711f930cee5d9a60170fb8658d4f92ac01de9cf75e68eab461762e0d8626aa29->leave($__internal_711f930cee5d9a60170fb8658d4f92ac01de9cf75e68eab461762e0d8626aa29_prof);

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
