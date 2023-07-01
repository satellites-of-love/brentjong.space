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

/* themes/contrib/gin/templates/form/details.html.twig */
class __TwigTemplate_547f416b320f18b2f726d16632926dec extends Template
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
        // line 27
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && ($context["description"] ?? null));
        // line 29
        $context["classes"] = [0 => "claro-details", 1 => ((        // line 31
($context["accordion"] ?? null)) ? ("claro-details--accordion") : ("")), 2 => ((        // line 32
($context["accordion_item"] ?? null)) ? ("claro-details--accordion-item") : ("")), 3 => ((        // line 33
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 37
        $context["content_wrapper_classes"] = [0 => "claro-details__wrapper", 1 => "details-wrapper", 2 => ((        // line 40
($context["accordion"] ?? null)) ? ("claro-details__wrapper--accordion") : ("")), 3 => ((        // line 41
($context["accordion_item"] ?? null)) ? ("claro-details__wrapper--accordion-item") : (""))];
        // line 45
        $context["inner_wrapper_classes"] = [0 => "claro-details__content", 1 => ((        // line 47
($context["accordion"] ?? null)) ? ("claro-details__content--accordion") : ("")), 2 => ((        // line 48
($context["accordion_item"] ?? null)) ? ("claro-details__content--accordion-item") : (""))];
        // line 52
        $context["description_classes"] = [0 => "claro-details__description", 1 => ((        // line 54
($context["disabled"] ?? null)) ? ("is-disabled") : ("")), 2 => (((        // line 55
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 58
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        echo ">";
        // line 59
        if (($context["title"] ?? null)) {
            // line 61
            $context["summary_classes"] = [0 => "claro-details__summary", 1 => ((            // line 63
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((            // line 64
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => ((            // line 65
($context["accordion"] ?? null)) ? ("claro-details__summary--accordion") : ("")), 4 => ((            // line 66
($context["accordion_item"] ?? null)) ? ("claro-details__summary--accordion-item") : (""))];
            // line 69
            echo "    <summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [0 => ($context["summary_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            echo ">";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 70, $this->source), "html", null, true);
            // line 71
            echo "<span class=\"required-mark\"></span>
      ";
            // line 72
            if (($context["show_description_toggle"] ?? null)) {
                // line 73
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
                echo "
        <button class=\"help-icon__description-toggle\"></button>
      ";
            }
            // line 76
            echo "    </summary>";
        }
        // line 78
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo ">
    ";
        // line 79
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 80
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
            echo ">
    ";
        }
        // line 82
        echo "
      ";
        // line 83
        if (($context["errors"] ?? null)) {
            // line 84
            echo "        <div class=\"form-item form-item--error-message\">
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 85, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 88
        if (($context["description"] ?? null)) {
            // line 89
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 89, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 91
        if (($context["children"] ?? null)) {
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 92, $this->source), "html", null, true);
        }
        // line 94
        if (($context["value"] ?? null)) {
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 95, $this->source), "html", null, true);
        }
        // line 98
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 99
            echo "    </div>
    ";
        }
        // line 101
        echo "  </div>
</details>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 101,  139 => 99,  137 => 98,  134 => 95,  132 => 94,  129 => 92,  127 => 91,  120 => 89,  118 => 88,  112 => 85,  109 => 84,  107 => 83,  104 => 82,  98 => 80,  96 => 79,  91 => 78,  88 => 76,  81 => 73,  79 => 72,  76 => 71,  74 => 70,  70 => 69,  68 => 66,  67 => 65,  66 => 64,  65 => 63,  64 => 61,  62 => 59,  58 => 58,  56 => 55,  55 => 54,  54 => 52,  52 => 48,  51 => 47,  50 => 45,  48 => 41,  47 => 40,  46 => 37,  44 => 33,  43 => 32,  42 => 31,  41 => 29,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/form/details.html.twig", "/app/web/themes/contrib/gin/templates/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 59);
        static $filters = array("escape" => 58);
        static $functions = array("attach_library" => 73, "create_attribute" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['attach_library', 'create_attribute']
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
