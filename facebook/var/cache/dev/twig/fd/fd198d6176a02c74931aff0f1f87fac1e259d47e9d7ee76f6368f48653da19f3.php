<?php

/* ::login.html.twig */
class __TwigTemplate_fea2fdea46d7a75118c700b4061df61c8691ed67026170e6744270ea3389e4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"grid-container.fluid\">

<div class=\"grid-x grid-padding-x menu\">

<div class=\"large-3 medium-3 cell\">
  <h1>*Logo*</h1>
</div>
<div class=\"large-9 medium-9 cell\">
<form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
  <input type=\"text\" id=\"email\" name=\"_username\" placeholder=\"email\" required />

  <input type=\"password\" name=\"_password\" placeholder=\"mot de passe\" required />
  <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_redirect");
        echo "\" />
  <input type=\"submit\" name=\"connexion\" class=\"btn\" value=\"Connexion\"/>
</form>
</div>


</div>


<div class=\"grid-x grid-padding-x contenu\">


<div class=\"large-12 medium-12 cell\">

  <h1>Inscription</h1>

  <form method=\"post\">
  <!--<input type=\"text\" name=\"username\" id=\"username\" placeholder=\"pseudo (3 à 15 caractères)\" required />-->
    <input type=\"text\" name=\"prenom\" id=\"prenom\" placeholder=\"Prénom\" required />
    <input type=\"text\" name=\"nom\" id=\"nom\" placeholder=\"Nom\" required />
<br/>
  <input type=\"email\" name=\"email\" placeholder=\"email\" required />

  <input type=\"password\" name=\"password\" placeholder=\"mot de passe (3 à 30 caractères)\" required />
<br/>
<input type=\"submit\" name=\"inscription\" class=\"btn\" value=\"Créer un compte\">
</form>

</div>


</div>


<div class=\"grid-x grid-padding-x footer\">
  <div class=\"large-12 medium-12 cell\">
    <p class=\"footer\">&copy; Aix-Marseille Université</p>
  </div>
</div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"grid-container.fluid\">

<div class=\"grid-x grid-padding-x menu\">

<div class=\"large-3 medium-3 cell\">
  <h1>*Logo*</h1>
</div>
<div class=\"large-9 medium-9 cell\">
<form action=\"{{ path('login') }}\" method=\"post\">
  <input type=\"text\" id=\"email\" name=\"_username\" placeholder=\"email\" required />

  <input type=\"password\" name=\"_password\" placeholder=\"mot de passe\" required />
  <input type=\"hidden\" name=\"_target_path\" value=\"{{ path(\"login_redirect\") }}\" />
  <input type=\"submit\" name=\"connexion\" class=\"btn\" value=\"Connexion\"/>
</form>
</div>


</div>


<div class=\"grid-x grid-padding-x contenu\">


<div class=\"large-12 medium-12 cell\">

  <h1>Inscription</h1>

  <form method=\"post\">
  <!--<input type=\"text\" name=\"username\" id=\"username\" placeholder=\"pseudo (3 à 15 caractères)\" required />-->
    <input type=\"text\" name=\"prenom\" id=\"prenom\" placeholder=\"Prénom\" required />
    <input type=\"text\" name=\"nom\" id=\"nom\" placeholder=\"Nom\" required />
<br/>
  <input type=\"email\" name=\"email\" placeholder=\"email\" required />

  <input type=\"password\" name=\"password\" placeholder=\"mot de passe (3 à 30 caractères)\" required />
<br/>
<input type=\"submit\" name=\"inscription\" class=\"btn\" value=\"Créer un compte\">
</form>

</div>


</div>


<div class=\"grid-x grid-padding-x footer\">
  <div class=\"large-12 medium-12 cell\">
    <p class=\"footer\">&copy; Aix-Marseille Université</p>
  </div>
</div>


</div>
{% endblock %}
", "::login.html.twig", "C:\\xampp\\htdocs\\symfony\\facebook\\app/Resources\\views/login.html.twig");
    }
}
