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

/* display/export/options_output_save_dir.twig */
class __TwigTemplate_775d04552fca962f4ea15364b2e114e40e782694caf9407db582994e2767b8df extends \Twig\Template
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
        echo "<li>
    <input type=\"checkbox\" name=\"onserver\" value=\"saveit\"
        id=\"checkbox_dump_onserver\"";
        // line 3
        echo (((isset($context["export_is_checked"]) ? $context["export_is_checked"] : null)) ? (" checked") : (""));
        echo ">
    <label for=\"checkbox_dump_onserver\">
        ";
        // line 5
        echo sprintf(_gettext("Save on server in the directory <strong>%s</strong>"), twig_escape_filter($this->env, (isset($context["save_dir"]) ? $context["save_dir"] : null)));
        echo "
    </label>
</li>
<li>
    <input type=\"checkbox\" name=\"onserver_overwrite\"
        value=\"saveitover\" id=\"checkbox_dump_onserver_overwrite\"";
        // line 11
        echo (((isset($context["export_overwrite_is_checked"]) ? $context["export_overwrite_is_checked"] : null)) ? (" checked") : (""));
        echo ">
    <label for=\"checkbox_dump_onserver_overwrite\">
        ";
        // line 13
        echo _gettext("Overwrite existing file(s)");
        // line 14
        echo "    </label>
</li>
";
    }

    public function getTemplateName()
    {
        return "display/export/options_output_save_dir.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  52 => 13,  47 => 11,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "display/export/options_output_save_dir.twig", "/home/wwwroot/default/phpmyadmin/templates/display/export/options_output_save_dir.twig");
    }
}
