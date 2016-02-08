<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_123a9ea801653bdda4cb3af9b96b312563f7c499c0cf086372fe39f3f4f67824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c1a167e914e9c110e12441a15c9d8c8a3e16370feccb841611223ae28cc8b8f = $this->env->getExtension("native_profiler");
        $__internal_5c1a167e914e9c110e12441a15c9d8c8a3e16370feccb841611223ae28cc8b8f->enter($__internal_5c1a167e914e9c110e12441a15c9d8c8a3e16370feccb841611223ae28cc8b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_5c1a167e914e9c110e12441a15c9d8c8a3e16370feccb841611223ae28cc8b8f->leave($__internal_5c1a167e914e9c110e12441a15c9d8c8a3e16370feccb841611223ae28cc8b8f_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_217410abc163ce8c6212a2290b5d76708f96b6e2a340bd9494b23efa3b5e8ebb = $this->env->getExtension("native_profiler");
        $__internal_217410abc163ce8c6212a2290b5d76708f96b6e2a340bd9494b23efa3b5e8ebb->enter($__internal_217410abc163ce8c6212a2290b5d76708f96b6e2a340bd9494b23efa3b5e8ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_217410abc163ce8c6212a2290b5d76708f96b6e2a340bd9494b23efa3b5e8ebb->leave($__internal_217410abc163ce8c6212a2290b5d76708f96b6e2a340bd9494b23efa3b5e8ebb_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }
}
