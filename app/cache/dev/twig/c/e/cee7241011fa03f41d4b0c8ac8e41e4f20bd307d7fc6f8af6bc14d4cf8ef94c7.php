<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_cee7241011fa03f41d4b0c8ac8e41e4f20bd307d7fc6f8af6bc14d4cf8ef94c7 extends Twig_Template
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
        $__internal_f4e3777aa5b14da7ac5989269e7c0dc37086ce972d45b2ec6085e0a5c4af18f7 = $this->env->getExtension("native_profiler");
        $__internal_f4e3777aa5b14da7ac5989269e7c0dc37086ce972d45b2ec6085e0a5c4af18f7->enter($__internal_f4e3777aa5b14da7ac5989269e7c0dc37086ce972d45b2ec6085e0a5c4af18f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_f4e3777aa5b14da7ac5989269e7c0dc37086ce972d45b2ec6085e0a5c4af18f7->leave($__internal_f4e3777aa5b14da7ac5989269e7c0dc37086ce972d45b2ec6085e0a5c4af18f7_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_f90745d605c9d72fefe48f012d74b8843599a00960da3549fae4fc6fd159db94 = $this->env->getExtension("native_profiler");
        $__internal_f90745d605c9d72fefe48f012d74b8843599a00960da3549fae4fc6fd159db94->enter($__internal_f90745d605c9d72fefe48f012d74b8843599a00960da3549fae4fc6fd159db94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_f90745d605c9d72fefe48f012d74b8843599a00960da3549fae4fc6fd159db94->leave($__internal_f90745d605c9d72fefe48f012d74b8843599a00960da3549fae4fc6fd159db94_prof);

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
