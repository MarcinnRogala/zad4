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

/* @PrestaShop/Admin/Module/Includes/action_button.html.twig */
class __TwigTemplate_7cfe4911c512fc06792304aa63a01e4f255eeb5b1b0c2078479641a3563d2687 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_button.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["displayAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_replace_filter(twig_title_string_filter($this->env, ($context["action"] ?? $this->getContext($context, "action"))), ["_" => " "]), [], $this->getAttribute(($context["transDomain"] ?? $this->getContext($context, "transDomain")), ($context["action"] ?? $this->getContext($context, "action")), [], "array"));
        // line 27
        echo "
";
        // line 28
        if ((($context["action"] ?? $this->getContext($context, "action")) == "configure")) {
            // line 29
            echo "
    <a class=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["classes"] ?? $this->getContext($context, "classes")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\">
      ";
            // line 31
            echo twig_escape_filter($this->env, ($context["displayAction"] ?? $this->getContext($context, "displayAction")), "html", null, true);
            echo "
    </a>

";
        } else {
            // line 35
            echo "
    <form class='";
            // line 36
            echo twig_escape_filter($this->env, (((isset($context["classes_form"]) || array_key_exists("classes_form", $context))) ? (_twig_default_filter(($context["classes_form"] ?? $this->getContext($context, "classes_form")))) : ("")), "html", null, true);
            echo "' method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\">
      <button type=\"submit\" class=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["classes"] ?? $this->getContext($context, "classes")), "html", null, true);
            echo " module_action_menu_";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\" data-confirm_modal=\"module-modal-confirm-";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\">
        ";
            // line 38
            echo twig_escape_filter($this->env, ($context["displayAction"] ?? $this->getContext($context, "displayAction")), "html", null, true);
            echo "
      </button>
    </form>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 38,  71 => 37,  65 => 36,  62 => 35,  55 => 31,  49 => 30,  46 => 29,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% set displayAction = action|title|replace({'_': \" \"})|trans({}, transDomain[action]) %}

{% if (action == 'configure') %}

    <a class=\"{{ classes }}\" href=\"{{ url }}\">
      {{ displayAction }}
    </a>

{% else %}

    <form class='{{classes_form|default() }}' method=\"post\" action=\"{{ url }}\">
      <button type=\"submit\" class=\"{{ classes }} module_action_menu_{{ action }}\" data-confirm_modal=\"module-modal-confirm-{{ name }}-{{ action }}\">
        {{ displayAction }}
      </button>
    </form>

{% endif %}
", "@PrestaShop/Admin/Module/Includes/action_button.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\action_button.html.twig");
    }
}