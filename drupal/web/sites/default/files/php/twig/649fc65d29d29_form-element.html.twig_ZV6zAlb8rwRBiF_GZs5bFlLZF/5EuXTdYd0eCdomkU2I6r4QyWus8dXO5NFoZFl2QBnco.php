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

/* themes/contrib/gin/templates/form/form-element.html.twig */
class __TwigTemplate_1ffeafa5bb6446e5244e29e4da53b27c extends Template
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
        // line 13
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 13));
        // line 15
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["type"] ?? null), 18, $this->source))), 3 => ("form-type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 19
($context["type"] ?? null), 19, $this->source))), 4 => ((twig_in_filter(        // line 20
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? ("form-type--boolean") : ("")), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 21
($context["name"] ?? null), 21, $this->source))), 6 => ("form-item--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 22
($context["name"] ?? null), 22, $this->source))), 7 => ((!twig_in_filter(        // line 23
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-item--no-label") : ("")), 8 => (((        // line 24
($context["disabled"] ?? null) == "disabled")) ? ("form-item--disabled") : ("")), 9 => ((        // line 25
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 10 => ((        // line 26
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 30
        $context["description_classes"] = [0 => "form-item__description", 1 => (((        // line 32
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 35
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">
  ";
        // line 36
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 37
            echo "    ";
            if (($context["show_description_toggle"] ?? null)) {
                // line 38
                echo "      <div class=\"help-icon\">
        ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 39, $this->source), "html", null, true);
                echo "
        ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
                echo "
        <button class=\"help-icon__description-toggle\"></button>
      </div>
    ";
            } else {
                // line 44
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 44, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 46
            echo "  ";
        }
        // line 47
        echo "  ";
        if (($context["show_description_toggle"] ?? null)) {
            // line 48
            echo "  <div class=\"help-icon__element-has-description\">
  ";
        }
        // line 50
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 51
            echo "    <span class=\"form-item__prefix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? null) == "disabled")) ? (" is-disabled") : ("")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 51, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 53
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 53))) {
            // line 54
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 54), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo ">
      ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 58
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 58, $this->source), "html", null, true);
        echo "
  ";
        // line 59
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 60
            echo "    <span class=\"form-item__suffix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["disabled"] ?? null) == "disabled")) ? (" is-disabled") : ("")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 60, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 62
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 63
            echo "    ";
            if (($context["show_description_toggle"] ?? null)) {
                // line 64
                echo "      <div class=\"help-icon\">
        ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 65, $this->source), "html", null, true);
                echo "
        ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
                echo "
        <button class=\"help-icon__description-toggle\"></button>
      </div>
    ";
            } else {
                // line 70
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 72
            echo "  ";
        }
        // line 73
        echo "  ";
        if (($context["show_description_toggle"] ?? null)) {
            // line 74
            echo "  </div>
  ";
        }
        // line 76
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 77
            echo "    <div class=\"form-item__error-message\">
      ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 78, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 81
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 81))) {
            // line 82
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 82), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
            echo ">
      ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 86
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 86,  191 => 83,  186 => 82,  183 => 81,  177 => 78,  174 => 77,  171 => 76,  167 => 74,  164 => 73,  161 => 72,  155 => 70,  148 => 66,  144 => 65,  141 => 64,  138 => 63,  135 => 62,  127 => 60,  125 => 59,  120 => 58,  114 => 55,  109 => 54,  106 => 53,  98 => 51,  95 => 50,  91 => 48,  88 => 47,  85 => 46,  79 => 44,  72 => 40,  68 => 39,  65 => 38,  62 => 37,  60 => 36,  55 => 35,  53 => 32,  52 => 30,  50 => 26,  49 => 25,  48 => 24,  47 => 23,  46 => 22,  45 => 21,  44 => 20,  43 => 19,  42 => 18,  41 => 15,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/form/form-element.html.twig", "/app/web/themes/contrib/gin/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 36);
        static $filters = array("clean_class" => 18, "escape" => 35);
        static $functions = array("attach_library" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                ['attach_library']
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
