<?php

/* SonataUserBundle:Admin:Field/impersonating.html.twig */
class __TwigTemplate_e403c3e050ff93d829598c0306d59ef230c7997bf3098f45aa75e9f72cac824c extends Twig_Template
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
        $__internal_9d9a83d82d360fe7d2feb1f2fb5d374f20da382971f12825f941a6c4939e1f90 = $this->env->getExtension("native_profiler");
        $__internal_9d9a83d82d360fe7d2feb1f2fb5d374f20da382971f12825f941a6c4939e1f90->enter($__internal_9d9a83d82d360fe7d2feb1f2fb5d374f20da382971f12825f941a6c4939e1f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin:Field/impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d9a83d82d360fe7d2feb1f2fb5d374f20da382971f12825f941a6c4939e1f90->leave($__internal_9d9a83d82d360fe7d2feb1f2fb5d374f20da382971f12825f941a6c4939e1f90_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b890ba65f44a36ab2b28b34fff24833bd960414d4bfc0e459b76ea9182794556 = $this->env->getExtension("native_profiler");
        $__internal_b890ba65f44a36ab2b28b34fff24833bd960414d4bfc0e459b76ea9182794556->enter($__internal_b890ba65f44a36ab2b28b34fff24833bd960414d4bfc0e459b76ea9182794556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_b890ba65f44a36ab2b28b34fff24833bd960414d4bfc0e459b76ea9182794556->leave($__internal_b890ba65f44a36ab2b28b34fff24833bd960414d4bfc0e459b76ea9182794556_prof);

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
