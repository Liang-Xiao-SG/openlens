<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* display/export/hidden_inputs.twig */
class __TwigTemplate_01119cfac9a47a28eea711c8a73c143e9cb76e350403fcbc747a74e133464102 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (((isset($context["export_type"]) ? $context["export_type"] : null) == "server")) {
            // line 2
            echo "    ";
            echo PhpMyAdmin\Url::getHiddenInputs("", "", 1);
            echo "
";
        } elseif ((        // line 3
(isset($context["export_type"]) ? $context["export_type"] : null) == "database")) {
            // line 4
            echo "    ";
            echo PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) ? $context["db"] : null), "", 1);
            echo "
";
        } else {
            // line 6
            echo "    ";
            echo PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) ? $context["db"] : null), (isset($context["table"]) ? $context["table"] : null), 1);
            echo "
";
        }
        // line 8
        echo "
";
        // line 10
        if ( !twig_test_empty((isset($context["single_table"]) ? $context["single_table"] : null))) {
            // line 11
            echo "    <input type=\"hidden\" name=\"single_table\" value=\"TRUE\">
";
        }
        // line 13
        echo "
<input type=\"hidden\" name=\"export_type\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["export_type"]) ? $context["export_type"] : null), "html", null, true);
        echo "\">

";
        // line 17
        echo "<input type=\"hidden\" name=\"export_method\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["export_method"]) ? $context["export_method"] : null), "html", null, true);
        echo "\">

";
        // line 19
        if ( !twig_test_empty((isset($context["sql_query"]) ? $context["sql_query"] : null))) {
            // line 20
            echo "    <input type=\"hidden\" name=\"sql_query\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["sql_query"]) ? $context["sql_query"] : null), "html", null, true);
            echo "\">
";
        }
        // line 22
        echo "
<input type=\"hidden\" name=\"template_id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["template_id"]) ? $context["template_id"] : null), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "display/export/hidden_inputs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  82 => 22,  76 => 20,  74 => 19,  68 => 17,  63 => 14,  60 => 13,  56 => 11,  54 => 10,  51 => 8,  45 => 6,  39 => 4,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "display/export/hidden_inputs.twig", "/home/wwwroot/default/phpmyadmin/templates/display/export/hidden_inputs.twig");
    }
}
