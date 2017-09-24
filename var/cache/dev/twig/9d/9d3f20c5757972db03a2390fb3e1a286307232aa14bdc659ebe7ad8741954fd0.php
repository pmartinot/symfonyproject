<?php

/* ACSEOLoginBundle:Contact:admin.html.twig */
class __TwigTemplate_d211e4d0fe623b39dddf029ec011561a1bbb90a9f3e9e1d17c4082e7c3acd533 extends Twig_Template
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
        $__internal_03ffcc7299857ad2f8e69e2e78dd92e2cd4acaaf7e9ac43f21d5e1e564afdbc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ffcc7299857ad2f8e69e2e78dd92e2cd4acaaf7e9ac43f21d5e1e564afdbc7->enter($__internal_03ffcc7299857ad2f8e69e2e78dd92e2cd4acaaf7e9ac43f21d5e1e564afdbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ACSEOLoginBundle:Contact:admin.html.twig"));

        $__internal_6a9fd57c837ad774984a92c395bb9a4bac7f87fb0ef3ee93392a171eac830771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9fd57c837ad774984a92c395bb9a4bac7f87fb0ef3ee93392a171eac830771->enter($__internal_6a9fd57c837ad774984a92c395bb9a4bac7f87fb0ef3ee93392a171eac830771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ACSEOLoginBundle:Contact:admin.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" />
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ACSEO_contact_homepage");
        echo "\"> Retour page de contact </a>
</br>
</br>
<h1> Partie Admin </h1>
<table>
  <tr>
    <th>Nom</th>
    <th>Contenu</th>
    <th>Date</th>
    <th>Contrôlé</th>
  <tr>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listContacts"]) || array_key_exists("listContacts", $context) ? $context["listContacts"] : (function () { throw new Twig_Error_Runtime('Variable "listContacts" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 14
            echo "    <tr>
      <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "name", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "content", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
      ";
            // line 18
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "state", array())) {
                echo "<td> ✓ </td> ";
            } else {
                echo " <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ACSEO_contact_check", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["contact"], "id", array()))), "html", null, true);
                echo "\"> Valider </a> ";
            }
            // line 19
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>
";
        
        $__internal_03ffcc7299857ad2f8e69e2e78dd92e2cd4acaaf7e9ac43f21d5e1e564afdbc7->leave($__internal_03ffcc7299857ad2f8e69e2e78dd92e2cd4acaaf7e9ac43f21d5e1e564afdbc7_prof);

        
        $__internal_6a9fd57c837ad774984a92c395bb9a4bac7f87fb0ef3ee93392a171eac830771->leave($__internal_6a9fd57c837ad774984a92c395bb9a4bac7f87fb0ef3ee93392a171eac830771_prof);

    }

    public function getTemplateName()
    {
        return "ACSEOLoginBundle:Contact:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  71 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  48 => 14,  44 => 13,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"{{ asset('css/admin.css') }}\" />
<a href=\"{{ path('ACSEO_contact_homepage') }}\"> Retour page de contact </a>
</br>
</br>
<h1> Partie Admin </h1>
<table>
  <tr>
    <th>Nom</th>
    <th>Contenu</th>
    <th>Date</th>
    <th>Contrôlé</th>
  <tr>
  {% for contact in listContacts %}
    <tr>
      <td>{{ contact.name }}</td>
      <td>{{ contact.content }}</td>
      <td>{{ contact.date | date('d/m/Y') }}</td>
      {% if contact.state %}<td> ✓ </td> {%else%} <td><a href=\"{{ path('ACSEO_contact_check', {'id': contact.id}) }}\"> Valider </a> {% endif %}
    </tr>
  {% endfor %}
</table>
", "ACSEOLoginBundle:Contact:admin.html.twig", "/opt/lampp/htdocs/symfony/projectAsceo/src/ACSEO/LoginBundle/Resources/views/Contact/admin.html.twig");
    }
}
