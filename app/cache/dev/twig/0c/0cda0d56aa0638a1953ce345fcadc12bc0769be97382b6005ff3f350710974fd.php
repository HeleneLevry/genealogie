<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8c61ab62b999ea815aacf6901d8ab0829f6b7c894a0ffaff4314e279924dc6d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a57213c2a527ce3f81623d24442fab965f5e838d098c4acbeb844cb73215cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a57213c2a527ce3f81623d24442fab965f5e838d098c4acbeb844cb73215cce->enter($__internal_5a57213c2a527ce3f81623d24442fab965f5e838d098c4acbeb844cb73215cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5a57213c2a527ce3f81623d24442fab965f5e838d098c4acbeb844cb73215cce->leave($__internal_5a57213c2a527ce3f81623d24442fab965f5e838d098c4acbeb844cb73215cce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/genealogie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
