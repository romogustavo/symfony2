<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_432e6eb6eefb685e205e97f9f50798d96ea86455e13966be896c51a3d880ad8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

    ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array())) > 0)) {
            // line 21
            echo "        <div class=\"row\">
            ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 23
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                echo "\">
                    ";
                // line 24
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
    ";
        }
        // line 29
        echo "
    <div class=\"row\">
        ";
        // line 31
        $context["has_center"] = false;
        // line 32
        echo "
        <div class=\"";
        // line 33
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 35
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>

        ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            // line 40
            echo "            <div class=\"col-md-4\">
                ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 42
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
        ";
        }
        // line 46
        echo "
        <div class=\"";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 49
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    </div>

    ";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array())) > 0)) {
            // line 55
            echo "        <div class=\"row\">
            ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 57
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                echo "\">
                    ";
                // line 58
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </div>
    ";
        }
        // line 63
        echo "


    ";
        // line 66
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 57,  167 => 56,  164 => 55,  162 => 54,  157 => 51,  148 => 49,  144 => 48,  136 => 47,  133 => 46,  129 => 44,  120 => 42,  116 => 41,  113 => 40,  111 => 39,  107 => 37,  98 => 35,  94 => 34,  86 => 33,  83 => 32,  81 => 31,  77 => 29,  73 => 27,  64 => 24,  59 => 23,  55 => 22,  52 => 21,  50 => 20,  45 => 18,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
