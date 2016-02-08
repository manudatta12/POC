<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_6d16bb0d883672e24f2b3d4144b8a033f51783c9986d68abe43ba4eca28409b3 extends Twig_Template
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
        $__internal_74f8c87d56a2742ac38bda53040b7388da78e81fafacd1b4f87ea0e5d2eae26b = $this->env->getExtension("native_profiler");
        $__internal_74f8c87d56a2742ac38bda53040b7388da78e81fafacd1b4f87ea0e5d2eae26b->enter($__internal_74f8c87d56a2742ac38bda53040b7388da78e81fafacd1b4f87ea0e5d2eae26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f8c87d56a2742ac38bda53040b7388da78e81fafacd1b4f87ea0e5d2eae26b->leave($__internal_74f8c87d56a2742ac38bda53040b7388da78e81fafacd1b4f87ea0e5d2eae26b_prof);

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
