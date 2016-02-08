<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_681d77e31a8862df703364ee8f631644ee1419b60a673d325450626b4923d4a1 extends Twig_Template
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
        $__internal_cf571ec297d9230c267b17ef47a7d082da4b895fac2609232385353037cdfc34 = $this->env->getExtension("native_profiler");
        $__internal_cf571ec297d9230c267b17ef47a7d082da4b895fac2609232385353037cdfc34->enter($__internal_cf571ec297d9230c267b17ef47a7d082da4b895fac2609232385353037cdfc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf571ec297d9230c267b17ef47a7d082da4b895fac2609232385353037cdfc34->leave($__internal_cf571ec297d9230c267b17ef47a7d082da4b895fac2609232385353037cdfc34_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_20f407a36c1d52bc8351108dda0f23f551961f102f9b925156d62784e032c45d = $this->env->getExtension("native_profiler");
        $__internal_20f407a36c1d52bc8351108dda0f23f551961f102f9b925156d62784e032c45d->enter($__internal_20f407a36c1d52bc8351108dda0f23f551961f102f9b925156d62784e032c45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_20f407a36c1d52bc8351108dda0f23f551961f102f9b925156d62784e032c45d->leave($__internal_20f407a36c1d52bc8351108dda0f23f551961f102f9b925156d62784e032c45d_prof);

    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_9de2b6451acea7edf740e93752f3a54eb913666ad3791dbf11a8d187b0220cbb = $this->env->getExtension("native_profiler");
        $__internal_9de2b6451acea7edf740e93752f3a54eb913666ad3791dbf11a8d187b0220cbb->enter($__internal_9de2b6451acea7edf740e93752f3a54eb913666ad3791dbf11a8d187b0220cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "</a>";
        
        $__internal_9de2b6451acea7edf740e93752f3a54eb913666ad3791dbf11a8d187b0220cbb->leave($__internal_9de2b6451acea7edf740e93752f3a54eb913666ad3791dbf11a8d187b0220cbb_prof);

    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_27c074a5d550b32c654a2f777de4cdb00a8006faa138b67ebcd96f8f225a423b = $this->env->getExtension("native_profiler");
        $__internal_27c074a5d550b32c654a2f777de4cdb00a8006faa138b67ebcd96f8f225a423b->enter($__internal_27c074a5d550b32c654a2f777de4cdb00a8006faa138b67ebcd96f8f225a423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_27c074a5d550b32c654a2f777de4cdb00a8006faa138b67ebcd96f8f225a423b->leave($__internal_27c074a5d550b32c654a2f777de4cdb00a8006faa138b67ebcd96f8f225a423b_prof);

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
