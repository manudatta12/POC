<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_e42fb509f55cdbf89e4d714d0aad14e5f7c3dbbf607361beaa2bde73d0c46d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42a1fa0507422853d62dae23b8a0765a8506a6a12de9c65fc1c88cf2ae1afd06 = $this->env->getExtension("native_profiler");
        $__internal_42a1fa0507422853d62dae23b8a0765a8506a6a12de9c65fc1c88cf2ae1afd06->enter($__internal_42a1fa0507422853d62dae23b8a0765a8506a6a12de9c65fc1c88cf2ae1afd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a1fa0507422853d62dae23b8a0765a8506a6a12de9c65fc1c88cf2ae1afd06->leave($__internal_42a1fa0507422853d62dae23b8a0765a8506a6a12de9c65fc1c88cf2ae1afd06_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }
}
