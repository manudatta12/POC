<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_2b12f47b6c7a06c3da706dbb7dd058ac07625f96cbdda239d52b1f5000df3c9e extends Twig_Template
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
        $__internal_12d75492db7d2fc263d8c4c00d6a2b35b9dd23675a471977956dd4bcecae6926 = $this->env->getExtension("native_profiler");
        $__internal_12d75492db7d2fc263d8c4c00d6a2b35b9dd23675a471977956dd4bcecae6926->enter($__internal_12d75492db7d2fc263d8c4c00d6a2b35b9dd23675a471977956dd4bcecae6926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d75492db7d2fc263d8c4c00d6a2b35b9dd23675a471977956dd4bcecae6926->leave($__internal_12d75492db7d2fc263d8c4c00d6a2b35b9dd23675a471977956dd4bcecae6926_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e41fb0c3084766c261708568e005580ffc2bd094b6e655d1c663c510ba5c2706 = $this->env->getExtension("native_profiler");
        $__internal_e41fb0c3084766c261708568e005580ffc2bd094b6e655d1c663c510ba5c2706->enter($__internal_e41fb0c3084766c261708568e005580ffc2bd094b6e655d1c663c510ba5c2706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_e41fb0c3084766c261708568e005580ffc2bd094b6e655d1c663c510ba5c2706->leave($__internal_e41fb0c3084766c261708568e005580ffc2bd094b6e655d1c663c510ba5c2706_prof);

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
