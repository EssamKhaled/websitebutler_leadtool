<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_585d4ca38cd0704caf2b2f22e27a3370d0558f7559f157cbdcd2c909184a5af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585d4ca38cd0704caf2b2f22e27a3370d0558f7559f157cbdcd2c909184a5af0->enter($__internal_585d4ca38cd0704caf2b2f22e27a3370d0558f7559f157cbdcd2c909184a5af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b57c00b1b076e052187d071cc6f8a20025ab38418148059406e42dc54e6d976e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57c00b1b076e052187d071cc6f8a20025ab38418148059406e42dc54e6d976e->enter($__internal_b57c00b1b076e052187d071cc6f8a20025ab38418148059406e42dc54e6d976e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585d4ca38cd0704caf2b2f22e27a3370d0558f7559f157cbdcd2c909184a5af0->leave($__internal_585d4ca38cd0704caf2b2f22e27a3370d0558f7559f157cbdcd2c909184a5af0_prof);

        
        $__internal_b57c00b1b076e052187d071cc6f8a20025ab38418148059406e42dc54e6d976e->leave($__internal_b57c00b1b076e052187d071cc6f8a20025ab38418148059406e42dc54e6d976e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf7b11e2d924598c85cba9b4bde90091a99af9d7c1dd2a4c45afb04405ef2c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7b11e2d924598c85cba9b4bde90091a99af9d7c1dd2a4c45afb04405ef2c81->enter($__internal_bf7b11e2d924598c85cba9b4bde90091a99af9d7c1dd2a4c45afb04405ef2c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f8560b1fbc615fce4a36b16c4304c76a4c878724fb1a8be61e1ce7137b562d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8560b1fbc615fce4a36b16c4304c76a4c878724fb1a8be61e1ce7137b562d2->enter($__internal_1f8560b1fbc615fce4a36b16c4304c76a4c878724fb1a8be61e1ce7137b562d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1f8560b1fbc615fce4a36b16c4304c76a4c878724fb1a8be61e1ce7137b562d2->leave($__internal_1f8560b1fbc615fce4a36b16c4304c76a4c878724fb1a8be61e1ce7137b562d2_prof);

        
        $__internal_bf7b11e2d924598c85cba9b4bde90091a99af9d7c1dd2a4c45afb04405ef2c81->leave($__internal_bf7b11e2d924598c85cba9b4bde90091a99af9d7c1dd2a4c45afb04405ef2c81_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_db6df450189fa18b42cfd6e16f8f14ffcfa447e26a234908e91104b0c0a4998a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6df450189fa18b42cfd6e16f8f14ffcfa447e26a234908e91104b0c0a4998a->enter($__internal_db6df450189fa18b42cfd6e16f8f14ffcfa447e26a234908e91104b0c0a4998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_541b43b4ab57802ecb52b16650ab4101e57a7d292f04ca1bda8cf09f2fff4a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541b43b4ab57802ecb52b16650ab4101e57a7d292f04ca1bda8cf09f2fff4a09->enter($__internal_541b43b4ab57802ecb52b16650ab4101e57a7d292f04ca1bda8cf09f2fff4a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_541b43b4ab57802ecb52b16650ab4101e57a7d292f04ca1bda8cf09f2fff4a09->leave($__internal_541b43b4ab57802ecb52b16650ab4101e57a7d292f04ca1bda8cf09f2fff4a09_prof);

        
        $__internal_db6df450189fa18b42cfd6e16f8f14ffcfa447e26a234908e91104b0c0a4998a->leave($__internal_db6df450189fa18b42cfd6e16f8f14ffcfa447e26a234908e91104b0c0a4998a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_74225fa5732b8b02d186e171824e279cb15938f76fe6f6aa47365f2c8c81d593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74225fa5732b8b02d186e171824e279cb15938f76fe6f6aa47365f2c8c81d593->enter($__internal_74225fa5732b8b02d186e171824e279cb15938f76fe6f6aa47365f2c8c81d593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99ee23fa05905b98a259559c83c3a6cd87d9a4db537ca3e575d5fb5c1e6baae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ee23fa05905b98a259559c83c3a6cd87d9a4db537ca3e575d5fb5c1e6baae2->enter($__internal_99ee23fa05905b98a259559c83c3a6cd87d9a4db537ca3e575d5fb5c1e6baae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_99ee23fa05905b98a259559c83c3a6cd87d9a4db537ca3e575d5fb5c1e6baae2->leave($__internal_99ee23fa05905b98a259559c83c3a6cd87d9a4db537ca3e575d5fb5c1e6baae2_prof);

        
        $__internal_74225fa5732b8b02d186e171824e279cb15938f76fe6f6aa47365f2c8c81d593->leave($__internal_74225fa5732b8b02d186e171824e279cb15938f76fe6f6aa47365f2c8c81d593_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/ekhaled/Documents/scotch-box/public/uploadTest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
