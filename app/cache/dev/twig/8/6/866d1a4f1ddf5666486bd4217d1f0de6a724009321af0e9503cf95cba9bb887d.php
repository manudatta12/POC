<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_866d1a4f1ddf5666486bd4217d1f0de6a724009321af0e9503cf95cba9bb887d extends Twig_Template
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
        $__internal_02d9fc7a4d843009963b5039d4b440572285cbe9b9e6fc7db9ed270e82f0e01e = $this->env->getExtension("native_profiler");
        $__internal_02d9fc7a4d843009963b5039d4b440572285cbe9b9e6fc7db9ed270e82f0e01e->enter($__internal_02d9fc7a4d843009963b5039d4b440572285cbe9b9e6fc7db9ed270e82f0e01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:FlashMessage:render.html.twig"));

        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessages($context["type"], (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_core_status')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo $context["message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_02d9fc7a4d843009963b5039d4b440572285cbe9b9e6fc7db9ed270e82f0e01e->leave($__internal_02d9fc7a4d843009963b5039d4b440572285cbe9b9e6fc7db9ed270e82f0e01e_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  34 => 14,  29 => 13,  26 => 12,  22 => 11,);
    }
}
