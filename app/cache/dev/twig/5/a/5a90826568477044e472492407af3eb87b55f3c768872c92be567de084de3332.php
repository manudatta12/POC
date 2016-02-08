<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_5a90826568477044e472492407af3eb87b55f3c768872c92be567de084de3332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_303479e02386a2f198ad4710e490b8a92e8c2ee8d7c20fe7cf04b1e98a6e8e0f = $this->env->getExtension("native_profiler");
        $__internal_303479e02386a2f198ad4710e490b8a92e8c2ee8d7c20fe7cf04b1e98a6e8e0f->enter($__internal_303479e02386a2f198ad4710e490b8a92e8c2ee8d7c20fe7cf04b1e98a6e8e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303479e02386a2f198ad4710e490b8a92e8c2ee8d7c20fe7cf04b1e98a6e8e0f->leave($__internal_303479e02386a2f198ad4710e490b8a92e8c2ee8d7c20fe7cf04b1e98a6e8e0f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
