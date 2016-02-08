<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_94c56498d99940e9d51256bc238561557f3ebe201888e8dc7f6e3db220628b15 extends Twig_Template
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
        $__internal_bfe741dabb5c03b7cf88a9fdd651c418c8682def52d828b2b2548f96aeea8fc9 = $this->env->getExtension("native_profiler");
        $__internal_bfe741dabb5c03b7cf88a9fdd651c418c8682def52d828b2b2548f96aeea8fc9->enter($__internal_bfe741dabb5c03b7cf88a9fdd651c418c8682def52d828b2b2548f96aeea8fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe741dabb5c03b7cf88a9fdd651c418c8682def52d828b2b2548f96aeea8fc9->leave($__internal_bfe741dabb5c03b7cf88a9fdd651c418c8682def52d828b2b2548f96aeea8fc9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0352746d78035ed57f2c3f998e2a833969288f46b1a0064457f3c18742c92fc5 = $this->env->getExtension("native_profiler");
        $__internal_0352746d78035ed57f2c3f998e2a833969288f46b1a0064457f3c18742c92fc5->enter($__internal_0352746d78035ed57f2c3f998e2a833969288f46b1a0064457f3c18742c92fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_0352746d78035ed57f2c3f998e2a833969288f46b1a0064457f3c18742c92fc5->leave($__internal_0352746d78035ed57f2c3f998e2a833969288f46b1a0064457f3c18742c92fc5_prof);

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
