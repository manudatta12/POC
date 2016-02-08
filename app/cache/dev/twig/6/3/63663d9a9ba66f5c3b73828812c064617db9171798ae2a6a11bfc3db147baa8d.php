<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_63663d9a9ba66f5c3b73828812c064617db9171798ae2a6a11bfc3db147baa8d extends Twig_Template
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
        $__internal_f3e791fc96e941eb1396dc70a0c9119a627138e957420a8a953a32dbd582c986 = $this->env->getExtension("native_profiler");
        $__internal_f3e791fc96e941eb1396dc70a0c9119a627138e957420a8a953a32dbd582c986->enter($__internal_f3e791fc96e941eb1396dc70a0c9119a627138e957420a8a953a32dbd582c986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3e791fc96e941eb1396dc70a0c9119a627138e957420a8a953a32dbd582c986->leave($__internal_f3e791fc96e941eb1396dc70a0c9119a627138e957420a8a953a32dbd582c986_prof);

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
