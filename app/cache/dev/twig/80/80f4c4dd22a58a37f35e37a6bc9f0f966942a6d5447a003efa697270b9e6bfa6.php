<?php

/* :issledovanie:editIssledovanie.html.twig */
class __TwigTemplate_84942161a63459499e9ffae48ffd41c30befc8a1cc7411317e53dc339f79a5eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":issledovanie:editIssledovanie.html.twig", 1);
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
        $__internal_e222ff70680077e97ed198b87f0dd28d6ae168ab508f207cffddb4e8d31fc156 = $this->env->getExtension("native_profiler");
        $__internal_e222ff70680077e97ed198b87f0dd28d6ae168ab508f207cffddb4e8d31fc156->enter($__internal_e222ff70680077e97ed198b87f0dd28d6ae168ab508f207cffddb4e8d31fc156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":issledovanie:editIssledovanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e222ff70680077e97ed198b87f0dd28d6ae168ab508f207cffddb4e8d31fc156->leave($__internal_e222ff70680077e97ed198b87f0dd28d6ae168ab508f207cffddb4e8d31fc156_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ff0e7db8c41fd8e38d8422b3d9a9e87033c25081aced473c99fcde2b0431fa5b = $this->env->getExtension("native_profiler");
        $__internal_ff0e7db8c41fd8e38d8422b3d9a9e87033c25081aced473c99fcde2b0431fa5b->enter($__internal_ff0e7db8c41fd8e38d8422b3d9a9e87033c25081aced473c99fcde2b0431fa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div class=\"row\">
        <h1>Редакитрование лабораторного исследования</h1>
    </div>
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right; margin-bottom: 30px\"/>
    </div>

    <div class=\"issledovanie row\">
        <div class=\"col-md-3\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'label', array("label" => "Номер протокола"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomer", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label', array("label" => "Дата протокола (дд.мм.гггг)"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control", "data-validation" => "date", "data-validation-optional" => "true", "data-validation-format" => "dd.mm.yyyy")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "all_count", array()), 'label', array("label" => "Всего проб"));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "all_count", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ne_sootv", array()), 'label', array("label" => "Не соответствует"));
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ne_sootv", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"col-md-3\">

        </div>
        <div class=\"col-md-3\">

        </div>
    </div>

    <div class=\"row\">
        <hr/>
        <ul class=\"nav navbar-nav add\">
            <li><a href=\"/issledovanie/deleteIssledovanie/";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["issledovanie"]) ? $context["issledovanie"] : $this->getContext($context, "issledovanie")), "id", array()), "html", null, true);
        echo "\" class=\"delete_entity\">Удалить лабораторное исследование</a></li>
        </ul>
    </div>

    <div class=\"row\">
        <input type=\"submit\" value=\"Сохранить изменения\" class=\"btn btn-success\" style=\"float:right; margin-top:30px\"/>
    </div>

";
        
        $__internal_ff0e7db8c41fd8e38d8422b3d9a9e87033c25081aced473c99fcde2b0431fa5b->leave($__internal_ff0e7db8c41fd8e38d8422b3d9a9e87033c25081aced473c99fcde2b0431fa5b_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_36c761206f42829cd5706f42adf0a95bc64208b9a16e975448d3cbc894efc6a0 = $this->env->getExtension("native_profiler");
        $__internal_36c761206f42829cd5706f42adf0a95bc64208b9a16e975448d3cbc894efc6a0->enter($__internal_36c761206f42829cd5706f42adf0a95bc64208b9a16e975448d3cbc894efc6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 54
        echo "
";
        
        $__internal_36c761206f42829cd5706f42adf0a95bc64208b9a16e975448d3cbc894efc6a0->leave($__internal_36c761206f42829cd5706f42adf0a95bc64208b9a16e975448d3cbc894efc6a0_prof);

    }

    public function getTemplateName()
    {
        return ":issledovanie:editIssledovanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  125 => 53,  109 => 43,  92 => 29,  88 => 28,  82 => 25,  78 => 24,  72 => 21,  68 => 20,  62 => 17,  58 => 16,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <div class="row">*/
/*         <h1>Редакитрование лабораторного исследования</h1>*/
/*     </div>*/
/*     {{ form_start(form) }}*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right; margin-bottom: 30px"/>*/
/*     </div>*/
/* */
/*     <div class="issledovanie row">*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.nomer, 'Номер протокола') }}*/
/*             {{ form_widget(form.nomer, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.date, 'Дата протокола (дд.мм.гггг)') }}*/
/*             {{ form_widget(form.date, { 'attr': {'class': 'form-control', 'data-validation' : 'date', 'data-validation-optional' : 'true', 'data-validation-format' : 'dd.mm.yyyy'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.all_count, 'Всего проб') }}*/
/*             {{ form_widget(form.all_count, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             {{ form_label(form.ne_sootv, 'Не соответствует') }}*/
/*             {{ form_widget(form.ne_sootv, { 'attr': {'class': 'form-control'} }) }}*/
/*         </div>*/
/* */
/*         <div class="col-md-3">*/
/* */
/*         </div>*/
/*         <div class="col-md-3">*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <hr/>*/
/*         <ul class="nav navbar-nav add">*/
/*             <li><a href="/issledovanie/deleteIssledovanie/{{ issledovanie.id }}" class="delete_entity">Удалить лабораторное исследование</a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <input type="submit" value="Сохранить изменения" class="btn btn-success" style="float:right; margin-top:30px"/>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* */
/* {% endblock %}*/
