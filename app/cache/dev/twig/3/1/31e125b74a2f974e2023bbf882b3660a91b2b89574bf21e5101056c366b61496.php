<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_31e125b74a2f974e2023bbf882b3660a91b2b89574bf21e5101056c366b61496 extends Twig_Template
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
        $__internal_d7713e592c55291704f567f5d2af41e1f03ec64bed6cfc870e1e270f70a68ea9 = $this->env->getExtension("native_profiler");
        $__internal_d7713e592c55291704f567f5d2af41e1f03ec64bed6cfc870e1e270f70a68ea9->enter($__internal_d7713e592c55291704f567f5d2af41e1f03ec64bed6cfc870e1e270f70a68ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d7713e592c55291704f567f5d2af41e1f03ec64bed6cfc870e1e270f70a68ea9->leave($__internal_d7713e592c55291704f567f5d2af41e1f03ec64bed6cfc870e1e270f70a68ea9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
