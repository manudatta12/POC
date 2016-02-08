<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_67a5ff1c35561c6c339af58d4c2879b20ca3b4caf69914a51a1bc407a94f156b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_058e3762aa909563b2fb2b37ea1340b6b668a30feaa1c8bbe41b7b7815112870 = $this->env->getExtension("native_profiler");
        $__internal_058e3762aa909563b2fb2b37ea1340b6b668a30feaa1c8bbe41b7b7815112870->enter($__internal_058e3762aa909563b2fb2b37ea1340b6b668a30feaa1c8bbe41b7b7815112870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_058e3762aa909563b2fb2b37ea1340b6b668a30feaa1c8bbe41b7b7815112870->leave($__internal_058e3762aa909563b2fb2b37ea1340b6b668a30feaa1c8bbe41b7b7815112870_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0cc0f747c35940be7dfef0c5de479760c72a67bdfb1f90675d20063f0b9b4fc0 = $this->env->getExtension("native_profiler");
        $__internal_0cc0f747c35940be7dfef0c5de479760c72a67bdfb1f90675d20063f0b9b4fc0->enter($__internal_0cc0f747c35940be7dfef0c5de479760c72a67bdfb1f90675d20063f0b9b4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => "EDIT", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 18
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 20
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 22
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 23
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 27
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        
        $__internal_0cc0f747c35940be7dfef0c5de479760c72a67bdfb1f90675d20063f0b9b4fc0->leave($__internal_0cc0f747c35940be7dfef0c5de479760c72a67bdfb1f90675d20063f0b9b4fc0_prof);

    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_ad7544cf9ac259bbc8c193ed4a36629a575fdd55510acf79323f3c87b3657273 = $this->env->getExtension("native_profiler");
        $__internal_ad7544cf9ac259bbc8c193ed4a36629a575fdd55510acf79323f3c87b3657273->enter($__internal_ad7544cf9ac259bbc8c193ed4a36629a575fdd55510acf79323f3c87b3657273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "</a>";
        
        $__internal_ad7544cf9ac259bbc8c193ed4a36629a575fdd55510acf79323f3c87b3657273->leave($__internal_ad7544cf9ac259bbc8c193ed4a36629a575fdd55510acf79323f3c87b3657273_prof);

    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_f342197cf7b6af7ee4201d9af2051c6ecaa1061c140d15b770307fe5dde25e0d = $this->env->getExtension("native_profiler");
        $__internal_f342197cf7b6af7ee4201d9af2051c6ecaa1061c140d15b770307fe5dde25e0d->enter($__internal_f342197cf7b6af7ee4201d9af2051c6ecaa1061c140d15b770307fe5dde25e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_f342197cf7b6af7ee4201d9af2051c6ecaa1061c140d15b770307fe5dde25e0d->leave($__internal_f342197cf7b6af7ee4201d9af2051c6ecaa1061c140d15b770307fe5dde25e0d_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 36,  154 => 35,  143 => 32,  137 => 31,  129 => 28,  115 => 27,  109 => 26,  91 => 25,  88 => 24,  74 => 23,  70 => 22,  67 => 20,  64 => 18,  62 => 17,  44 => 16,  41 => 15,  35 => 14,  20 => 12,);
    }
}
