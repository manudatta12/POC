<?php

/* SonataMediaBundle:GalleryAdmin:list.html.twig */
class __TwigTemplate_72d59c30278f6a9b3bb8d234c5bf581324ce27ae641c00c5ce2df4ddeaca9cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:GalleryAdmin:list.html.twig", 12);
        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2b5afb67a6c3620051fd8cfa6263bf6dfdc1c2952b2ca50cdf05a773ceff5fb = $this->env->getExtension("native_profiler");
        $__internal_f2b5afb67a6c3620051fd8cfa6263bf6dfdc1c2952b2ca50cdf05a773ceff5fb->enter($__internal_f2b5afb67a6c3620051fd8cfa6263bf6dfdc1c2952b2ca50cdf05a773ceff5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:GalleryAdmin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b5afb67a6c3620051fd8cfa6263bf6dfdc1c2952b2ca50cdf05a773ceff5fb->leave($__internal_f2b5afb67a6c3620051fd8cfa6263bf6dfdc1c2952b2ca50cdf05a773ceff5fb_prof);

    }

    // line 14
    public function block_preview($context, array $blocks = array())
    {
        $__internal_8208c50f382abbd736d7993099e8a47734628a5174e62e5e960f672626463070 = $this->env->getExtension("native_profiler");
        $__internal_8208c50f382abbd736d7993099e8a47734628a5174e62e5e960f672626463070->enter($__internal_8208c50f382abbd736d7993099e8a47734628a5174e62e5e960f672626463070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 15
        echo "
    <ul class=\"nav nav-pills\">
        <li><a><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts", array()));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 19
            echo "            ";
            if (($context["name"] == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()))) {
                // line 20
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $context["name"])), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 22
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $context["name"])), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_8208c50f382abbd736d7993099e8a47734628a5174e62e5e960f672626463070->leave($__internal_8208c50f382abbd736d7993099e8a47734628a5174e62e5e960f672626463070_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:GalleryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  71 => 24,  63 => 22,  55 => 20,  52 => 19,  48 => 18,  44 => 17,  40 => 15,  34 => 14,  11 => 12,);
    }
}
