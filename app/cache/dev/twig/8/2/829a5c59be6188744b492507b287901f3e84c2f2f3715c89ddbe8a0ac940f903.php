<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_829a5c59be6188744b492507b287901f3e84c2f2f3715c89ddbe8a0ac940f903 extends Twig_Template
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
        $__internal_76dfca22ec3106af894b18a5b63b693b10922dff7e94d7b5e444cbbacbabe4ea = $this->env->getExtension("native_profiler");
        $__internal_76dfca22ec3106af894b18a5b63b693b10922dff7e94d7b5e444cbbacbabe4ea->enter($__internal_76dfca22ec3106af894b18a5b63b693b10922dff7e94d7b5e444cbbacbabe4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_76dfca22ec3106af894b18a5b63b693b10922dff7e94d7b5e444cbbacbabe4ea->leave($__internal_76dfca22ec3106af894b18a5b63b693b10922dff7e94d7b5e444cbbacbabe4ea_prof);

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
