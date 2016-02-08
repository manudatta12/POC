<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_b83c6b19be4838052dc758df54063ef7f7b4178a09f5dbc000dbeb19ba6b8102 extends Twig_Template
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
        $__internal_bd08aff3c56f73fb9fba6f143b41c081fdfe48fdb3ec9be2d4b89f768d2a1951 = $this->env->getExtension("native_profiler");
        $__internal_bd08aff3c56f73fb9fba6f143b41c081fdfe48fdb3ec9be2d4b89f768d2a1951->enter($__internal_bd08aff3c56f73fb9fba6f143b41c081fdfe48fdb3ec9be2d4b89f768d2a1951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_bd08aff3c56f73fb9fba6f143b41c081fdfe48fdb3ec9be2d4b89f768d2a1951->leave($__internal_bd08aff3c56f73fb9fba6f143b41c081fdfe48fdb3ec9be2d4b89f768d2a1951_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }
}
