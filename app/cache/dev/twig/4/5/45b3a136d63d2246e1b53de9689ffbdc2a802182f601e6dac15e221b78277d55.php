<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_45b3a136d63d2246e1b53de9689ffbdc2a802182f601e6dac15e221b78277d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30c278c0776b4ff124d5f7a891d9ebc82a6853cb09e1253158cadde64e672956 = $this->env->getExtension("native_profiler");
        $__internal_30c278c0776b4ff124d5f7a891d9ebc82a6853cb09e1253158cadde64e672956->enter($__internal_30c278c0776b4ff124d5f7a891d9ebc82a6853cb09e1253158cadde64e672956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c278c0776b4ff124d5f7a891d9ebc82a6853cb09e1253158cadde64e672956->leave($__internal_30c278c0776b4ff124d5f7a891d9ebc82a6853cb09e1253158cadde64e672956_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4fe0131fdb803cbbf4c72e5919f1bba72076fe42698a30a3c7fd58895f2e3de6 = $this->env->getExtension("native_profiler");
        $__internal_4fe0131fdb803cbbf4c72e5919f1bba72076fe42698a30a3c7fd58895f2e3de6->enter($__internal_4fe0131fdb803cbbf4c72e5919f1bba72076fe42698a30a3c7fd58895f2e3de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_4fe0131fdb803cbbf4c72e5919f1bba72076fe42698a30a3c7fd58895f2e3de6->leave($__internal_4fe0131fdb803cbbf4c72e5919f1bba72076fe42698a30a3c7fd58895f2e3de6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
