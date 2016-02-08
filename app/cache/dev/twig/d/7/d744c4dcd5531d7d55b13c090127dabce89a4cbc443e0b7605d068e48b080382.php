<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_d744c4dcd5531d7d55b13c090127dabce89a4cbc443e0b7605d068e48b080382 extends Twig_Template
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
        $__internal_9b7fd9068773991b9ee13a74faca725f6e3a3dcf7ea1373f6c08a8945efb3965 = $this->env->getExtension("native_profiler");
        $__internal_9b7fd9068773991b9ee13a74faca725f6e3a3dcf7ea1373f6c08a8945efb3965->enter($__internal_9b7fd9068773991b9ee13a74faca725f6e3a3dcf7ea1373f6c08a8945efb3965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7fd9068773991b9ee13a74faca725f6e3a3dcf7ea1373f6c08a8945efb3965->leave($__internal_9b7fd9068773991b9ee13a74faca725f6e3a3dcf7ea1373f6c08a8945efb3965_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_082d19b9363a97fe8824563b75d3cdd8cedfc2f17b0f87104d27e2c05f1f70b1 = $this->env->getExtension("native_profiler");
        $__internal_082d19b9363a97fe8824563b75d3cdd8cedfc2f17b0f87104d27e2c05f1f70b1->enter($__internal_082d19b9363a97fe8824563b75d3cdd8cedfc2f17b0f87104d27e2c05f1f70b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_082d19b9363a97fe8824563b75d3cdd8cedfc2f17b0f87104d27e2c05f1f70b1->leave($__internal_082d19b9363a97fe8824563b75d3cdd8cedfc2f17b0f87104d27e2c05f1f70b1_prof);

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
