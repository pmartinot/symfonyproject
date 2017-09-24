<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b96223e688651f35180f4b8fec2f70762ad401afa5c3e476f67d7561f468963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b96223e688651f35180f4b8fec2f70762ad401afa5c3e476f67d7561f468963->enter($__internal_5b96223e688651f35180f4b8fec2f70762ad401afa5c3e476f67d7561f468963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_37638685dfd609657c90f0b47ff449a779537c612699b37f43b4fe2a94039d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37638685dfd609657c90f0b47ff449a779537c612699b37f43b4fe2a94039d30->enter($__internal_37638685dfd609657c90f0b47ff449a779537c612699b37f43b4fe2a94039d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b96223e688651f35180f4b8fec2f70762ad401afa5c3e476f67d7561f468963->leave($__internal_5b96223e688651f35180f4b8fec2f70762ad401afa5c3e476f67d7561f468963_prof);

        
        $__internal_37638685dfd609657c90f0b47ff449a779537c612699b37f43b4fe2a94039d30->leave($__internal_37638685dfd609657c90f0b47ff449a779537c612699b37f43b4fe2a94039d30_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b03ce4d74d31c2acb4ae5ceda39f7f2964f879c2ca24412af4fb068dc8d796d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03ce4d74d31c2acb4ae5ceda39f7f2964f879c2ca24412af4fb068dc8d796d9->enter($__internal_b03ce4d74d31c2acb4ae5ceda39f7f2964f879c2ca24412af4fb068dc8d796d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f618a1f73a421a5a94ed1426cf9952e4db1f3be76ce9a88436ed5fb051305927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f618a1f73a421a5a94ed1426cf9952e4db1f3be76ce9a88436ed5fb051305927->enter($__internal_f618a1f73a421a5a94ed1426cf9952e4db1f3be76ce9a88436ed5fb051305927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f618a1f73a421a5a94ed1426cf9952e4db1f3be76ce9a88436ed5fb051305927->leave($__internal_f618a1f73a421a5a94ed1426cf9952e4db1f3be76ce9a88436ed5fb051305927_prof);

        
        $__internal_b03ce4d74d31c2acb4ae5ceda39f7f2964f879c2ca24412af4fb068dc8d796d9->leave($__internal_b03ce4d74d31c2acb4ae5ceda39f7f2964f879c2ca24412af4fb068dc8d796d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5529b398c9eb01bed7d05949ab07313140d24a7e6553ae028ea6d99fc474fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5529b398c9eb01bed7d05949ab07313140d24a7e6553ae028ea6d99fc474fca->enter($__internal_a5529b398c9eb01bed7d05949ab07313140d24a7e6553ae028ea6d99fc474fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_822421a94f64ece21748e6e380b533f64f6c382377361a910dbc6636cbfd7596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822421a94f64ece21748e6e380b533f64f6c382377361a910dbc6636cbfd7596->enter($__internal_822421a94f64ece21748e6e380b533f64f6c382377361a910dbc6636cbfd7596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_822421a94f64ece21748e6e380b533f64f6c382377361a910dbc6636cbfd7596->leave($__internal_822421a94f64ece21748e6e380b533f64f6c382377361a910dbc6636cbfd7596_prof);

        
        $__internal_a5529b398c9eb01bed7d05949ab07313140d24a7e6553ae028ea6d99fc474fca->leave($__internal_a5529b398c9eb01bed7d05949ab07313140d24a7e6553ae028ea6d99fc474fca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_221f6e711fb976d5956ba8d134039da67fa3f256bbf38d30373b5b841bfd55d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221f6e711fb976d5956ba8d134039da67fa3f256bbf38d30373b5b841bfd55d9->enter($__internal_221f6e711fb976d5956ba8d134039da67fa3f256bbf38d30373b5b841bfd55d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4dd5a5c60771fc3565f238e68632425a5d1771ad7490e6d92e04fab085c00e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd5a5c60771fc3565f238e68632425a5d1771ad7490e6d92e04fab085c00e9c->enter($__internal_4dd5a5c60771fc3565f238e68632425a5d1771ad7490e6d92e04fab085c00e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4dd5a5c60771fc3565f238e68632425a5d1771ad7490e6d92e04fab085c00e9c->leave($__internal_4dd5a5c60771fc3565f238e68632425a5d1771ad7490e6d92e04fab085c00e9c_prof);

        
        $__internal_221f6e711fb976d5956ba8d134039da67fa3f256bbf38d30373b5b841bfd55d9->leave($__internal_221f6e711fb976d5956ba8d134039da67fa3f256bbf38d30373b5b841bfd55d9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/symfony/projectAsceo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
