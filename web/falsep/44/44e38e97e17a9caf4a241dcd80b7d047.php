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

/* themes/custom/Promote/template/menu/menu--main.html.twig */
class __TwigTemplate_b21622a8b6f5ec681279b7160bdd98f8 extends Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 29, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 30
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 31
            echo "\t";
            $macros["menus"] = $this;
            // line 32
            echo "\t";
            if (($context["items"] ?? null)) {
                // line 33
                echo "\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 34
                    echo "\t\t\t<ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 34, $this->source), "html", null, true);
                    echo ">
\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t<ul class=\"subnav-content\">
\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "\t\t\t\t\t";
                    // line 40
                    $context["item_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,                     // line 41
$context["item"], "is_expanded", [], "any", false, false, true, 41) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 41))) ? ("subnav") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 42
$context["item"], "in_active_trail", [], "any", false, false, true, 42)) ? ("current-menu-item") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["loop"], "first", [], "any", false, false, true, 43)) ? ("first") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["loop"], "last", [], "any", false, false, true, 44)) ? ("last") : (""))];
                    // line 47
                    echo "\t\t\t\t\t<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo ">
\t\t\t\t\t\t";
                    // line 48
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 48), 48, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 49
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49)) {
                        // line 50
                        echo "\t\t\t\t\t\t\t";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 50), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 50, $context, $this->getSourceContext()));
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t</li>
\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t</ul>
\t\t";
            }
            // line 56
            echo "\t";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/Promote/template/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 56,  142 => 54,  127 => 52,  121 => 50,  119 => 49,  115 => 48,  110 => 47,  108 => 44,  107 => 43,  106 => 42,  105 => 41,  104 => 40,  102 => 39,  84 => 38,  80 => 36,  74 => 34,  71 => 33,  68 => 32,  65 => 31,  50 => 30,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}
{% macro menu_links(items, attributes, menu_level) %}
\t{% import _self as menus %}
\t{% if items %}
\t\t{% if menu_level == 0 %}
\t\t\t<ul{{attributes}}>
\t\t\t{% else %}
\t\t\t\t<ul class=\"subnav-content\">
\t\t\t\t{% endif %}
\t\t\t\t{% for item in items %}
\t\t\t\t\t{%
        \t\tset item_classes = [
\t\t\t\t\t\t\titem.is_expanded and item.below ? 'subnav',
\t\t\t\t\t\t\titem.in_active_trail ? 'current-menu-item',
          \t\tloop.first ? 'first',
          \t\tloop.last ? 'last',
        \t\t]
      \t\t\t%}
\t\t\t\t\t<li{{item.attributes.addClass(item_classes)}}>
\t\t\t\t\t\t{{ link(item.title, item.url) }}
\t\t\t\t\t\t{% if item.below %}
\t\t\t\t\t\t\t{{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t{% endif %}
\t{% endmacro %}
", "themes/custom/Promote/template/menu/menu--main.html.twig", "/app/web/themes/custom/Promote/template/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 30, "if" => 32, "for" => 38, "set" => 40);
        static $filters = array("escape" => 34);
        static $functions = array("link" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
