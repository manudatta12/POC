<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_f03aaade363e339e719f10521bb9f58dfdd1824e1223aa02d3fe2369769e2015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_425340263d9411c24205c121b05305f9f2884e5b6495d29e8af8668c64682c04 = $this->env->getExtension("native_profiler");
        $__internal_425340263d9411c24205c121b05305f9f2884e5b6495d29e8af8668c64682c04->enter($__internal_425340263d9411c24205c121b05305f9f2884e5b6495d29e8af8668c64682c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425340263d9411c24205c121b05305f9f2884e5b6495d29e8af8668c64682c04->leave($__internal_425340263d9411c24205c121b05305f9f2884e5b6495d29e8af8668c64682c04_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
