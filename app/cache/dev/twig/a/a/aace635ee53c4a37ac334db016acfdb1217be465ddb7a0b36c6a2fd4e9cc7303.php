<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_aace635ee53c4a37ac334db016acfdb1217be465ddb7a0b36c6a2fd4e9cc7303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc45593f2a19b26f276307f7f90e2f1cc9920b3eaf828530b61dd6a374d322a4 = $this->env->getExtension("native_profiler");
        $__internal_cc45593f2a19b26f276307f7f90e2f1cc9920b3eaf828530b61dd6a374d322a4->enter($__internal_cc45593f2a19b26f276307f7f90e2f1cc9920b3eaf828530b61dd6a374d322a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_cc45593f2a19b26f276307f7f90e2f1cc9920b3eaf828530b61dd6a374d322a4->leave($__internal_cc45593f2a19b26f276307f7f90e2f1cc9920b3eaf828530b61dd6a374d322a4_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_f9c2c29a045bc566e35eb7669f0bf478202785c0bf5daf9120fecc944671cacb = $this->env->getExtension("native_profiler");
        $__internal_f9c2c29a045bc566e35eb7669f0bf478202785c0bf5daf9120fecc944671cacb->enter($__internal_f9c2c29a045bc566e35eb7669f0bf478202785c0bf5daf9120fecc944671cacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_f9c2c29a045bc566e35eb7669f0bf478202785c0bf5daf9120fecc944671cacb->leave($__internal_f9c2c29a045bc566e35eb7669f0bf478202785c0bf5daf9120fecc944671cacb_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_025037f28df6b0e4bc637b0bf3215e49f016b0bc51803cc0aa29851ce70ffa3c = $this->env->getExtension("native_profiler");
        $__internal_025037f28df6b0e4bc637b0bf3215e49f016b0bc51803cc0aa29851ce70ffa3c->enter($__internal_025037f28df6b0e4bc637b0bf3215e49f016b0bc51803cc0aa29851ce70ffa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_025037f28df6b0e4bc637b0bf3215e49f016b0bc51803cc0aa29851ce70ffa3c->leave($__internal_025037f28df6b0e4bc637b0bf3215e49f016b0bc51803cc0aa29851ce70ffa3c_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_d752c44c2a61b9fcbcf6f9f6356ab9f155f11e649d7ea94df0d2c4ab42f5acab = $this->env->getExtension("native_profiler");
        $__internal_d752c44c2a61b9fcbcf6f9f6356ab9f155f11e649d7ea94df0d2c4ab42f5acab->enter($__internal_d752c44c2a61b9fcbcf6f9f6356ab9f155f11e649d7ea94df0d2c4ab42f5acab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"form-control per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_d752c44c2a61b9fcbcf6f9f6356ab9f155f11e649d7ea94df0d2c4ab42f5acab->leave($__internal_d752c44c2a61b9fcbcf6f9f6356ab9f155f11e649d7ea94df0d2c4ab42f5acab_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 23,  81 => 22,  73 => 19,  70 => 18,  64 => 17,  51 => 13,  45 => 12,  38 => 22,  35 => 21,  33 => 17,  30 => 16,  28 => 12,  25 => 11,);
    }
}
