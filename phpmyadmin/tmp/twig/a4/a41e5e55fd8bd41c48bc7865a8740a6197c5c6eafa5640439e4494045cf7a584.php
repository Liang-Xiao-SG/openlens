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

/* database/multi_table_query/form.twig */
class __TwigTemplate_b8ca851085ad35d165134d8b80ba20936424e234071adf416dde81c31c6a2628 extends \Twig\Template
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
        $this->loadTemplate("secondary_tabs.twig", "database/multi_table_query/form.twig", 1)->display(twig_to_array(["url_params" => ["db" =>         // line 3
(isset($context["db"]) ? $context["db"] : null)], "sub_tabs" => [0 => ["link" => "db_multi_table_query.php", "text" => _gettext("Multi-table query")], 1 => ["link" => "db_qbe.php", "text" => _gettext("Query by example")]]]));
        // line 16
        echo PhpMyAdmin\Util::getDivForSliderEffect("query_div", _gettext("Query window"), "open");
        echo "
<form action=\"\" id=\"query_form\">
    <input type=\"hidden\" id=\"db_name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["db"]) ? $context["db"] : null), "html", null, true);
        echo "\">
    <fieldset>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tables"]) ? $context["tables"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 21
            echo "            <div style=\"display:none\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "hash", []), "html", null, true);
            echo "\">
                <option value=\"*\">*</option>
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["table"], "columns", []));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 24
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["default_no_of_columns"]) ? $context["default_no_of_columns"] : null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 30
            echo "            ";
            if (($context["id"] == 0)) {
                echo "<div style=\"display:none\" id=\"new_column_layout\">";
            }
            // line 31
            echo "            <fieldset style=\"display:inline\" class=\"column_details\">
                <select style=\"display:inline\" class=\"tableNameSelect\">
                    <option value=\"\">";
            // line 33
            echo _gettext("select table");
            echo "</option>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["tables"]) ? $context["tables"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                // line 35
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </select>
                <span>.</span>
                <select style=\"display:inline\" class=\"columnNameSelect\">
                    <option value=\"\">";
            // line 40
            echo _gettext("select column");
            echo "</option>
                </select>
                <br>
                <input type=\"checkbox\" checked=\"checked\" class=\"show_col\">
                <span>";
            // line 44
            echo _gettext("Show");
            echo "</span>
                <br>
                <input type=\"text\" placeholder=\"";
            // line 46
            echo _gettext("Table alias");
            echo "\" class=\"table_alias\">
                <input type=\"text\" placeholder=\"";
            // line 47
            echo _gettext("Column alias");
            echo "\" class=\"col_alias\">
                <br>
                <input type=\"checkbox\"
                    title=\"";
            // line 50
            echo _gettext("Use this column in criteria");
            echo "\"
                    class=\"criteria_col\">
                ";
            // line 52
            $this->loadTemplate("div_for_slider_effect.twig", "database/multi_table_query/form.twig", 52)->display(twig_array_merge($context, ["id" => ("criteria_div" .             // line 53
$context["id"]), "initial_sliders_state" => "closed", "message" => _gettext("criteria")]));
            // line 57
            echo "                <div>
                    <table>

                        <tr class=\"sort_order\" style=\"background:none\">
                            <td>";
            // line 61
            echo _gettext("Sort");
            echo "</td>
                            <td><input type=\"radio\" name=\"sort[";
            // line 62
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\">";
            echo _gettext("Ascending");
            echo "</td>
                            <td><input type=\"radio\" name=\"sort[";
            // line 63
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\">";
            echo _gettext("Descending");
            echo "</td>
                        </tr>

                        <tr class=\"logical_operator\" style=\"background:none;display:none\">
                            <td>";
            // line 67
            echo _gettext("Add as");
            echo "</td>
                            <td>
                                <input type=\"radio\"
                                    name=\"logical_op[";
            // line 70
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\"
                                    value=\"AND\"
                                    class=\"logical_op\"
                                    checked=\"checked\">
                                AND
                            </td>
                            <td>
                                <input type=\"radio\"
                                    name=\"logical_op[";
            // line 78
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\"
                                    value=\"OR\"
                                    class=\"logical_op\">
                                OR
                            </td>
                        </tr>

                        <tr style=\"background:none\">
                            <td>Op </td>
                            <td>
                                <select class=\"criteria_op\">
                                    <option value=\"=\">=</option>
                                    <option value=\">\">&gt;</option>
                                    <option value=\">=\">&gt;=</option>
                                    <option value=\"<\">&lt;</option>
                                    <option value=\"<=\">&lt;=</option>
                                    <option value=\"!=\">!=</option>
                                    <option value=\"LIKE\">LIKE</option>
                                    <option value=\"LIKE %...%\">LIKE %...%</option>
                                    <option value=\"NOT LIKE\">NOT LIKE</option>
                                    <option value=\"IN (...)\">IN (...)</option>
                                    <option value=\"NOT IN (...)\">NOT IN (...)</option>
                                    <option value=\"BETWEEN\">BETWEEN</option>
                                    <option value=\"NOT BETWEEN\">NOT BETWEEN</option>
                                    <option value=\"IS NULL\">IS NULL</option>
                                    <option value=\"IS NOT NULL\">IS NOT NULL</option>
                                    <option value=\"REGEXP\">REGEXP</option>
                                    <option value=\"REGEXP ^...\$\">REGEXP ^...\$</option>
                                    <option value=\"NOT REGEXP\">NOT REGEXP</option>
                                </select>
                            </td>
                            <td>
                                <select class=\"criteria_rhs\">
                                    <option value=\"text\">";
            // line 111
            echo _gettext("Text");
            echo "</option>
                                    <option value=\"anotherColumn\">";
            // line 112
            echo _gettext("Another column");
            echo "</option>
                                </select>
                            </td>
                        </tr>

                        <tr class=\"rhs_table\" style=\"display:none;background:none\">
                            <td></td>
                            <td>
                                <select  class=\"tableNameSelect\">
                                    <option value=\"\">";
            // line 121
            echo _gettext("select table");
            echo "</option>
                                    ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["tables"]) ? $context["tables"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                // line 123
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                </select><span>.</span>
                            </td>
                            <td>
                                <select style=\"display:inline\" class=\"columnNameSelect\">
                                    <option value=\"\">";
            // line 129
            echo _gettext("select column");
            echo "</option>
                                </select>
                            </td>
                        </tr>

                        <tr style=\"background:none\" class=\"rhs_text\">
                            <td></td>
                            <td colspan=\"2\">
                                <input type=\"text\"
                                    style=\"width:91%\"
                                    class=\"rhs_text_val\"
                                    placeholder=\"";
            // line 140
            echo _gettext("Enter criteria as free text");
            echo "\">
                            </td>
                        </tr>

                        </table>
                    </div>
                </div>
                <a href=\"#\"
                    title=\"";
            // line 148
            echo _gettext("Remove this column");
            echo "\"
                    style=\"float:right;color:red\"
                    class=\"removeColumn\">
                    X
                </a>
            </fieldset>
            ";
            // line 154
            if (($context["id"] == 0)) {
                echo "</div>";
            }
            // line 155
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
        <fieldset style=\"display:inline\">
            <input type=\"button\" value=\"";
        // line 158
        echo _gettext("+ Add column");
        echo "\" id=\"add_column_button\">
        </fieldset>

        <fieldset>
            ";
        // line 162
        $___internal_d463d8ce59ac701f4b5d6db7d633d42926f3bf4918f16ae206e2701e8280ff55_ = ('' === $tmp = "                <textarea id=\"MultiSqlquery\"
                    cols=\"80\"
                    rows=\"4\"
                    style=\"float:left\"
                    name=\"sql_query\"
                    dir=\"ltr\">
                </textarea>
            ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_d463d8ce59ac701f4b5d6db7d633d42926f3bf4918f16ae206e2701e8280ff55_);
        // line 171
        echo "        </fieldset>
    </fieldset>

    <fieldset class=\"tblFooters\">
        <input type=\"button\" id=\"update_query_button\" value=\"";
        // line 175
        echo _gettext("Update query");
        echo "\">
        <input type=\"button\" id=\"submit_query\" value=\"";
        // line 176
        echo _gettext("Submit query");
        echo "\">
    </fieldset>
</form>
</div>";
        // line 180
        echo "<div id=\"sql_results\"></div>
";
    }

    public function getTemplateName()
    {
        return "database/multi_table_query/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 180,  360 => 176,  356 => 175,  350 => 171,  340 => 162,  333 => 158,  329 => 156,  315 => 155,  311 => 154,  302 => 148,  291 => 140,  277 => 129,  271 => 125,  260 => 123,  256 => 122,  252 => 121,  240 => 112,  236 => 111,  200 => 78,  189 => 70,  183 => 67,  174 => 63,  168 => 62,  164 => 61,  158 => 57,  156 => 53,  155 => 52,  150 => 50,  144 => 47,  140 => 46,  135 => 44,  128 => 40,  123 => 37,  112 => 35,  108 => 34,  104 => 33,  100 => 31,  95 => 30,  78 => 29,  75 => 28,  68 => 26,  57 => 24,  53 => 23,  47 => 21,  43 => 20,  38 => 18,  33 => 16,  31 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/multi_table_query/form.twig", "/home/wwwroot/default/phpmyadmin/templates/database/multi_table_query/form.twig");
    }
}
