<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a838f6603e2695091d4a2944d7118c96721a36e48c8ffeb045d09b7f89b501df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67399cf0356f2e0c4617e5a58e2ea1ed34cccd9508c6e3df71ef43add683c409 = $this->env->getExtension("native_profiler");
        $__internal_67399cf0356f2e0c4617e5a58e2ea1ed34cccd9508c6e3df71ef43add683c409->enter($__internal_67399cf0356f2e0c4617e5a58e2ea1ed34cccd9508c6e3df71ef43add683c409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67399cf0356f2e0c4617e5a58e2ea1ed34cccd9508c6e3df71ef43add683c409->leave($__internal_67399cf0356f2e0c4617e5a58e2ea1ed34cccd9508c6e3df71ef43add683c409_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b6800655be9fdb086181200279e7d46c8a90a773dc8fc6084221379edfcb2f8 = $this->env->getExtension("native_profiler");
        $__internal_3b6800655be9fdb086181200279e7d46c8a90a773dc8fc6084221379edfcb2f8->enter($__internal_3b6800655be9fdb086181200279e7d46c8a90a773dc8fc6084221379edfcb2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3b6800655be9fdb086181200279e7d46c8a90a773dc8fc6084221379edfcb2f8->leave($__internal_3b6800655be9fdb086181200279e7d46c8a90a773dc8fc6084221379edfcb2f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2234b952ac0b03aa147a56f5c4635b803301d5dc51160cfe4bdb5c768fb83c9 = $this->env->getExtension("native_profiler");
        $__internal_f2234b952ac0b03aa147a56f5c4635b803301d5dc51160cfe4bdb5c768fb83c9->enter($__internal_f2234b952ac0b03aa147a56f5c4635b803301d5dc51160cfe4bdb5c768fb83c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f2234b952ac0b03aa147a56f5c4635b803301d5dc51160cfe4bdb5c768fb83c9->leave($__internal_f2234b952ac0b03aa147a56f5c4635b803301d5dc51160cfe4bdb5c768fb83c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_722bdea3ebc386a8f0f1377706ca1c3e24945e09e9b0df730ebbf4d4f23bc87d = $this->env->getExtension("native_profiler");
        $__internal_722bdea3ebc386a8f0f1377706ca1c3e24945e09e9b0df730ebbf4d4f23bc87d->enter($__internal_722bdea3ebc386a8f0f1377706ca1c3e24945e09e9b0df730ebbf4d4f23bc87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_722bdea3ebc386a8f0f1377706ca1c3e24945e09e9b0df730ebbf4d4f23bc87d->leave($__internal_722bdea3ebc386a8f0f1377706ca1c3e24945e09e9b0df730ebbf4d4f23bc87d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
