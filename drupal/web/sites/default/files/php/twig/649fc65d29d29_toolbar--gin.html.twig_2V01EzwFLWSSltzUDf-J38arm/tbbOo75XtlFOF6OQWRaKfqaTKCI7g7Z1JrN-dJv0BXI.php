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

/* themes/contrib/gin/templates/navigation/toolbar--gin.html.twig */
class __TwigTemplate_1b7ccba3917bf99df463a5d37a050a0e extends Template
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
        $context["gin_toolbar_id"] = (((($context["toolbar_variant"] ?? null) != "classic")) ? ("gin-toolbar-bar") : ("toolbar-bar"));
        // line 24
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "toolbar"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
  <nav";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", [0 => "toolbar-bar", 1 => "clearfix"], "method", false, false, true, 25), "setAttribute", [0 => "id", 1 => ($context["gin_toolbar_id"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null), 26, $this->source), "html", null, true);
        echo "</h2>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 28
            echo "      ";
            $context["tray"] = (($__internal_compile_0 = ($context["trays"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null);
            // line 29
            echo "      ";
            $context["user_menu"] = (((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 29)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["user_links"] ?? null) : null)) ? ("user-menu") : (false));
            // line 30
            echo "      ";
            if (((            // line 31
($context["toolbar_variant"] ?? null) != "classic") && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
$context["tab"], "attributes", [], "any", false, false, true, 32), "id", [], "any", false, false, true, 32) == "admin-toolbar-search-tab") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
$context["tab"], "attributes", [], "any", false, false, true, 33), "id", [], "any", false, false, true, 33) == "responsive-preview-toolbar-tab")))) {
                // line 36
                echo "        ";
                // line 37
                echo "      ";
            } else {
                // line 38
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 38), "id", [], "any", false, false, true, 38) == "toolbar-tab-tour") && (($context["toolbar_variant"] ?? null) != "classic"))) {
                    // line 39
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 39), "addClass", [0 => "toolbar-tab", 1 => ($context["user_menu"] ?? null), 2 => (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 39)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 39)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#id"] ?? null) : null), 39, $this->source))) : (null))], "method", false, false, true, 39), "removeAttribute", [0 => "id"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">
        ";
                } else {
                    // line 41
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 41), "addClass", [0 => "toolbar-tab", 1 => ($context["user_menu"] ?? null), 2 => (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 41)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#id"] ?? null) : null)) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 41)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#id"] ?? null) : null), 41, $this->source))) : (null))], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo ">
        ";
                }
                // line 43
                echo "          ";
                if (((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 43)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#id"] ?? null) : null) == "toolbar-item-administration")) {
                    // line 44
                    echo "            <a class=\"toolbar-menu__logo\" href=\"/admin/content\" aria-label=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toolbar Menu Logo"));
                    echo "\">
              <span class=\"visually-hidden\">";
                    // line 45
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toolbar Menu Logo"));
                    echo "</span>
            </a>
            ";
                    // line 47
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo "
          ";
                } else {
                    // line 49
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 51
                echo "          <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo ">
            ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 52)) {
                    // line 53
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 54
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "</h3>
            ";
                } else {
                    // line 56
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 58
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "
            </nav>
          </div>
        </div>
      ";
            }
            // line 63
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "  </nav>
  ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null), 65, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/navigation/toolbar--gin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 65,  150 => 64,  144 => 63,  135 => 58,  131 => 56,  126 => 54,  121 => 53,  119 => 52,  114 => 51,  108 => 49,  103 => 47,  98 => 45,  93 => 44,  90 => 43,  84 => 41,  78 => 39,  75 => 38,  72 => 37,  70 => 36,  68 => 33,  67 => 32,  66 => 31,  64 => 30,  61 => 29,  58 => 28,  54 => 27,  50 => 26,  46 => 25,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/navigation/toolbar--gin.html.twig", "/app/web/themes/contrib/gin/templates/navigation/toolbar--gin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "for" => 27, "if" => 30);
        static $filters = array("escape" => 24, "t" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 't'],
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
