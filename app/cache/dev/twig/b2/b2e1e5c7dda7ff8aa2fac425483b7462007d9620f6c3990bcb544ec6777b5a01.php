<?php

/* :fkuz:licenseOnDate.html.twig */
class __TwigTemplate_fcebcd6e2a055a85d72ea14564d528d01775042e2d2c52bc84279a698f358305 extends Twig_Template
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
        $__internal_dbc6d4d2d2c8dc2c96e37ee83a14092596461ddbd03c902338e69760370c7093 = $this->env->getExtension("native_profiler");
        $__internal_dbc6d4d2d2c8dc2c96e37ee83a14092596461ddbd03c902338e69760370c7093->enter($__internal_dbc6d4d2d2c8dc2c96e37ee83a14092596461ddbd03c902338e69760370c7093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":fkuz:licenseOnDate.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licenseOnDate"]) ? $context["licenseOnDate"] : $this->getContext($context, "licenseOnDate")));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 2
            echo "\t<tr>
\t\t<td>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "nomer", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 4
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["license"], "date", array()), "d.m.Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "vidDeytelnosti", array()), "html", null, true);
            echo "</td>
        <td><span class=\"glyphicon glyphicon-pencil edit_in_fkuz\" aria-hidden=\"true\" id_now=\"/fkuz/editLicense/";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "id", array()), "html", null, true);
            echo "\"></span></td>
\t\t<td><span class=\"glyphicon glyphicon-remove delete_now\" aria-hidden=\"true\" id_now=\"/fkuz/deleteLicense/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["license"], "id", array()), "html", null, true);
            echo "\"></span></td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dbc6d4d2d2c8dc2c96e37ee83a14092596461ddbd03c902338e69760370c7093->leave($__internal_dbc6d4d2d2c8dc2c96e37ee83a14092596461ddbd03c902338e69760370c7093_prof);

    }

    public function getTemplateName()
    {
        return ":fkuz:licenseOnDate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for license in licenseOnDate %}*/
/* 	<tr>*/
/* 		<td>{{ license.nomer }}</td>*/
/* 		<td>{{ license.date|date("d.m.Y") }}</td>*/
/* 		<td>{{ license.vidDeytelnosti }}</td>*/
/*         <td><span class="glyphicon glyphicon-pencil edit_in_fkuz" aria-hidden="true" id_now="/fkuz/editLicense/{{ license.id }}"></span></td>*/
/* 		<td><span class="glyphicon glyphicon-remove delete_now" aria-hidden="true" id_now="/fkuz/deleteLicense/{{ license.id }}"></span></td>*/
/* 	</tr>*/
/* {% endfor %}*/
