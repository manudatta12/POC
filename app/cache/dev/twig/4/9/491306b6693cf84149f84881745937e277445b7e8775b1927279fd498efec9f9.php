<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_491306b6693cf84149f84881745937e277445b7e8775b1927279fd498efec9f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f536055603fa6088f4acc9fe1e796e77787bbf04d9a1e93528bc415cdee5911 = $this->env->getExtension("native_profiler");
        $__internal_3f536055603fa6088f4acc9fe1e796e77787bbf04d9a1e93528bc415cdee5911->enter($__internal_3f536055603fa6088f4acc9fe1e796e77787bbf04d9a1e93528bc415cdee5911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f536055603fa6088f4acc9fe1e796e77787bbf04d9a1e93528bc415cdee5911->leave($__internal_3f536055603fa6088f4acc9fe1e796e77787bbf04d9a1e93528bc415cdee5911_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
