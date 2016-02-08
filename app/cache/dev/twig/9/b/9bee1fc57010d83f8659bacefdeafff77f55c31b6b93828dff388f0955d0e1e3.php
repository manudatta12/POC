<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_9bee1fc57010d83f8659bacefdeafff77f55c31b6b93828dff388f0955d0e1e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0113225ed236712a99059b87a4bce40b9b8ebcb91a05f0bdeaaa277fc18a9138 = $this->env->getExtension("native_profiler");
        $__internal_0113225ed236712a99059b87a4bce40b9b8ebcb91a05f0bdeaaa277fc18a9138->enter($__internal_0113225ed236712a99059b87a4bce40b9b8ebcb91a05f0bdeaaa277fc18a9138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0113225ed236712a99059b87a4bce40b9b8ebcb91a05f0bdeaaa277fc18a9138->leave($__internal_0113225ed236712a99059b87a4bce40b9b8ebcb91a05f0bdeaaa277fc18a9138_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
