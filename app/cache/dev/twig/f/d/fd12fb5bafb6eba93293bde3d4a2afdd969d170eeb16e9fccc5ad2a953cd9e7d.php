<?php

/* SonataAdminBundle:CRUD:list__action_show.html.twig */
class __TwigTemplate_fd12fb5bafb6eba93293bde3d4a2afdd969d170eeb16e9fccc5ad2a953cd9e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55a61eaea8453e36ff01e59199e5c12edd57c5d4413b915bb5fe6ddb287ca7af = $this->env->getExtension("native_profiler");
        $__internal_55a61eaea8453e36ff01e59199e5c12edd57c5d4413b915bb5fe6ddb287ca7af->enter($__internal_55a61eaea8453e36ff01e59199e5c12edd57c5d4413b915bb5fe6ddb287ca7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_show.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "VIEW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"glyphicon glyphicon-zoom-in\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_55a61eaea8453e36ff01e59199e5c12edd57c5d4413b915bb5fe6ddb287ca7af->leave($__internal_55a61eaea8453e36ff01e59199e5c12edd57c5d4413b915bb5fe6ddb287ca7af_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }
}
