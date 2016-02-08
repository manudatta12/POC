<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_d9c1436951eabc4eca2b0005008d496afdfd07c9734e64b24c7fbcd756d42d02 extends Twig_Template
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
        $__internal_c69d74c8a96ac45b7a81c48233c0cc12a096fbb1086cfea75c4ea7c099d82b0e = $this->env->getExtension("native_profiler");
        $__internal_c69d74c8a96ac45b7a81c48233c0cc12a096fbb1086cfea75c4ea7c099d82b0e->enter($__internal_c69d74c8a96ac45b7a81c48233c0cc12a096fbb1086cfea75c4ea7c099d82b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_c69d74c8a96ac45b7a81c48233c0cc12a096fbb1086cfea75c4ea7c099d82b0e->leave($__internal_c69d74c8a96ac45b7a81c48233c0cc12a096fbb1086cfea75c4ea7c099d82b0e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
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
