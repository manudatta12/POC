<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_158ad4e3c8751157e46e54e00836ba2f608602d292acf502cd55def5a5fecfae extends Twig_Template
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
        $__internal_86b75023df514f0c9ea63e1b360f0bf268cbcf0b9c639ce1f5812f3108ad7382 = $this->env->getExtension("native_profiler");
        $__internal_86b75023df514f0c9ea63e1b360f0bf268cbcf0b9c639ce1f5812f3108ad7382->enter($__internal_86b75023df514f0c9ea63e1b360f0bf268cbcf0b9c639ce1f5812f3108ad7382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b75023df514f0c9ea63e1b360f0bf268cbcf0b9c639ce1f5812f3108ad7382->leave($__internal_86b75023df514f0c9ea63e1b360f0bf268cbcf0b9c639ce1f5812f3108ad7382_prof);

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
