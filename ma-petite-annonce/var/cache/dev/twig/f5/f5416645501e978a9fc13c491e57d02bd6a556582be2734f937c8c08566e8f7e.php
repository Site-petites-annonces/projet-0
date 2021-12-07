<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* annonce/home.html.twig */
class __TwigTemplate_0cd44f290378d2da9974f0d596162510b56c8cd8bb6535ea87fa1a0947230d07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/home.html.twig"));

        // line 1
        echo "<section classname=\"header\">
\t<div>
\t\t<h1>Bienveneu dans ce site de petite Annonce</h1>
\t\t<h1 classname=\"logo\">Ma Petite Annonce</h1>
\t</div>
\t<div classname=\"btn\">
\t\t<a href=\"/CreateAnnonce\">Créer une annonce</a>
\t\t<a href=\"/OneAnnonce\">Voir les Annonces actuelles</a>
\t</div>
\t<div>
\t\t<p>Ce site de petite Annonce est présentée par Thierno Balde,Baptiste Dantas, Nikolla Marinkovic et Ulysse Perret
\t\t</p>
\t\t<p>Ce site est la pour que les utilisateurs poste des petites annonces et  y répondent.</p>

\t</div>

</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "annonce/home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section classname=\"header\">
\t<div>
\t\t<h1>Bienveneu dans ce site de petite Annonce</h1>
\t\t<h1 classname=\"logo\">Ma Petite Annonce</h1>
\t</div>
\t<div classname=\"btn\">
\t\t<a href=\"/CreateAnnonce\">Créer une annonce</a>
\t\t<a href=\"/OneAnnonce\">Voir les Annonces actuelles</a>
\t</div>
\t<div>
\t\t<p>Ce site de petite Annonce est présentée par Thierno Balde,Baptiste Dantas, Nikolla Marinkovic et Ulysse Perret
\t\t</p>
\t\t<p>Ce site est la pour que les utilisateurs poste des petites annonces et  y répondent.</p>

\t</div>

</section>
", "annonce/home.html.twig", "/Users/ulysseperret/Desktop/Test-Projet/Projet0/templates/annonce/home.html.twig");
    }
}
