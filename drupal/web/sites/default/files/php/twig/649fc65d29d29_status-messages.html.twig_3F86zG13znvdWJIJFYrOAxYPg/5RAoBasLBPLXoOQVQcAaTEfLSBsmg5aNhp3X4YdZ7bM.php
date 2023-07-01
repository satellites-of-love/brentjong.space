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

/* themes/contrib/gin/templates/misc/status-messages.html.twig */
class __TwigTemplate_4a71f2d2b3cf75aae4c90424aedce71c extends Template
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
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_messages"), "html", null, true);
        echo "
<div data-drupal-messages class=\"messages-list\">
  <div class=\"messages__wrapper\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "      ";
            // line 30
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 33
$context["type"], 33, $this->source))];
            // line 36
            echo "      ";
            // line 37
            $context["is_message_with_title"] = (($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null);
            // line 39
            echo "      ";
            // line 40
            $context["is_message_with_icon"] = twig_in_filter($context["type"], [0 => "error", 1 => "status", 2 => "warning"]);
            // line 42
            echo "
      <div role=\"contentinfo\" aria-labelledby=\"";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null), 43, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
        ";
            // line 44
            if (($context["type"] == "error")) {
                // line 45
                echo "          <div role=\"alert\">
        ";
            }
            // line 47
            echo "          ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 48
                echo "            <div class=\"messages__header\">
              ";
                // line 49
                if (($context["is_message_with_title"] ?? null)) {
                    // line 50
                    echo "                <h2 id=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["title_ids"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 50, $this->source), "html", null, true);
                    echo "\" class=\"messages__title\">
                  ";
                    // line 51
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null), 51, $this->source), "html", null, true);
                    echo "
                </h2>
              ";
                }
                // line 54
                echo "            </div>
          ";
            }
            // line 56
            echo "          <button type=\"button\" class=\"button button--dismiss\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Dismiss"));
            echo "\"><span class=\"icon-close\"></span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
            echo "</button>
          <div class=\"messages__content\">
            ";
            // line 58
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 59
                echo "              <ul class=\"messages__list\">
                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 61
                    echo "                  <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 61, $this->source), "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "              </ul>
            ";
            } else {
                // line 65
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 65, $this->source)), "html", null, true);
                echo "
            ";
            }
            // line 67
            echo "          </div>
        ";
            // line 68
            if (($context["type"] == "error")) {
                // line 69
                echo "          </div>
        ";
            }
            // line 71
            echo "      </div>
      ";
            // line 73
            echo "      ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 73);
            // line 74
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 75,  151 => 74,  148 => 73,  145 => 71,  141 => 69,  139 => 68,  136 => 67,  130 => 65,  126 => 63,  117 => 61,  113 => 60,  110 => 59,  108 => 58,  100 => 56,  96 => 54,  90 => 51,  85 => 50,  83 => 49,  80 => 48,  77 => 47,  73 => 45,  71 => 44,  65 => 43,  62 => 42,  60 => 40,  58 => 39,  56 => 37,  54 => 36,  52 => 33,  51 => 30,  49 => 29,  45 => 28,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/misc/status-messages.html.twig", "/app/web/themes/contrib/gin/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 28, "set" => 30, "if" => 44);
        static $filters = array("escape" => 25, "without" => 43, "t" => 56, "length" => 58, "first" => 65);
        static $functions = array("attach_library" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 't', 'length', 'first'],
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
