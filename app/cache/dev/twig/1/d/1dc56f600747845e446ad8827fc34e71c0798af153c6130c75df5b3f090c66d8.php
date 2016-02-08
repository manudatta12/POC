<?php

/* SonataUserBundle:Admin:Field/impersonating.html.twig */
class __TwigTemplate_1dc56f600747845e446ad8827fc34e71c0798af153c6130c75df5b3f090c66d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataUserBundle:Admin:Field/impersonating.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48431297f4aca77706f1d0c9a6feb3079d4fc8c0764b3faecf3d2947beb65cf5 = $this->env->getExtension("native_profiler");
        $__internal_48431297f4aca77706f1d0c9a6feb3079d4fc8c0764b3faecf3d2947beb65cf5->enter($__internal_48431297f4aca77706f1d0c9a6feb3079d4fc8c0764b3faecf3d2947beb65cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin:Field/impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48431297f4aca77706f1d0c9a6feb3079d4fc8c0764b3faecf3d2947beb65cf5->leave($__internal_48431297f4aca77706f1d0c9a6feb3079d4fc8c0764b3faecf3d2947beb65cf5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1012a2f9c047acc187448c1e3d55bce930227a06a74ab3c4fb40dbf1128462e6 = $this->env->getExtension("native_profiler");
        $__internal_1012a2f9c047acc187448c1e3d55bce930227a06a74ab3c4fb40dbf1128462e6->enter($__internal_1012a2f9c047acc187448c1e3d55bce930227a06a74ab3c4fb40dbf1128462e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\">
            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonataadmin/famfamfam/group_go.png"), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\" />
        </a>
    ";
        } else {
            // line 20
            echo "        -
    ";
        }
        
        $__internal_1012a2f9c047acc187448c1e3d55bce930227a06a74ab3c4fb40dbf1128462e6->leave($__internal_1012a2f9c047acc187448c1e3d55bce930227a06a74ab3c4fb40dbf1128462e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Field/impersonating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  50 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
