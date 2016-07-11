<?php

/* :organization:showNarusheniya.html.twig */
class __TwigTemplate_f96353d1a5075f5ad2073d1cac329b555710ce23cb51621eb4425f7a6a57a293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":organization:showNarusheniya.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11520effd867bd33db2e5ad3422ffbb6c523d95b73ee4dc5972a890caeb7b880 = $this->env->getExtension("native_profiler");
        $__internal_11520effd867bd33db2e5ad3422ffbb6c523d95b73ee4dc5972a890caeb7b880->enter($__internal_11520effd867bd33db2e5ad3422ffbb6c523d95b73ee4dc5972a890caeb7b880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":organization:showNarusheniya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11520effd867bd33db2e5ad3422ffbb6c523d95b73ee4dc5972a890caeb7b880->leave($__internal_11520effd867bd33db2e5ad3422ffbb6c523d95b73ee4dc5972a890caeb7b880_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b5f8c412ff79b4ba8fe1bf581ac267889d932e297ca45d15b1028ed2233f64f9 = $this->env->getExtension("native_profiler");
        $__internal_b5f8c412ff79b4ba8fe1bf581ac267889d932e297ca45d15b1028ed2233f64f9->enter($__internal_b5f8c412ff79b4ba8fe1bf581ac267889d932e297ca45d15b1028ed2233f64f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"row\">
    <h1>Выберите нарушение:</h1>
</div>

<div class=\"row\">
    <table class=\"table table-hover main table-bordered\">
        <thead>
            <tr>
                <td>Объект</td>
                <td>Описание</td>
                <td>Срок устранения</td>
                <td><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></td>
                <td><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></td>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["narusheniya"]) ? $context["narusheniya"] : $this->getContext($context, "narusheniya")));
        foreach ($context['_seq'] as $context["_key"] => $context["nar"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["nar"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["nar"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["nar"], "date_ustraneniya", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                <td><a href=\"/organization/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["nar"], "id", array()), "html", null, true);
            echo "/editNarushenie\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>
\t\t\t\t<td><a href=\"/organization/deleteNarushenie/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["nar"], "id", array()), "html", null, true);
            echo "\" class=\"delete_entity\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>
            </tr> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_b5f8c412ff79b4ba8fe1bf581ac267889d932e297ca45d15b1028ed2233f64f9->leave($__internal_b5f8c412ff79b4ba8fe1bf581ac267889d932e297ca45d15b1028ed2233f64f9_prof);

    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e3c5e699936265056f7c30fad4ceeb732550846c1bdd4827aab32a9bb8e0fb75 = $this->env->getExtension("native_profiler");
        $__internal_e3c5e699936265056f7c30fad4ceeb732550846c1bdd4827aab32a9bb8e0fb75->enter($__internal_e3c5e699936265056f7c30fad4ceeb732550846c1bdd4827aab32a9bb8e0fb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 37
        echo "
";
        
        $__internal_e3c5e699936265056f7c30fad4ceeb732550846c1bdd4827aab32a9bb8e0fb75->leave($__internal_e3c5e699936265056f7c30fad4ceeb732550846c1bdd4827aab32a9bb8e0fb75_prof);

    }

    public function getTemplateName()
    {
        return ":organization:showNarusheniya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  103 => 36,  92 => 30,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  64 => 22,  60 => 21,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="row">*/
/*     <h1>Выберите нарушение:</h1>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <table class="table table-hover main table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <td>Объект</td>*/
/*                 <td>Описание</td>*/
/*                 <td>Срок устранения</td>*/
/*                 <td><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>*/
/*                 <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for nar in narusheniya %}*/
/*             <tr>*/
/*                 <td>{{ nar.name }}</td>*/
/*                 <td>{{ nar.description }}</td>*/
/*                 <td>{{ nar.date_ustraneniya|date("d.m.Y") }}</td>*/
/*                 <td><a href="/organization/{{ nar.id }}/editNarushenie"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>*/
/* 				<td><a href="/organization/deleteNarushenie/{{ nar.id }}" class="delete_entity"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>*/
/*             </tr> */
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
