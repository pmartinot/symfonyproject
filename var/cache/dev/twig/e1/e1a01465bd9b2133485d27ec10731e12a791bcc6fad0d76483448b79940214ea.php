<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9d1b17705ac9e4847598e11da598c5bc6bfce97b7e4a4d98c2cf4c2d18c8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_425100a0b65f49a4925fe1eb968c524a70247b0c7da086259f6e2c2ea6355523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425100a0b65f49a4925fe1eb968c524a70247b0c7da086259f6e2c2ea6355523->enter($__internal_425100a0b65f49a4925fe1eb968c524a70247b0c7da086259f6e2c2ea6355523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_57b271ecf661ff51d66af4ae7da240a354e49bc3363d1ef908578dc5d3f0b30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b271ecf661ff51d66af4ae7da240a354e49bc3363d1ef908578dc5d3f0b30e->enter($__internal_57b271ecf661ff51d66af4ae7da240a354e49bc3363d1ef908578dc5d3f0b30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425100a0b65f49a4925fe1eb968c524a70247b0c7da086259f6e2c2ea6355523->leave($__internal_425100a0b65f49a4925fe1eb968c524a70247b0c7da086259f6e2c2ea6355523_prof);

        
        $__internal_57b271ecf661ff51d66af4ae7da240a354e49bc3363d1ef908578dc5d3f0b30e->leave($__internal_57b271ecf661ff51d66af4ae7da240a354e49bc3363d1ef908578dc5d3f0b30e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a94716378133d4e603925358efb1126ae43bed87d52ddffb46c0a3c0258d7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a94716378133d4e603925358efb1126ae43bed87d52ddffb46c0a3c0258d7cd->enter($__internal_5a94716378133d4e603925358efb1126ae43bed87d52ddffb46c0a3c0258d7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44ff0cc13f1faf806ad29a2f926cecc86f7f052539a6deea101e8ea5da774ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ff0cc13f1faf806ad29a2f926cecc86f7f052539a6deea101e8ea5da774ae8->enter($__internal_44ff0cc13f1faf806ad29a2f926cecc86f7f052539a6deea101e8ea5da774ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_44ff0cc13f1faf806ad29a2f926cecc86f7f052539a6deea101e8ea5da774ae8->leave($__internal_44ff0cc13f1faf806ad29a2f926cecc86f7f052539a6deea101e8ea5da774ae8_prof);

        
        $__internal_5a94716378133d4e603925358efb1126ae43bed87d52ddffb46c0a3c0258d7cd->leave($__internal_5a94716378133d4e603925358efb1126ae43bed87d52ddffb46c0a3c0258d7cd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e81d3bce950682d28bc1f8b67b82df2919409a29c659b7bf2e633d4a7a47a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e81d3bce950682d28bc1f8b67b82df2919409a29c659b7bf2e633d4a7a47a2f->enter($__internal_8e81d3bce950682d28bc1f8b67b82df2919409a29c659b7bf2e633d4a7a47a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65f8e624eb9f14f3f147e9382c6cadacacff3fd5f0b4ac472ae31b73154ed266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f8e624eb9f14f3f147e9382c6cadacacff3fd5f0b4ac472ae31b73154ed266->enter($__internal_65f8e624eb9f14f3f147e9382c6cadacacff3fd5f0b4ac472ae31b73154ed266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_65f8e624eb9f14f3f147e9382c6cadacacff3fd5f0b4ac472ae31b73154ed266->leave($__internal_65f8e624eb9f14f3f147e9382c6cadacacff3fd5f0b4ac472ae31b73154ed266_prof);

        
        $__internal_8e81d3bce950682d28bc1f8b67b82df2919409a29c659b7bf2e633d4a7a47a2f->leave($__internal_8e81d3bce950682d28bc1f8b67b82df2919409a29c659b7bf2e633d4a7a47a2f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eeebab537e4b0d43a7acbab2c3f5c3b4281b299680e1645851d0fd69a18df30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eeebab537e4b0d43a7acbab2c3f5c3b4281b299680e1645851d0fd69a18df30->enter($__internal_4eeebab537e4b0d43a7acbab2c3f5c3b4281b299680e1645851d0fd69a18df30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d948d1768e18f21b906f24220559fde69c2e5887b900eabffc1d20ba2f8ffcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d948d1768e18f21b906f24220559fde69c2e5887b900eabffc1d20ba2f8ffcf->enter($__internal_6d948d1768e18f21b906f24220559fde69c2e5887b900eabffc1d20ba2f8ffcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6d948d1768e18f21b906f24220559fde69c2e5887b900eabffc1d20ba2f8ffcf->leave($__internal_6d948d1768e18f21b906f24220559fde69c2e5887b900eabffc1d20ba2f8ffcf_prof);

        
        $__internal_4eeebab537e4b0d43a7acbab2c3f5c3b4281b299680e1645851d0fd69a18df30->leave($__internal_4eeebab537e4b0d43a7acbab2c3f5c3b4281b299680e1645851d0fd69a18df30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/symfony/projectAsceo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
