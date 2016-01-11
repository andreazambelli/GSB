<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_97c80c3bb00621b68c2d2c1149b294e1ec2f2f2f9d8c5ec8e845622659380701 extends Twig_Template
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
        $__internal_73f61cc37c741e171b0d473b32956990c68f2d8ea5a790c3662133924c7ba4ce = $this->env->getExtension("native_profiler");
        $__internal_73f61cc37c741e171b0d473b32956990c68f2d8ea5a790c3662133924c7ba4ce->enter($__internal_73f61cc37c741e171b0d473b32956990c68f2d8ea5a790c3662133924c7ba4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
\t<body>
\tHello ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
\t</body>
</html>


";
        
        $__internal_73f61cc37c741e171b0d473b32956990c68f2d8ea5a790c3662133924c7ba4ce->leave($__internal_73f61cc37c741e171b0d473b32956990c68f2d8ea5a790c3662133924c7ba4ce_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* 	<body>*/
/* 	Hello {{ name }}!*/
/* 	</body>*/
/* </html>*/
/* */
/* */
/* */
