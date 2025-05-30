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

/* display/results/multi_row_operations_form.twig */
class __TwigTemplate_09eb01439b2390a0dc21efb3e4460fb37b631825d62c8c1b72d9b373a0486bfc extends \Twig\Template
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
        if ((((isset($context["delete_link"]) ? $context["delete_link"] : null) == (isset($context["delete_row"]) ? $context["delete_row"] : null)) || ((isset($context["delete_link"]) ? $context["delete_link"] : null) == (isset($context["kill_process"]) ? $context["kill_process"] : null)))) {
            // line 2
            echo "    <form method=\"post\"
        action=\"tbl_row_action.php\"
        name=\"resultsForm\"
        id=\"resultsForm_";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["unique_id"]) ? $context["unique_id"] : null), "html", null, true);
            echo "\"
        class=\"ajax\">
        ";
            // line 7
            echo PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) ? $context["db"] : null), (isset($context["table"]) ? $context["table"] : null), 1);
            echo "
        <input type=\"hidden\" name=\"goto\" value=\"sql.php\" />
";
        }
        // line 10
        echo "
<div class=\"responsivetable\">
    <table class=\"table_results data ajax\" data-uniqueId=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["unique_id"]) ? $context["unique_id"] : null), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "display/results/multi_row_operations_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  48 => 10,  42 => 7,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/multi_row_operations_form.twig", "/home/wwwroot/default/phpmyadmin/templates/display/results/multi_row_operations_form.twig");
    }
}
