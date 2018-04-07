<?php

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_8dfc8350ab9572dba0d4d9d026b4d20543742b84a701f8f8aaa789fd6903d025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("forms/fields/editor/editor.html.twig", "forms/fields/markdown/markdown.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/editor/editor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["codemirrorOptions"] = twig_array_merge(array("mode" => "gfm", "ignore" => array()), (($this->getAttribute(($context["field"] ?? null), "codemirror", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "codemirror", array()), array())) : (array())));
        // line 7
        if ($this->getAttribute(($context["field"] ?? null), "showPreview", array())) {
            // line 8
            $context["codemirrorOptions"] = twig_array_merge(($context["codemirrorOptions"] ?? null), array("ignore" => array()));
        }
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 8,  26 => 7,  24 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Deprecated field. Alias to editor/editor.html.twig #}

{% extends \"forms/fields/editor/editor.html.twig\" %}
{% set codemirrorOptions = {'mode': 'gfm', 'ignore': []}|merge(field.codemirror|default({})) %}

{# backward compatibility #}
{% if field.showPreview %}
    {% set codemirrorOptions = codemirrorOptions|merge({'ignore': []}) %}
{% endif %}
{# end backward compatibility #}
", "forms/fields/markdown/markdown.html.twig", "C:\\xampp\\htdocs\\albayan\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\markdown\\markdown.html.twig");
    }
}
