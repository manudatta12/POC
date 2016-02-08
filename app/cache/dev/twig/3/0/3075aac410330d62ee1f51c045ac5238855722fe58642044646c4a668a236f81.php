<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_3075aac410330d62ee1f51c045ac5238855722fe58642044646c4a668a236f81 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36b4d3880cc0f4ab301141bd88fb7a85d982a66f4451a1d042955994c7e8d88e = $this->env->getExtension("native_profiler");
        $__internal_36b4d3880cc0f4ab301141bd88fb7a85d982a66f4451a1d042955994c7e8d88e->enter($__internal_36b4d3880cc0f4ab301141bd88fb7a85d982a66f4451a1d042955994c7e8d88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b4d3880cc0f4ab301141bd88fb7a85d982a66f4451a1d042955994c7e8d88e->leave($__internal_36b4d3880cc0f4ab301141bd88fb7a85d982a66f4451a1d042955994c7e8d88e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2da8ce25a3020a18b3cb96e492d2200f04f86be723159eaa595af2c68d6a1b78 = $this->env->getExtension("native_profiler");
        $__internal_2da8ce25a3020a18b3cb96e492d2200f04f86be723159eaa595af2c68d6a1b78->enter($__internal_2da8ce25a3020a18b3cb96e492d2200f04f86be723159eaa595af2c68d6a1b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_2da8ce25a3020a18b3cb96e492d2200f04f86be723159eaa595af2c68d6a1b78->leave($__internal_2da8ce25a3020a18b3cb96e492d2200f04f86be723159eaa595af2c68d6a1b78_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
