<?php

/* @CompanyMapper/layout.html.twig */
class __TwigTemplate_049c0dd5e804d6b6e1e9fe7d69c01407d9d65637045195922a6db8e3031fddd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07fcd9d03e361663e8670e63da8990cea591ec046ba715fa41e46cdb152d3e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fcd9d03e361663e8670e63da8990cea591ec046ba715fa41e46cdb152d3e58->enter($__internal_07fcd9d03e361663e8670e63da8990cea591ec046ba715fa41e46cdb152d3e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CompanyMapper/layout.html.twig"));

        $__internal_5496ab4e95f016b28c65b50bd9dc9b5b182e673d3947cd484e6c25bb364fca1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5496ab4e95f016b28c65b50bd9dc9b5b182e673d3947cd484e6c25bb364fca1a->enter($__internal_5496ab4e95f016b28c65b50bd9dc9b5b182e673d3947cd484e6c25bb364fca1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CompanyMapper/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Websitebutler Lead-Tool</title>
        <meta name=\"description\" content=\"Websitebutler Lead-Tool\">

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar navbar-inverses navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <div class=\"navbar-brand\">
                        <img alt=\"websitebutler\" src=\"https://www.websitebutler.de/images/600/1305167/logo-dark-color.png\" style=\"width: 45%;\">
                    </div>
                </div>
            </div>
        </nav>

        ";
        // line 27
        $this->displayBlock('main', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "
    </body>
</html>";
        
        $__internal_07fcd9d03e361663e8670e63da8990cea591ec046ba715fa41e46cdb152d3e58->leave($__internal_07fcd9d03e361663e8670e63da8990cea591ec046ba715fa41e46cdb152d3e58_prof);

        
        $__internal_5496ab4e95f016b28c65b50bd9dc9b5b182e673d3947cd484e6c25bb364fca1a->leave($__internal_5496ab4e95f016b28c65b50bd9dc9b5b182e673d3947cd484e6c25bb364fca1a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05e9f47167f03cd2ee435dd15c63459962327f6e42d96d81e101ae6be237ef78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e9f47167f03cd2ee435dd15c63459962327f6e42d96d81e101ae6be237ef78->enter($__internal_05e9f47167f03cd2ee435dd15c63459962327f6e42d96d81e101ae6be237ef78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d225072d71a634282f1a9561c3ac38aae51b881f8cbfe9a7492183160d5e8cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d225072d71a634282f1a9561c3ac38aae51b881f8cbfe9a7492183160d5e8cf5->enter($__internal_d225072d71a634282f1a9561c3ac38aae51b881f8cbfe9a7492183160d5e8cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/companymapper/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_d225072d71a634282f1a9561c3ac38aae51b881f8cbfe9a7492183160d5e8cf5->leave($__internal_d225072d71a634282f1a9561c3ac38aae51b881f8cbfe9a7492183160d5e8cf5_prof);

        
        $__internal_05e9f47167f03cd2ee435dd15c63459962327f6e42d96d81e101ae6be237ef78->leave($__internal_05e9f47167f03cd2ee435dd15c63459962327f6e42d96d81e101ae6be237ef78_prof);

    }

    // line 27
    public function block_main($context, array $blocks = array())
    {
        $__internal_2597f0d8e2ee4eeeb8dfae8dae3df46f6516e2930906a2153ab6cace89c7e4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2597f0d8e2ee4eeeb8dfae8dae3df46f6516e2930906a2153ab6cace89c7e4e8->enter($__internal_2597f0d8e2ee4eeeb8dfae8dae3df46f6516e2930906a2153ab6cace89c7e4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_889928c06c3a6797878cf6045bfaf129bdbd36459b99853398fc1c560974e5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889928c06c3a6797878cf6045bfaf129bdbd36459b99853398fc1c560974e5e0->enter($__internal_889928c06c3a6797878cf6045bfaf129bdbd36459b99853398fc1c560974e5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 28
        echo "            <main class=\"content\">
                <div class=\"container page-header\">
                    ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "                </div>
            </main>
        ";
        
        $__internal_889928c06c3a6797878cf6045bfaf129bdbd36459b99853398fc1c560974e5e0->leave($__internal_889928c06c3a6797878cf6045bfaf129bdbd36459b99853398fc1c560974e5e0_prof);

        
        $__internal_2597f0d8e2ee4eeeb8dfae8dae3df46f6516e2930906a2153ab6cace89c7e4e8->leave($__internal_2597f0d8e2ee4eeeb8dfae8dae3df46f6516e2930906a2153ab6cace89c7e4e8_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_56ba11c280d83fe31d72a8cd3c87d80d085a3a4629f058d61fb2016fe164e4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ba11c280d83fe31d72a8cd3c87d80d085a3a4629f058d61fb2016fe164e4bb->enter($__internal_56ba11c280d83fe31d72a8cd3c87d80d085a3a4629f058d61fb2016fe164e4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_070b9a21d9834c530752670e6715fff72313dda1a0a2636fdd01d64e715082ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070b9a21d9834c530752670e6715fff72313dda1a0a2636fdd01d64e715082ea->enter($__internal_070b9a21d9834c530752670e6715fff72313dda1a0a2636fdd01d64e715082ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_070b9a21d9834c530752670e6715fff72313dda1a0a2636fdd01d64e715082ea->leave($__internal_070b9a21d9834c530752670e6715fff72313dda1a0a2636fdd01d64e715082ea_prof);

        
        $__internal_56ba11c280d83fe31d72a8cd3c87d80d085a3a4629f058d61fb2016fe164e4bb->leave($__internal_56ba11c280d83fe31d72a8cd3c87d80d085a3a4629f058d61fb2016fe164e4bb_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_639054a36fb00c39e9b7dc534a2a9e9ee0d1cd9eba0c692a457591198a08f846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639054a36fb00c39e9b7dc534a2a9e9ee0d1cd9eba0c692a457591198a08f846->enter($__internal_639054a36fb00c39e9b7dc534a2a9e9ee0d1cd9eba0c692a457591198a08f846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a962928d3f0f6b9f9a26a175791a0754acf6c83a76f836cfbd77bbbbe3d42b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a962928d3f0f6b9f9a26a175791a0754acf6c83a76f836cfbd77bbbbe3d42b6->enter($__internal_2a962928d3f0f6b9f9a26a175791a0754acf6c83a76f836cfbd77bbbbe3d42b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js\"></script>
        ";
        
        $__internal_2a962928d3f0f6b9f9a26a175791a0754acf6c83a76f836cfbd77bbbbe3d42b6->leave($__internal_2a962928d3f0f6b9f9a26a175791a0754acf6c83a76f836cfbd77bbbbe3d42b6_prof);

        
        $__internal_639054a36fb00c39e9b7dc534a2a9e9ee0d1cd9eba0c692a457591198a08f846->leave($__internal_639054a36fb00c39e9b7dc534a2a9e9ee0d1cd9eba0c692a457591198a08f846_prof);

    }

    public function getTemplateName()
    {
        return "@CompanyMapper/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 36,  147 => 35,  130 => 30,  118 => 31,  116 => 30,  112 => 28,  103 => 27,  91 => 11,  87 => 9,  78 => 8,  66 => 39,  64 => 35,  61 => 34,  59 => 27,  43 => 14,  40 => 13,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Websitebutler Lead-Tool</title>
        <meta name=\"description\" content=\"Websitebutler Lead-Tool\">

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/companymapper/css/style.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <nav class=\"navbar navbar-inverses navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <div class=\"navbar-brand\">
                        <img alt=\"websitebutler\" src=\"https://www.websitebutler.de/images/600/1305167/logo-dark-color.png\" style=\"width: 45%;\">
                    </div>
                </div>
            </div>
        </nav>

        {% block main %}
            <main class=\"content\">
                <div class=\"container page-header\">
                    {% block content %}{% endblock %}
                </div>
            </main>
        {% endblock %}

        {% block javascripts %}
            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js\"></script>
        {% endblock %}

    </body>
</html>", "@CompanyMapper/layout.html.twig", "/Users/ekhaled/Documents/scotch-box/public/uploadTest/src/CompanyMapperBundle/Resources/views/layout.html.twig");
    }
}
