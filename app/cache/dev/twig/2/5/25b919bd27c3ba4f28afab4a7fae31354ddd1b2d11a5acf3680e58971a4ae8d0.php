<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_25b919bd27c3ba4f28afab4a7fae31354ddd1b2d11a5acf3680e58971a4ae8d0 extends Twig_Template
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
        $__internal_26a559d7902aa72aec59156664ba699a1a24c41ae01219ad2be9fa4cc04f9280 = $this->env->getExtension("native_profiler");
        $__internal_26a559d7902aa72aec59156664ba699a1a24c41ae01219ad2be9fa4cc04f9280->enter($__internal_26a559d7902aa72aec59156664ba699a1a24c41ae01219ad2be9fa4cc04f9280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_26a559d7902aa72aec59156664ba699a1a24c41ae01219ad2be9fa4cc04f9280->leave($__internal_26a559d7902aa72aec59156664ba699a1a24c41ae01219ad2be9fa4cc04f9280_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
