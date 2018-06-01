<?php

/* UserBundle:User:index.html.twig */
class __TwigTemplate_2bdcb53c1a0c4d81ef7a8c14829ceec5d27e1d9e48fd5c2e473cb573ba8feb57 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"container\">
    <div class=\"c-header\">
      <h2>Users list</h2>
    </div>
    <div class=\"card\">
      <div class=\"action-header palette-Teal-400 bg clearfix\">
        <div class=\"ah-label hidden-xs palette-White text\">Find users by  full name, email or AuthID.</div>
        <div class=\"ah-search\">
          <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
            <input type=\"text\" name=\"q\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\" placeholder=\"Search for articles by title\" class=\"ahs-input\">
            <i class=\"ah-search-close zmdi zmdi-long-arrow-left\" data-ma-action=\"ah-search-close\"></i>
            <button type=\"submit\" class=\"class-27\">Search</button>
          </form>
        </div>
        <ul class=\"ah-actions actions a-alt\">
          <li>
            <a href=\"\" class=\"ah-search-trigger\" data-ma-action=\"ah-search-open\">
              <i class=\"zmdi zmdi-search\"></i>
            </a>
          </li>
          <li class=\"dropdown\">
            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
              <i class=\"zmdi zmdi-sort\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li>
                ";
        // line 29
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 29, $this->source); })()), "Sort by id", "u.id");
        echo "
              </li>
              <li>
                ";
        // line 32
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 32, $this->source); })()), "Sort by type", "u.id");
        echo "
              </li>
              <li>
                ";
        // line 35
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->source); })()), "Sort by full name", "u.name");
        echo "
              </li>
              <li>
                ";
        // line 38
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 38, $this->source); })()), "Sort by E-mail", "u.username");
        echo "
              </li>
              <li>
                ";
        // line 41
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 41, $this->source); })()), "Sort by Account state", "u.username");
        echo "
              </li>
            </ul>
          </li>
          <li class=\"dropdown\">
            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
              <i class=\"zmdi zmdi-more-vert\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li>
                <a href=\"\">Refresh</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class=\"list-group lg-alt lg-even-black\">
        <div class=\"table-responsive\">
          <table class=\"table table-striped\">
            <thead>
              <tr>
                <th width=\"70px\">Id</th>
                <th width=\"70px\">Type</th>
                <th>Full Name</th>
                <th>E-mail or AuthID</th>
                <th>Account state</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 71, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 72
            echo "                <tr>
                  <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "</td>
                  <td>
                    ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "type", array()) == "google")) {
                // line 76
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/google.png"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 77
$context["user"], "type", array()) == "facebook")) {
                // line 78
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/facebook.png"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            } else {
                // line 80
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/email.png"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 82
            echo "                  </td>
                  <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
                  <td>
                    ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "enabled", array()) == true)) {
                // line 87
                echo "                      <span class=\"label label-success\">Enabled</span>
                    ";
            } else {
                // line 89
                echo "                      <span class=\"label label-danger\">Disabled</span>
                    ";
            }
            // line 91
            echo "                  </td>
                  <td>
                    <div class=\"pull-right\">
                      <ul class=\"actions\">
                        <li class=\"dropdown\">
                          <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                          </a>
                          <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                              <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_user_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            echo "                <tr>
                  <td colspan=\"6\">
                    <p style=\"text-align:center\">
                      <img style=\"padding:50px;\" src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
                    </p>
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "            </tbody>
          </table>
          <div class=\" pull-right\" style=\"padding-right:30px;\">
            ";
        // line 121
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 121, $this->source); })()));
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 121,  230 => 118,  219 => 113,  214 => 110,  200 => 101,  188 => 91,  184 => 89,  180 => 87,  178 => 86,  173 => 84,  169 => 83,  166 => 82,  160 => 80,  154 => 78,  152 => 77,  147 => 76,  145 => 75,  140 => 73,  137 => 72,  132 => 71,  99 => 41,  93 => 38,  87 => 35,  81 => 32,  75 => 29,  55 => 12,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}
  <div class=\"container\">
    <div class=\"c-header\">
      <h2>Users list</h2>
    </div>
    <div class=\"card\">
      <div class=\"action-header palette-Teal-400 bg clearfix\">
        <div class=\"ah-label hidden-xs palette-White text\">Find users by  full name, email or AuthID.</div>
        <div class=\"ah-search\">
          <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
            <input type=\"text\" name=\"q\" value=\"{{app.request.get('title')}}\" placeholder=\"Search for articles by title\" class=\"ahs-input\">
            <i class=\"ah-search-close zmdi zmdi-long-arrow-left\" data-ma-action=\"ah-search-close\"></i>
            <button type=\"submit\" class=\"class-27\">Search</button>
          </form>
        </div>
        <ul class=\"ah-actions actions a-alt\">
          <li>
            <a href=\"\" class=\"ah-search-trigger\" data-ma-action=\"ah-search-open\">
              <i class=\"zmdi zmdi-search\"></i>
            </a>
          </li>
          <li class=\"dropdown\">
            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
              <i class=\"zmdi zmdi-sort\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by id', 'u.id') }}
              </li>
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by type', 'u.id') }}
              </li>
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by full name', 'u.name') }}
              </li>
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by E-mail', 'u.username') }}
              </li>
              <li>
                {{ knp_pagination_sortable(pagination, 'Sort by Account state', 'u.username') }}
              </li>
            </ul>
          </li>
          <li class=\"dropdown\">
            <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
              <i class=\"zmdi zmdi-more-vert\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li>
                <a href=\"\">Refresh</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class=\"list-group lg-alt lg-even-black\">
        <div class=\"table-responsive\">
          <table class=\"table table-striped\">
            <thead>
              <tr>
                <th width=\"70px\">Id</th>
                <th width=\"70px\">Type</th>
                <th>Full Name</th>
                <th>E-mail or AuthID</th>
                <th>Account state</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {% for user in pagination %}
                <tr>
                  <td>{{user.id}}</td>
                  <td>
                    {% if user.type==\"google\" %}
                      <img src=\"{{asset(\"img/google.png\")}}\" alt=\"\">
                    {% elseif user.type==\"facebook\" %}
                      <img src=\"{{asset(\"img/facebook.png\")}}\" alt=\"\">
                    {% else %}
                      <img src=\"{{asset(\"img/email.png\")}}\" alt=\"\">
                    {% endif %}
                  </td>
                  <td>{{user.name}}</td>
                  <td>{{user.email}}</td>
                  <td>
                    {% if user.enabled==true %}
                      <span class=\"label label-success\">Enabled</span>
                    {% else %}
                      <span class=\"label label-danger\">Disabled</span>
                    {% endif %}
                  </td>
                  <td>
                    <div class=\"pull-right\">
                      <ul class=\"actions\">
                        <li class=\"dropdown\">
                          <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                          </a>
                          <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                              <a href=\"{{path(\"user_user_edit\",{\"id\":user.id})}}\">Edit</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              {% else %}
                <tr>
                  <td colspan=\"6\">
                    <p style=\"text-align:center\">
                      <img style=\"padding:50px;\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
                    </p>
                  </td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
          <div class=\" pull-right\" style=\"padding-right:30px;\">
            {{ knp_pagination_render(pagination) }}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock%}", "UserBundle:User:index.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/User/index.html.twig");
    }
}
