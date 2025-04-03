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

/* table/search/input_box.twig */
class __TwigTemplate_126838306c87eb122d892b43b50984be3b120b25beac9782dd289ea6bdbe7cd5 extends \Twig\Template
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
        // line 2
        if (((isset($context["foreigners"]) ? $context["foreigners"] : null) && call_user_func_array($this->env->getFunction('Relation_searchColumnInForeigners')->getCallable(), [(isset($context["foreigners"]) ? $context["foreigners"] : null), (isset($context["column_name"]) ? $context["column_name"] : null)]))) {
            // line 3
            echo "    ";
            if (twig_test_iterable($this->getAttribute((isset($context["foreign_data"]) ? $context["foreign_data"] : null), "disp_row", [], "array"))) {
                // line 4
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "]\"
            id=\"";
                // line 5
                echo twig_escape_filter($this->env, (isset($context["column_id"]) ? $context["column_id"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "\">
            ";
                // line 6
                echo call_user_func_array($this->env->getFunction('Relation_foreignDropdown')->getCallable(), [$this->getAttribute(                // line 7
(isset($context["foreign_data"]) ? $context["foreign_data"] : null), "disp_row", [], "array"), $this->getAttribute(                // line 8
(isset($context["foreign_data"]) ? $context["foreign_data"] : null), "foreign_field", [], "array"), $this->getAttribute(                // line 9
(isset($context["foreign_data"]) ? $context["foreign_data"] : null), "foreign_display", [], "array"), "",                 // line 11
(isset($context["foreign_max_limit"]) ? $context["foreign_max_limit"] : null)]);
                // line 12
                echo "
        </select>
    ";
            } elseif (($this->getAttribute(            // line 14
(isset($context["foreign_data"]) ? $context["foreign_data"] : null), "foreign_link", [], "array") == true)) {
                // line 15
                echo "        <input type=\"text\"
            id=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["column_id"]) ? $context["column_id"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "\"
            name=\"criteriaValues[";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "]\"
            id=\"field_";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["column_name_hash"]) ? $context["column_name_hash"] : null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "]\"
            class=\"textfield\"
            ";
                // line 20
                if ($this->getAttribute((isset($context["criteria_values"]) ? $context["criteria_values"] : null), (isset($context["column_index"]) ? $context["column_index"] : null), [], "array", true, true)) {
                    // line 21
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria_values"]) ? $context["criteria_values"] : null), (isset($context["column_index"]) ? $context["column_index"] : null), [], "array"), "html", null, true);
                    echo "\"
            ";
                }
                // line 22
                echo " />
        <a class=\"ajax browse_foreign\" href=\"browse_foreigners.php\" data-post=\"";
                // line 24
                echo PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) ? $context["db"] : null), "table" => (isset($context["table"]) ? $context["table"] : null)], "", false);
                // line 25
                echo "&amp;field=";
                echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["column_name"]) ? $context["column_name"] : null)), "html", null, true);
                echo "&amp;fieldkey=";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "&amp;fromsearch=1\">
            ";
                // line 27
                echo twig_replace_filter($this->getAttribute((isset($context["titles"]) ? $context["titles"] : null), "Browse", [], "array"), ["'" => "\\'"]);
                echo "
        </a>
    ";
            }
        } elseif (twig_in_filter(        // line 30
(isset($context["column_type"]) ? $context["column_type"] : null), PhpMyAdmin\Util::getGISDatatypes())) {
            // line 31
            echo "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
            echo "]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
            echo "\" />
    ";
            // line 36
            if ((isset($context["in_fbs"]) ? $context["in_fbs"] : null)) {
                // line 37
                echo "        ";
                $context["edit_str"] = PhpMyAdmin\Util::getIcon("b_edit", _gettext("Edit/Insert"));
                // line 38
                echo "        <span class=\"open_search_gis_editor\">
            ";
                // line 39
                echo PhpMyAdmin\Util::linkOrButton("gis_data_editor.php", [], (isset($context["edit_str"]) ? $context["edit_str"] : null), [], "_blank");
                echo "
        </span>
    ";
            }
        } elseif (((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =         // line 42
(isset($context["column_type"]) ? $context["column_type"] : null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "enum") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =         // line 43
(isset($context["column_type"]) ? $context["column_type"] : null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "set") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))) && (isset($context["in_zoom_search_edit"]) ? $context["in_zoom_search_edit"] : null)))) {
            // line 44
            echo "    ";
            $context["in_zoom_search_edit"] = false;
            // line 45
            echo "    ";
            $context["value"] = twig_split_filter($this->env, twig_replace_filter(twig_slice($this->env, twig_escape_filter($this->env, (isset($context["column_type"]) ? $context["column_type"] : null)), 5,  -1), ["&#039;" => ""]), ", ");
            // line 46
            echo "    ";
            $context["cnt_value"] = twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null));
            // line 47
            echo "    ";
            // line 53
            echo "    ";
            if ((((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (isset($context["column_type"]) ? $context["column_type"] : null)) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "enum") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666))) &&  !(isset($context["in_zoom_search_edit"]) ? $context["in_zoom_search_edit"] : null)) || ((is_string($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e =             // line 54
(isset($context["column_type"]) ? $context["column_type"] : null)) && is_string($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = "set") && ('' === $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 || 0 === strpos($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e, $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52))) && (isset($context["in_zoom_search_edit"]) ? $context["in_zoom_search_edit"] : null)))) {
                // line 55
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "]\"
            id=\"";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["column_id"]) ? $context["column_id"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 58
                echo "        <select name=\"criteriaValues[";
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "]\"
            id=\"";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["column_id"]) ? $context["column_id"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
                echo "\"
            multiple=\"multiple\"
            size=\"";
                // line 61
                echo twig_escape_filter($this->env, min(3, (isset($context["cnt_value"]) ? $context["cnt_value"] : null)), "html", null, true);
                echo "\">
    ";
            }
            // line 63
            echo "    ";
            // line 64
            echo "    <option value=\"\"></option>
    ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["cnt_value"]) ? $context["cnt_value"] : null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 66
                echo "        ";
                if ((($this->getAttribute((isset($context["criteria_values"]) ? $context["criteria_values"] : null), (isset($context["column_index"]) ? $context["column_index"] : null), [], "array", true, true) && twig_test_iterable($this->getAttribute(                // line 67
(isset($context["criteria_values"]) ? $context["criteria_values"] : null), (isset($context["column_index"]) ? $context["column_index"] : null), [], "array"))) && twig_in_filter($this->getAttribute(                // line 68
(isset($context["value"]) ? $context["value"] : null), $context["i"], [], "array"), $this->getAttribute((isset($context["criteria_values"]) ? $context["criteria_values"] : null), (isset($context["column_index"]) ? $context["column_index"] : null), [], "array")))) {
                    // line 69
                    echo "            <option value=\"";
                    echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), $context["i"], [], "array");
                    echo "\" selected>
                ";
                    // line 70
                    echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), $context["i"], [], "array");
                    echo "
            </option>
        ";
                } else {
                    // line 73
                    echo "            <option value=\"";
                    echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), $context["i"], [], "array");
                    echo "\">
                ";
                    // line 74
                    echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), $context["i"], [], "array");
                    echo "
            </option>
        ";
                }
                // line 77
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    </select>
";
        } else {
            // line 80
            echo "    ";
            $context["the_class"] = "textfield";
            // line 81
            echo "    ";
            if (((isset($context["column_type"]) ? $context["column_type"] : null) == "date")) {
                // line 82
                echo "        ";
                $context["the_class"] = ((isset($context["the_class"]) ? $context["the_class"] : null) . " datefield");
                // line 83
                echo "    ";
            } elseif ((((isset($context["column_type"]) ? $context["column_type"] : null) == "datetime") || (is_string($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (isset($context["column_type"]) ? $context["column_type"] : null)) && is_string($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = "timestamp") && ('' === $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 || 0 === strpos($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136, $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386))))) {
                // line 84
                echo "        ";
                $context["the_class"] = ((isset($context["the_class"]) ? $context["the_class"] : null) . " datetimefield");
                // line 85
                echo "    ";
            } elseif ((is_string($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (isset($context["column_type"]) ? $context["column_type"] : null)) && is_string($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = "bit") && ('' === $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae || 0 === strpos($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9, $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae)))) {
                // line 86
                echo "        ";
                $context["the_class"] = ((isset($context["the_class"]) ? $context["the_class"] : null) . " bit");
                // line 87
                echo "    ";
            }
            // line 88
            echo "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
            echo "]\"
        size=\"40\"
        class=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["the_class"]) ? $context["the_class"] : null), "html", null, true);
            echo "\"
        id=\"";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["column_id"]) ? $context["column_id"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["column_index"]) ? $context["column_index"] : null), "html", null, true);
            echo "\"
        ";
            // line 93
            if ($this->getAttribute((isset($context["criteria_values"]) ? $context["criteria_values"] : null), (isset($context["column_index"]) ? $context["column_index"] : null), [], "array", true, true)) {
                // line 94
                echo "           value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria_values"]) ? $context["criteria_values"] : null), (isset($context["column_index"]) ? $context["column_index"] : null), [], "array"), "html", null, true);
                echo "\"";
            }
            // line 95
            echo " />
