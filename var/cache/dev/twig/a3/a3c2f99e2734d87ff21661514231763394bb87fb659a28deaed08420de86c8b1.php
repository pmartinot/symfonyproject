<?php

/* ACSEOUserBundle:Security:login.html.twig */
class __TwigTemplate_3945d5e60cc1eab1ec28c649789683f2b5ccf6398f5b49bf4325ba5137b0cee3 extends Twig_Template
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
        $__internal_fb905e62bc19633c03831a557377836296d71e8b67906aba6ba5c66191de3ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb905e62bc19633c03831a557377836296d71e8b67906aba6ba5c66191de3ee5->enter($__internal_fb905e62bc19633c03831a557377836296d71e8b67906aba6ba5c66191de3ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ACSEOUserBundle:Security:login.html.twig"));

        $__internal_1af19187562ee3188febf244fbd2bc5652e6486575a3403f76a891f5a2b5ff03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af19187562ee3188febf244fbd2bc5652e6486575a3403f76a891f5a2b5ff03->enter($__internal_1af19187562ee3188febf244fbd2bc5652e6486575a3403f76a891f5a2b5ff03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ACSEOUserBundle:Security:login.html.twig"));

        // line 1
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 1, $this->getSourceContext()); })())) {
            // line 2
            echo "  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 2, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ACSEO_contact_homepage");
        echo "\"> Retour page de contact </a>
</br>
</br>
</br>
<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
  <label for=\"username\">Login :</label>
  <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

  <label for=\"password\">Mot de passe :</label>
  <input type=\"password\" id=\"password\" name=\"_password\" />
  <input type=\"submit\" value=\"Connexion\" />
</form>
";
        
        $__internal_fb905e62bc19633c03831a557377836296d71e8b67906aba6ba5c66191de3ee5->leave($__internal_fb905e62bc19633c03831a557377836296d71e8b67906aba6ba5c66191de3ee5_prof);

        
        $__internal_1af19187562ee3188febf244fbd2bc5652e6486575a3403f76a891f5a2b5ff03->leave($__internal_1af19187562ee3188febf244fbd2bc5652e6486575a3403f76a891f5a2b5ff03_prof);

    }

    public function getTemplateName()
    {
        return "ACSEOUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  41 => 8,  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
  <div class=\"alert alert-danger\">{{ error.message }}</div>
{% endif %}
<a href=\"{{ path('ACSEO_contact_homepage') }}\"> Retour page de contact </a>
</br>
</br>
</br>
<form action=\"{{ path('login_check') }}\" method=\"post\">
  <label for=\"username\">Login :</label>
  <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

  <label for=\"password\">Mot de passe :</label>
  <input type=\"password\" id=\"password\" name=\"_password\" />
  <input type=\"submit\" value=\"Connexion\" />
</form>
", "ACSEOUserBundle:Security:login.html.twig", "/opt/lampp/htdocs/symfony/projectAsceo/src/ACSEO/UserBundle/Resources/views/Security/login.html.twig");
    }
}
