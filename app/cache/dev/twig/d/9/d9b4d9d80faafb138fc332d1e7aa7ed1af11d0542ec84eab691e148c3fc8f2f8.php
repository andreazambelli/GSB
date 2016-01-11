<?php

/* PgGsbFraisBundle:Default:index.html.twig */
class __TwigTemplate_22f20bbb2279bcf40c4453c1cb4931e8426a04bc4f0bde93f0c18490cb827e15 extends Twig_Template
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
        $__internal_197995e0f67e3b5e764acfa1e5342affb1dd4f4ea81224edaff81a9df5b13875 = $this->env->getExtension("native_profiler");
        $__internal_197995e0f67e3b5e764acfa1e5342affb1dd4f4ea81224edaff81a9df5b13875->enter($__internal_197995e0f67e3b5e764acfa1e5342affb1dd4f4ea81224edaff81a9df5b13875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_197995e0f67e3b5e764acfa1e5342affb1dd4f4ea81224edaff81a9df5b13875->leave($__internal_197995e0f67e3b5e764acfa1e5342affb1dd4f4ea81224edaff81a9df5b13875_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
