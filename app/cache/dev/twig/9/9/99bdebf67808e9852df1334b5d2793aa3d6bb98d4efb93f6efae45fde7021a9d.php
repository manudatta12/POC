<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_99bdebf67808e9852df1334b5d2793aa3d6bb98d4efb93f6efae45fde7021a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bc15aa1c54b57b0e56c20f8f3d0f1b49a2ef7fda7c1d63c8b743527f69f7d9c = $this->env->getExtension("native_profiler");
        $__internal_7bc15aa1c54b57b0e56c20f8f3d0f1b49a2ef7fda7c1d63c8b743527f69f7d9c->enter($__internal_7bc15aa1c54b57b0e56c20f8f3d0f1b49a2ef7fda7c1d63c8b743527f69f7d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc15aa1c54b57b0e56c20f8f3d0f1b49a2ef7fda7c1d63c8b743527f69f7d9c->leave($__internal_7bc15aa1c54b57b0e56c20f8f3d0f1b49a2ef7fda7c1d63c8b743527f69f7d9c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
