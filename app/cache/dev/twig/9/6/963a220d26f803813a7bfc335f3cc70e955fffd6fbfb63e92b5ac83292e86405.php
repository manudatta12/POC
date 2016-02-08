<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_963a220d26f803813a7bfc335f3cc70e955fffd6fbfb63e92b5ac83292e86405 extends Twig_Template
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
        $__internal_d1afe8d63ab8f4f7330f4e0208b8777b4ba571ee459cedf2d850a754298f73c9 = $this->env->getExtension("native_profiler");
        $__internal_d1afe8d63ab8f4f7330f4e0208b8777b4ba571ee459cedf2d850a754298f73c9->enter($__internal_d1afe8d63ab8f4f7330f4e0208b8777b4ba571ee459cedf2d850a754298f73c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1afe8d63ab8f4f7330f4e0208b8777b4ba571ee459cedf2d850a754298f73c9->leave($__internal_d1afe8d63ab8f4f7330f4e0208b8777b4ba571ee459cedf2d850a754298f73c9_prof);

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
