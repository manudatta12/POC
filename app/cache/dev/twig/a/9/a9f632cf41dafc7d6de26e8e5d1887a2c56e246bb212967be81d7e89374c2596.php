<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a9f632cf41dafc7d6de26e8e5d1887a2c56e246bb212967be81d7e89374c2596 extends Twig_Template
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
        $__internal_c645eec4de6d9f9241993d7a0c45b66b5bb044ab75697a1f830379c5f83ec7c9 = $this->env->getExtension("native_profiler");
        $__internal_c645eec4de6d9f9241993d7a0c45b66b5bb044ab75697a1f830379c5f83ec7c9->enter($__internal_c645eec4de6d9f9241993d7a0c45b66b5bb044ab75697a1f830379c5f83ec7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c645eec4de6d9f9241993d7a0c45b66b5bb044ab75697a1f830379c5f83ec7c9->leave($__internal_c645eec4de6d9f9241993d7a0c45b66b5bb044ab75697a1f830379c5f83ec7c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a95dfb34259fa24889c002f07a08ca3e961adf299434e6dca5e338200168da4 = $this->env->getExtension("native_profiler");
        $__internal_2a95dfb34259fa24889c002f07a08ca3e961adf299434e6dca5e338200168da4->enter($__internal_2a95dfb34259fa24889c002f07a08ca3e961adf299434e6dca5e338200168da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a95dfb34259fa24889c002f07a08ca3e961adf299434e6dca5e338200168da4->leave($__internal_2a95dfb34259fa24889c002f07a08ca3e961adf299434e6dca5e338200168da4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbc71f68f7df30b865fb9ce64e1685e961ba2a96b1712260ce3eed9b763ecd77 = $this->env->getExtension("native_profiler");
        $__internal_fbc71f68f7df30b865fb9ce64e1685e961ba2a96b1712260ce3eed9b763ecd77->enter($__internal_fbc71f68f7df30b865fb9ce64e1685e961ba2a96b1712260ce3eed9b763ecd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fbc71f68f7df30b865fb9ce64e1685e961ba2a96b1712260ce3eed9b763ecd77->leave($__internal_fbc71f68f7df30b865fb9ce64e1685e961ba2a96b1712260ce3eed9b763ecd77_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_07a5dcbf6c73c928ef93755dec7eb4bac8687c8d82d95b664825373c8a1b4a47 = $this->env->getExtension("native_profiler");
        $__internal_07a5dcbf6c73c928ef93755dec7eb4bac8687c8d82d95b664825373c8a1b4a47->enter($__internal_07a5dcbf6c73c928ef93755dec7eb4bac8687c8d82d95b664825373c8a1b4a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_07a5dcbf6c73c928ef93755dec7eb4bac8687c8d82d95b664825373c8a1b4a47->leave($__internal_07a5dcbf6c73c928ef93755dec7eb4bac8687c8d82d95b664825373c8a1b4a47_prof);

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
