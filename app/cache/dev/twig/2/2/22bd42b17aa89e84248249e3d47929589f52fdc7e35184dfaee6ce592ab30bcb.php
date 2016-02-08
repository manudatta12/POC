<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_22bd42b17aa89e84248249e3d47929589f52fdc7e35184dfaee6ce592ab30bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f41bba33e133e666f3517e100ba74fffcdbc0aa3e841878855eedfe9b6d62c1 = $this->env->getExtension("native_profiler");
        $__internal_8f41bba33e133e666f3517e100ba74fffcdbc0aa3e841878855eedfe9b6d62c1->enter($__internal_8f41bba33e133e666f3517e100ba74fffcdbc0aa3e841878855eedfe9b6d62c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f41bba33e133e666f3517e100ba74fffcdbc0aa3e841878855eedfe9b6d62c1->leave($__internal_8f41bba33e133e666f3517e100ba74fffcdbc0aa3e841878855eedfe9b6d62c1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ac4f33d2e2c1acde8de6188f4564d830d9a6fccad54ae221bdf889ddcadda934 = $this->env->getExtension("native_profiler");
        $__internal_ac4f33d2e2c1acde8de6188f4564d830d9a6fccad54ae221bdf889ddcadda934->enter($__internal_ac4f33d2e2c1acde8de6188f4564d830d9a6fccad54ae221bdf889ddcadda934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_ac4f33d2e2c1acde8de6188f4564d830d9a6fccad54ae221bdf889ddcadda934->leave($__internal_ac4f33d2e2c1acde8de6188f4564d830d9a6fccad54ae221bdf889ddcadda934_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