";
        }
    }

    public function getTemplateName()
    {
        return "table/search/input_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 95,  266 => 94,  264 => 93,  259 => 92,  255 => 91,  250 => 89,  247 => 88,  244 => 87,  241 => 86,  238 => 85,  235 => 84,  232 => 83,  229 => 82,  226 => 81,  223 => 80,  219 => 78,  213 => 77,  207 => 74,  202 => 73,  196 => 70,  191 => 69,  189 => 68,  188 => 67,  186 => 66,  182 => 65,  179 => 64,  177 => 63,  172 => 61,  166 => 59,  161 => 58,  155 => 56,  150 => 55,  148 => 54,  146 => 53,  144 => 47,  141 => 46,  138 => 45,  135 => 44,  133 => 43,  132 => 42,  126 => 39,  123 => 38,  120 => 37,  118 => 36,  114 => 35,  108 => 32,  105 => 31,  103 => 30,  97 => 27,  93 => 26,  89 => 25,  87 => 24,  84 => 22,  78 => 21,  76 => 20,  69 => 18,  65 => 17,  60 => 16,  57 => 15,  55 => 14,  51 => 12,  49 => 11,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  40 => 5,  35 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/input_box.twig", "/home/wwwroot/default/phpmyadmin/templates/table/search/input_box.twig");
    }
}
