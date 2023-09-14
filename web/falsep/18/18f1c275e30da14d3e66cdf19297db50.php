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

/* themes/custom/Promote/template/layout/html.html.twig */
class __TwigTemplate_f3ae5d8be4c40a03764344350e92eed4 extends Template
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
        // line 28
        echo "<!DOCTYPE html>
<html";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 29, $this->source), "html", null, true);
        echo ">
\t<head>
\t\t<head-placeholder token=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source), "html", null, true);
        echo "\">
\t\t\t<title>";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 32, $this->source), " | "));
        echo "</title>
\t\t\t<css-placeholder token=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source), "html", null, true);
        echo "\">
\t\t\t\t<js-placeholder token=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 34, $this->source), "html", null, true);
        echo "\"></head>
\t\t\t\t<body";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 35, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t<a href=\"#main-content\" class=\"visually-hidden focusable\">
\t\t\t\t\t\t";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 43, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 44, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 45, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<js-bottom-placeholder token=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 46, $this->source), "html", null, true);
        echo "\"></body>
\t\t\t\t</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/Promote/template/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 46,  83 => 45,  79 => 44,  75 => 43,  70 => 41,  67 => 40,  63 => 35,  59 => 34,  55 => 33,  51 => 32,  47 => 31,  42 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 *
 * @ingroup themeable
 */
#}
<!DOCTYPE html>
<html{{html_attributes}}>
\t<head>
\t\t<head-placeholder token=\"{{ placeholder_token }}\">
\t\t\t<title>{{ head_title|safe_join(' | ') }}</title>
\t\t\t<css-placeholder token=\"{{ placeholder_token }}\">
\t\t\t\t<js-placeholder token=\"{{ placeholder_token }}\"></head>
\t\t\t\t<body{{attributes}}>
\t\t\t\t\t{#
\t\t\t\t\t      Keyboard navigation/accessibility link to main content section in
\t\t\t\t\t      page.html.twig.
\t\t\t\t\t    #}
\t\t\t\t\t<a href=\"#main-content\" class=\"visually-hidden focusable\">
\t\t\t\t\t\t{{ 'Skip to main content'|t }}
\t\t\t\t\t</a>
\t\t\t\t\t{{ page_top }}
\t\t\t\t\t{{ page }}
\t\t\t\t\t{{ page_bottom }}
\t\t\t\t\t<js-bottom-placeholder token=\"{{ placeholder_token }}\"></body>
\t\t\t\t</html>
", "themes/custom/Promote/template/layout/html.html.twig", "/app/web/themes/custom/Promote/template/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 29, "safe_join" => 32, "t" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'safe_join', 't'],
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
