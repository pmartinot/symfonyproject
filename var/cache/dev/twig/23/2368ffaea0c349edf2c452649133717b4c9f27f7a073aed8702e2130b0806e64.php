<?php

/* ACSEOLoginBundle:Contact:form.html.twig */
class __TwigTemplate_aa00f3cd5fc3faa56a8596f02d541ba1e137c2a373129e911e04c76675001baf extends Twig_Template
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
        $__internal_69c8c71d692d5b49bd438ee86c345269f38e7cc2bd387228f3fba142385d4895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c8c71d692d5b49bd438ee86c345269f38e7cc2bd387228f3fba142385d4895->enter($__internal_69c8c71d692d5b49bd438ee86c345269f38e7cc2bd387228f3fba142385d4895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ACSEOLoginBundle:Contact:form.html.twig"));

        $__internal_ee451794d2b097cec9d6ad63998bf349884f9830cb26e2fe4d06033f98c1f41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee451794d2b097cec9d6ad63998bf349884f9830cb26e2fe4d06033f98c1f41f->enter($__internal_ee451794d2b097cec9d6ad63998bf349884f9830cb26e2fe4d06033f98c1f41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ACSEOLoginBundle:Contact:form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/homepage.css"), "html", null, true);
        echo "\" />
<html>
  <head>
    <title>Contact</title>
  </head>
  <body>
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "user", array())) {
            // line 9
            echo "      <p>Bonjour, vous êtes <a style=\"color:green\">connecté</a> en tant que ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "<p>
    ";
        } else {
            // line 11
            echo "      <p>Bonjour, vous n'êtes <a style=\"color:red\">pas connecté<a></p>
    ";
        }
        // line 13
        echo "    </br>
    <a href=\"http://127.0.0.1:8000/login\">Se connecter</a> -
    <a href=\"http://127.0.0.1:8000/logout\">Se déconnecter</a> -
    <a href=\"http://127.0.0.1:8000/contact/admin\">Partie Admin</a>
    <h1>Formulaire de contact</h1>

    <fieldset>
      <legend>Posez votre question!</legend>
      ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "        <p style=\"color:green\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </fieldset>

  </body>
</html>
";
        
        $__internal_69c8c71d692d5b49bd438ee86c345269f38e7cc2bd387228f3fba142385d4895->leave($__internal_69c8c71d692d5b49bd438ee86c345269f38e7cc2bd387228f3fba142385d4895_prof);

        
        $__internal_ee451794d2b097cec9d6ad63998bf349884f9830cb26e2fe4d06033f98c1f41f->leave($__internal_ee451794d2b097cec9d6ad63998bf349884f9830cb26e2fe4d06033f98c1f41f_prof);

    }

    public function getTemplateName()
    {
        return "ACSEOLoginBundle:Contact:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  67 => 23,  63 => 22,  59 => 21,  49 => 13,  45 => 11,  39 => 9,  37 => 8,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<link rel=\"stylesheet\" href=\"{{ asset('css/homepage.css') }}\" />
<html>
  <head>
    <title>Contact</title>
  </head>
  <body>
    {% if app.user %}
      <p>Bonjour, vous êtes <a style=\"color:green\">connecté</a> en tant que {{ app.user.username }}<p>
    {% else %}
      <p>Bonjour, vous n'êtes <a style=\"color:red\">pas connecté<a></p>
    {% endif %}
    </br>
    <a href=\"http://127.0.0.1:8000/login\">Se connecter</a> -
    <a href=\"http://127.0.0.1:8000/logout\">Se déconnecter</a> -
    <a href=\"http://127.0.0.1:8000/contact/admin\">Partie Admin</a>
    <h1>Formulaire de contact</h1>

    <fieldset>
      <legend>Posez votre question!</legend>
      {{ form(form) }}
      {% for message in app.session.flashbag.get('info') %}
        <p style=\"color:green\">{{ message }}</p>
      {% endfor %}
    </fieldset>

  </body>
</html>
", "ACSEOLoginBundle:Contact:form.html.twig", "/opt/lampp/htdocs/symfony/projectAsceo/src/ACSEO/LoginBundle/Resources/views/Contact/form.html.twig");
    }
}
