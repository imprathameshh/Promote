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

/* themes/custom/Promote/template/layout/page.html.twig */
class __TwigTemplate_2be4dfa6417dc43dfcddc3b8ea40fc06 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "<div
\tclass=\"layout-container\">
\t<!-- HeaderSec Start -->
\t<div class=\"header-wrap\">
\t\t<header>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"header-content\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_logo", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu-toggle\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-menu-wrap\">
\t\t\t\t\t\t";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"header-right\">
\t\t\t\t\t\t\t<div class=\"btn-wrap\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-black\">Get Started</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t</div>

\t<!-- HeaderSec End -->

\t";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
\t";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "

\t";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "

\t";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "

\t";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "

\t<main role=\"main\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t";
        // line 90
        echo "
\t\t<div class=\"layout-content\">
\t\t\t";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t";
        // line 95
        echo "
\t\t";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 96)) {
            // line 97
            echo "\t\t\t<aside class=\"layout-sidebar-first\" role=\"complementary\">
\t\t\t\t";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
\t\t\t</aside>
\t\t";
        }
        // line 101
        echo "
\t\t";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 102)) {
            // line 103
            echo "\t\t\t<aside class=\"layout-sidebar-second\" role=\"complementary\">
\t\t\t\t";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
\t\t\t</aside>
\t\t";
        }
        // line 107
        echo "
\t</main>

\t";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 110)) {
            // line 111
            echo "\t\t<footer role=\"contentinfo\">
\t\t\t";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo "
\t\t</footer>
\t";
        }
        // line 115
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/Promote/template/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 115,  150 => 112,  147 => 111,  145 => 110,  140 => 107,  134 => 104,  131 => 103,  129 => 102,  126 => 101,  120 => 98,  117 => 97,  115 => 96,  112 => 95,  107 => 92,  103 => 90,  96 => 85,  91 => 83,  86 => 81,  81 => 79,  77 => 78,  60 => 64,  49 => 56,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<div
\tclass=\"layout-container\">
\t<!-- HeaderSec Start -->
\t<div class=\"header-wrap\">
\t\t<header>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"header-content\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t{{page.site_logo}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu-toggle\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-menu-wrap\">
\t\t\t\t\t\t{{page.header}}
\t\t\t\t\t\t<div class=\"header-right\">
\t\t\t\t\t\t\t<div class=\"btn-wrap\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-black\">Get Started</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t</div>

\t<!-- HeaderSec End -->

\t{{ page.primary_menu }}
\t{{ page.secondary_menu }}

\t{{ page.breadcrumb }}

\t{{ page.highlighted }}

\t{{ page.help }}

\t<main role=\"main\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t{# link is in html.html.twig #}

\t\t<div class=\"layout-content\">
\t\t\t{{ page.content }}
\t\t</div>
\t\t{# /.layout-content #}

\t\t{% if page.sidebar_first %}
\t\t\t<aside class=\"layout-sidebar-first\" role=\"complementary\">
\t\t\t\t{{ page.sidebar_first }}
\t\t\t</aside>
\t\t{% endif %}

\t\t{% if page.sidebar_second %}
\t\t\t<aside class=\"layout-sidebar-second\" role=\"complementary\">
\t\t\t\t{{ page.sidebar_second }}
\t\t\t</aside>
\t\t{% endif %}

\t</main>

\t{% if page.footer %}
\t\t<footer role=\"contentinfo\">
\t\t\t{{ page.footer }}
\t\t</footer>
\t{% endif %}

</div>
{# /.layout-container #}
", "themes/custom/Promote/template/layout/page.html.twig", "/app/web/themes/custom/Promote/template/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 96);
        static $filters = array("escape" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
