<?php

/* CompanyMapperBundle:CompanyList:new.html.twig */
class __TwigTemplate_bde8b4651c4cbfa9d51d5020df48e2bbe65f5368ab8b160d66d74081aa101e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CompanyMapper/layout.html.twig", "CompanyMapperBundle:CompanyList:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CompanyMapper/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_148672076026246a67b3f02a6982b356b4d339bd7a5c16ab82b342f4675c44a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148672076026246a67b3f02a6982b356b4d339bd7a5c16ab82b342f4675c44a0->enter($__internal_148672076026246a67b3f02a6982b356b4d339bd7a5c16ab82b342f4675c44a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CompanyMapperBundle:CompanyList:new.html.twig"));

        $__internal_df1e3027d44d9ff30e2da2faa0db1b1a69547e4f5cff95272e50a9492f5e78e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1e3027d44d9ff30e2da2faa0db1b1a69547e4f5cff95272e50a9492f5e78e1->enter($__internal_df1e3027d44d9ff30e2da2faa0db1b1a69547e4f5cff95272e50a9492f5e78e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CompanyMapperBundle:CompanyList:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_148672076026246a67b3f02a6982b356b4d339bd7a5c16ab82b342f4675c44a0->leave($__internal_148672076026246a67b3f02a6982b356b4d339bd7a5c16ab82b342f4675c44a0_prof);

        
        $__internal_df1e3027d44d9ff30e2da2faa0db1b1a69547e4f5cff95272e50a9492f5e78e1->leave($__internal_df1e3027d44d9ff30e2da2faa0db1b1a69547e4f5cff95272e50a9492f5e78e1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_497cf8f234c0c127c142186192912408f40c5b8b4a0979e06a006f8b31c265ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497cf8f234c0c127c142186192912408f40c5b8b4a0979e06a006f8b31c265ab->enter($__internal_497cf8f234c0c127c142186192912408f40c5b8b4a0979e06a006f8b31c265ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ea8d3466c4e56213e9e293c26f1682e4189a7e77f7670623e4400902d0c94749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8d3466c4e56213e9e293c26f1682e4189a7e77f7670623e4400902d0c94749->enter($__internal_ea8d3466c4e56213e9e293c26f1682e4189a7e77f7670623e4400902d0c94749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Adding a new Company List</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div>";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "companyList", array()), 'row');
        echo "</div>
        <br>
        <div>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "</div>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_ea8d3466c4e56213e9e293c26f1682e4189a7e77f7670623e4400902d0c94749->leave($__internal_ea8d3466c4e56213e9e293c26f1682e4189a7e77f7670623e4400902d0c94749_prof);

        
        $__internal_497cf8f234c0c127c142186192912408f40c5b8b4a0979e06a006f8b31c265ab->leave($__internal_497cf8f234c0c127c142186192912408f40c5b8b4a0979e06a006f8b31c265ab_prof);

    }

    public function getTemplateName()
    {
        return "CompanyMapperBundle:CompanyList:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@CompanyMapper/layout.html.twig' %}

{% block content %}
    <h1>Adding a new Company List</h1>

    {{ form_start(form) }}
        <div>{{ form_row(form.companyList) }}</div>
        <br>
        <div>{{ form_row(form.submit) }}</div>
    {{ form_end(form) }}

{% endblock %}", "CompanyMapperBundle:CompanyList:new.html.twig", "/Users/ekhaled/Documents/scotch-box/public/uploadTest/src/CompanyMapperBundle/Resources/views/CompanyList/new.html.twig");
    }
}
