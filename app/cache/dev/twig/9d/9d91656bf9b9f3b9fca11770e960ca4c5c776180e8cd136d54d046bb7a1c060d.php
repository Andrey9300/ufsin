<?php

/* :otchet/ajax:proverka_nakazanie_vid.html.twig */
class __TwigTemplate_cc1d3443363f2b989c847f06192afb56b349837eb6ce874367a5fbf6b89c85ec extends Twig_Template
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
        $__internal_95052dfb9b78393e6895ce8df560cfb4359967a0129353c9705161692dafcea1 = $this->env->getExtension("native_profiler");
        $__internal_95052dfb9b78393e6895ce8df560cfb4359967a0129353c9705161692dafcea1->enter($__internal_95052dfb9b78393e6895ce8df560cfb4359967a0129353c9705161692dafcea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":otchet/ajax:proverka_nakazanie_vid.html.twig"));

        // line 1
        echo "<div class=\"row\">

    ";
        // line 3
        if (twig_test_empty((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")))) {
            // line 4
            echo "        <p>Не добавлены учреждения</p>
    ";
        } elseif (twig_test_empty(        // line 5
(isset($context["narusheniyaVidSlug"]) ? $context["narusheniyaVidSlug"] : $this->getContext($context, "narusheniyaVidSlug")))) {
            // line 6
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } elseif (twig_test_empty(        // line 7
(isset($context["narusheniyaVidAdm"]) ? $context["narusheniyaVidAdm"] : $this->getContext($context, "narusheniyaVidAdm")))) {
            // line 8
            echo "        <p>Нет нарушений в учреждениях в выбранный период</p>
    ";
        } else {
            // line 10
            echo "
        <table class=\"table table-hover table-bordered numbers\">
            <thead>
                <tr>
                    <td></td>
                    <td style=\"font-size:12px\">Служебные</td>
                    <td style=\"font-size:12px\">Административные</td>
                    <td style=\"font-size:12px\">Итог</td>
                </tr>
            </thead>
            <tbody>

            ";
            // line 22
            $context["flag1"] = "0";
            // line 23
            echo "            ";
            $context["flag2"] = "0";
            // line 24
            echo "
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                // line 26
                echo "                <tr class=\"pokazatels";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                    <td class=\"name\">";
                // line 27
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["organization"], "nameShort", array()), 3, 7), "html", null, true);
                echo "</td>

                        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaVidSlug"]) ? $context["narusheniyaVidSlug"] : $this->getContext($context, "narusheniyaVidSlug")));
                foreach ($context['_seq'] as $context["_key"] => $context["slug"]) {
                    // line 30
                    echo "
                            ";
                    // line 31
                    if (($this->getAttribute($context["slug"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 32
                        echo "                            <td class=\"pokazatel1\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["slug"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 33
                        $context["flag1"] = "1";
                        // line 34
                        echo "                            ";
                    }
                    // line 35
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slug'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
                        ";
                // line 38
                if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) == "0")) {
                    // line 39
                    echo "                            <td></td>
                        ";
                }
                // line 41
                echo "                        ";
                $context["flag1"] = "0";
                // line 42
                echo "
                        ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["narusheniyaVidAdm"]) ? $context["narusheniyaVidAdm"] : $this->getContext($context, "narusheniyaVidAdm")));
                foreach ($context['_seq'] as $context["_key"] => $context["adm"]) {
                    // line 44
                    echo "
                            ";
                    // line 45
                    if (($this->getAttribute($context["adm"], "name_full", array()) == $this->getAttribute($context["organization"], "nameFull", array()))) {
                        // line 46
                        echo "                            <td class=\"pokazatel2\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["adm"], 1, array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 47
                        $context["flag2"] = "1";
                        // line 48
                        echo "                            ";
                    }
                    // line 49
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "
                        ";
                // line 52
                if (((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2")) == "0")) {
                    // line 53
                    echo "                            <td></td>
                        ";
                }
                // line 55
                echo "                        ";
                $context["flag2"] = "0";
                // line 56
                echo "
                        <td></td>
                </tr>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td>Всего</td>
                    <td id=\"result1\"></td>
                    <td id=\"result2\"></td>
                    <td id=\"vsego\"></td>
                </tr>
            </tfoot>
        </table>
    ";
        }
        // line 71
        echo "</div>";
        
        $__internal_95052dfb9b78393e6895ce8df560cfb4359967a0129353c9705161692dafcea1->leave($__internal_95052dfb9b78393e6895ce8df560cfb4359967a0129353c9705161692dafcea1_prof);

    }

    public function getTemplateName()
    {
        return ":otchet/ajax:proverka_nakazanie_vid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 71,  187 => 60,  170 => 56,  167 => 55,  163 => 53,  161 => 52,  158 => 51,  151 => 49,  148 => 48,  146 => 47,  141 => 46,  139 => 45,  136 => 44,  132 => 43,  129 => 42,  126 => 41,  122 => 39,  120 => 38,  117 => 37,  110 => 35,  107 => 34,  105 => 33,  100 => 32,  98 => 31,  95 => 30,  91 => 29,  86 => 27,  81 => 26,  64 => 25,  61 => 24,  58 => 23,  56 => 22,  42 => 10,  38 => 8,  36 => 7,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="row">*/
/* */
/*     {% if organizations is empty%}*/
/*         <p>Не добавлены учреждения</p>*/
/*     {% elseif narusheniyaVidSlug is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% elseif narusheniyaVidAdm is empty%}*/
/*         <p>Нет нарушений в учреждениях в выбранный период</p>*/
/*     {% else %}*/
/* */
/*         <table class="table table-hover table-bordered numbers">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td></td>*/
/*                     <td style="font-size:12px">Служебные</td>*/
/*                     <td style="font-size:12px">Административные</td>*/
/*                     <td style="font-size:12px">Итог</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% set flag1= "0" %}*/
/*             {% set flag2 = "0" %}*/
/* */
/*             {% for organization in organizations %}*/
/*                 <tr class="pokazatels{{loop.index}}">*/
/*                     <td class="name">{{ organization.nameShort|slice(3,7) }}</td>*/
/* */
/*                         {% for slug in narusheniyaVidSlug %}*/
/* */
/*                             {% if slug.name_full == organization.nameFull %}*/
/*                             <td class="pokazatel1">{{ slug.1 }}</td>*/
/*                             {% set flag1 = "1" %}*/
/*                             {% endif %}*/
/* */
/*                         {% endfor %}*/
/* */
/*                         {% if flag1 == "0" %}*/
/*                             <td></td>*/
/*                         {% endif %}*/
/*                         {% set flag1 = "0" %}*/
/* */
/*                         {% for adm in narusheniyaVidAdm %}*/
/* */
/*                             {% if adm.name_full == organization.nameFull %}*/
/*                             <td class="pokazatel2">{{ adm.1 }}</td>*/
/*                             {% set flag2 = "1" %}*/
/*                             {% endif %}*/
/* */
/*                         {% endfor %}*/
/* */
/*                         {% if flag2 == "0" %}*/
/*                             <td></td>*/
/*                         {% endif %}*/
/*                         {% set flag2 = "0" %}*/
/* */
/*                         <td></td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*             <tfoot>*/
/*                 <tr>*/
/*                     <td>Всего</td>*/
/*                     <td id="result1"></td>*/
/*                     <td id="result2"></td>*/
/*                     <td id="vsego"></td>*/
/*                 </tr>*/
/*             </tfoot>*/
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
