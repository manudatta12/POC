<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_7b54cea71b89e838c3dbd3df2a36d8bd4ff5d9d5ea341e6aedc76266adbe69e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65d169c060691b91b022dc314f647a65d84faef931ff73abb59ef943592fee0f = $this->env->getExtension("native_profiler");
        $__internal_65d169c060691b91b022dc314f647a65d84faef931ff73abb59ef943592fee0f->enter($__internal_65d169c060691b91b022dc314f647a65d84faef931ff73abb59ef943592fee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65d169c060691b91b022dc314f647a65d84faef931ff73abb59ef943592fee0f->leave($__internal_65d169c060691b91b022dc314f647a65d84faef931ff73abb59ef943592fee0f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4f043909b989a744a6f0362a4df8eaff97901d4310dad7c1c32de074cdf84a67 = $this->env->getExtension("native_profiler");
        $__internal_4f043909b989a744a6f0362a4df8eaff97901d4310dad7c1c32de074cdf84a67->enter($__internal_4f043909b989a744a6f0362a4df8eaff97901d4310dad7c1c32de074cdf84a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_4f043909b989a744a6f0362a4df8eaff97901d4310dad7c1c32de074cdf84a67->leave($__internal_4f043909b989a744a6f0362a4df8eaff97901d4310dad7c1c32de074cdf84a67_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 18,  59 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}