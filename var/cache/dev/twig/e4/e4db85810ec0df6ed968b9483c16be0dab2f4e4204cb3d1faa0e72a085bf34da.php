<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f0ca63deaec656fe9cdc3fde8bc17788a28033862fb71b580b124bb73c9b2049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ca63deaec656fe9cdc3fde8bc17788a28033862fb71b580b124bb73c9b2049->enter($__internal_f0ca63deaec656fe9cdc3fde8bc17788a28033862fb71b580b124bb73c9b2049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7314becd8a6d2193c06beb5aa7e45776a10784e337c970b554339f5879277422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7314becd8a6d2193c06beb5aa7e45776a10784e337c970b554339f5879277422->enter($__internal_7314becd8a6d2193c06beb5aa7e45776a10784e337c970b554339f5879277422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0ca63deaec656fe9cdc3fde8bc17788a28033862fb71b580b124bb73c9b2049->leave($__internal_f0ca63deaec656fe9cdc3fde8bc17788a28033862fb71b580b124bb73c9b2049_prof);

        
        $__internal_7314becd8a6d2193c06beb5aa7e45776a10784e337c970b554339f5879277422->leave($__internal_7314becd8a6d2193c06beb5aa7e45776a10784e337c970b554339f5879277422_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_baca92f939b3b4b3d4f4e31979ba7ef84268371522357d0cad7ef301cd15b389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baca92f939b3b4b3d4f4e31979ba7ef84268371522357d0cad7ef301cd15b389->enter($__internal_baca92f939b3b4b3d4f4e31979ba7ef84268371522357d0cad7ef301cd15b389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af77cc6db319501cb8431de093050ae67a131294f3a2f87248e718e32c258e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af77cc6db319501cb8431de093050ae67a131294f3a2f87248e718e32c258e38->enter($__internal_af77cc6db319501cb8431de093050ae67a131294f3a2f87248e718e32c258e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_af77cc6db319501cb8431de093050ae67a131294f3a2f87248e718e32c258e38->leave($__internal_af77cc6db319501cb8431de093050ae67a131294f3a2f87248e718e32c258e38_prof);

        
        $__internal_baca92f939b3b4b3d4f4e31979ba7ef84268371522357d0cad7ef301cd15b389->leave($__internal_baca92f939b3b4b3d4f4e31979ba7ef84268371522357d0cad7ef301cd15b389_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_812f4e1665385f72aba8ef069d4fe3b36cf4d90e464e5cfeaffbb571ca442a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812f4e1665385f72aba8ef069d4fe3b36cf4d90e464e5cfeaffbb571ca442a2c->enter($__internal_812f4e1665385f72aba8ef069d4fe3b36cf4d90e464e5cfeaffbb571ca442a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_67e958cb6e112ecd729e01df8a452429e20270582a506f211fdc12fe9338724a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e958cb6e112ecd729e01df8a452429e20270582a506f211fdc12fe9338724a->enter($__internal_67e958cb6e112ecd729e01df8a452429e20270582a506f211fdc12fe9338724a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_67e958cb6e112ecd729e01df8a452429e20270582a506f211fdc12fe9338724a->leave($__internal_67e958cb6e112ecd729e01df8a452429e20270582a506f211fdc12fe9338724a_prof);

        
        $__internal_812f4e1665385f72aba8ef069d4fe3b36cf4d90e464e5cfeaffbb571ca442a2c->leave($__internal_812f4e1665385f72aba8ef069d4fe3b36cf4d90e464e5cfeaffbb571ca442a2c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e94aac2ce1b9388290e909f521e50f8e54ca7d3c6609a1b27508ab6950f9ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e94aac2ce1b9388290e909f521e50f8e54ca7d3c6609a1b27508ab6950f9ddf->enter($__internal_9e94aac2ce1b9388290e909f521e50f8e54ca7d3c6609a1b27508ab6950f9ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_297662c2b0a0ed9a400e6d69b14f5bd5fa878685a4b0b21e677c1700ca100c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297662c2b0a0ed9a400e6d69b14f5bd5fa878685a4b0b21e677c1700ca100c9a->enter($__internal_297662c2b0a0ed9a400e6d69b14f5bd5fa878685a4b0b21e677c1700ca100c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_297662c2b0a0ed9a400e6d69b14f5bd5fa878685a4b0b21e677c1700ca100c9a->leave($__internal_297662c2b0a0ed9a400e6d69b14f5bd5fa878685a4b0b21e677c1700ca100c9a_prof);

        
        $__internal_9e94aac2ce1b9388290e909f521e50f8e54ca7d3c6609a1b27508ab6950f9ddf->leave($__internal_9e94aac2ce1b9388290e909f521e50f8e54ca7d3c6609a1b27508ab6950f9ddf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/symfony/projectAsceo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
