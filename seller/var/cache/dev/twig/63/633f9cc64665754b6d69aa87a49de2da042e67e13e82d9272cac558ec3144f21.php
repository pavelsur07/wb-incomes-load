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

/* base.html.twig */
class __TwigTemplate_84cc62967411f1a80601f9917355fcfa81494857792ac2e5f73bfe1c248b9997 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
    <body class=\"c-app\">
    <div class=\"c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show\" id=\"sidebar\">
        <div class=\"c-sidebar-brand d-md-down-none\">
            <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                <img class=\"navbar-brand-full\" src=\"/logo.png\" width=\"90\" height=\"25\" alt=\"Logo\">
            </a>
        </div>
        ";
        // line 20
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("sidebar", ["currentClass" => "c-active"]);
        echo "
        <button class=\"c-sidebar-minimizer c-class-toggler\" type=\"button\" data-target=\"_parent\" data-class=\"c-sidebar-unfoldable\"></button>
    </div>
    <div class=\"c-wrapper\">
        <header class=\"c-header c-header-light c-header-fixed\">

            <button class=\"c-header-toggler c-class-toggler mfs-3 d-md-down-none\" type=\"button\" data-target=\"#sidebar\" data-class=\"c-sidebar-lg-show\" responsive=\"true\">
                <i class=\"fa fa-bars\"></i>
            </button>

            <ul class=\"c-header-nav mfs-auto\">
                <li class=\"c-header-nav-item mx-2 dropdown nav-item\" direction=\"down\">
                <a href=\"#\" class=\"c-header-nav-link nav-link\">
                    <i class=\"c-sidebar-nav-icon icon-event\"></i>
                    <span class=\"badge badge-info badge-pill\">4</span>
                </a>
                </li>
            </ul>

            <ul class=\"c-header-nav \">
                <li class=\"c-header-nav-item dropdown show\">
                    <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        James Bond 007
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right pt-0\" data-popper-placement=\"bottom-start\">
                        <div class=\"dropdown-header bg-light py-2\"><strong>Account</strong></div>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"c-sidebar-nav-icon icon-settings\"></i>Profile</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"c-sidebar-nav-icon icon-logout\"></i>Logout</a>
                    </div>
                </li>
            </ul>

            <div class=\"c-subheader justify-content-between px-3\">
                <ol class=\"breadcrumb border-0 m-0 px-0 px-md-3\">
                    ";
        // line 54
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 55
        echo "                </ol>
            </div>
        </header>

        <div class=\"c-body\">
            <main class=\"c-main\">
                <div class=\"container-fluid\">
                    ";
        // line 62
        $this->loadTemplate("_flashes.html.twig", "base.html.twig", 62)->display($context);
        // line 63
        echo "                    ";
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "
                </div>
            </main>
        </div>

        <footer class=\"c-footer\">
            <div> <span>© ";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " All rights reserved</span></div>
        </footer>
    </div>

        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 75,  235 => 74,  217 => 63,  199 => 54,  186 => 10,  176 => 9,  157 => 7,  146 => 77,  144 => 74,  137 => 70,  129 => 64,  126 => 63,  124 => 62,  115 => 55,  113 => 54,  76 => 20,  69 => 16,  63 => 12,  61 => 9,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\">
    <title>{% block title %}Welcome!{% endblock %}</title>

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>
    <body class=\"c-app\">
    <div class=\"c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show\" id=\"sidebar\">
        <div class=\"c-sidebar-brand d-md-down-none\">
            <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
                <img class=\"navbar-brand-full\" src=\"/logo.png\" width=\"90\" height=\"25\" alt=\"Logo\">
            </a>
        </div>
        {{ knp_menu_render('sidebar', {'currentClass': 'c-active'}) }}
        <button class=\"c-sidebar-minimizer c-class-toggler\" type=\"button\" data-target=\"_parent\" data-class=\"c-sidebar-unfoldable\"></button>
    </div>
    <div class=\"c-wrapper\">
        <header class=\"c-header c-header-light c-header-fixed\">

            <button class=\"c-header-toggler c-class-toggler mfs-3 d-md-down-none\" type=\"button\" data-target=\"#sidebar\" data-class=\"c-sidebar-lg-show\" responsive=\"true\">
                <i class=\"fa fa-bars\"></i>
            </button>

            <ul class=\"c-header-nav mfs-auto\">
                <li class=\"c-header-nav-item mx-2 dropdown nav-item\" direction=\"down\">
                <a href=\"#\" class=\"c-header-nav-link nav-link\">
                    <i class=\"c-sidebar-nav-icon icon-event\"></i>
                    <span class=\"badge badge-info badge-pill\">4</span>
                </a>
                </li>
            </ul>

            <ul class=\"c-header-nav \">
                <li class=\"c-header-nav-item dropdown show\">
                    <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        James Bond 007
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right pt-0\" data-popper-placement=\"bottom-start\">
                        <div class=\"dropdown-header bg-light py-2\"><strong>Account</strong></div>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"c-sidebar-nav-icon icon-settings\"></i>Profile</a>
                        <a class=\"dropdown-item\" href=\"#\"><i class=\"c-sidebar-nav-icon icon-logout\"></i>Logout</a>
                    </div>
                </li>
            </ul>

            <div class=\"c-subheader justify-content-between px-3\">
                <ol class=\"breadcrumb border-0 m-0 px-0 px-md-3\">
                    {% block breadcrumbs %}{% endblock %}
                </ol>
            </div>
        </header>

        <div class=\"c-body\">
            <main class=\"c-main\">
                <div class=\"container-fluid\">
                    {% include '_flashes.html.twig' %}
                    {% block body %}{% endblock %}

                </div>
            </main>
        </div>

        <footer class=\"c-footer\">
            <div> <span>© {{ \"now\"|date(\"Y\") }} All rights reserved</span></div>
        </footer>
    </div>

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </body>
</html>", "base.html.twig", "/app/templates/base.html.twig");
    }
}
