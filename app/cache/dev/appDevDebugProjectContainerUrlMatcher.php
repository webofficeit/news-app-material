<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/api/user')) {
            // api_user_register
            if (0 === strpos($pathinfo, '/api/user/register') && preg_match('#^/api/user/register/(?P<token>[^/]++)/$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_user_register;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_register')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_registerAction',));
            }
            not_api_user_register:

            // api_user_login
            if (0 === strpos($pathinfo, '/api/user/login') && preg_match('#^/api/user/login/(?P<username>[^/]++)/(?P<password>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_user_login;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_user_login');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_login;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_login')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_loginAction',));
            }
            not_api_user_login:

        }

        if (0 === strpos($pathinfo, '/users')) {
            // user_user_index
            if ('/users/index.html' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_user_index',);
            }

            // user_user_edit
            if (0 === strpos($pathinfo, '/users/edit') && preg_match('#^/users/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_edit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/user')) {
            // api_user_change_password
            if (0 === strpos($pathinfo, '/api/user/password') && preg_match('#^/api/user/password/(?P<id>[^/]++)/(?P<password>[^/]++)/(?P<new_password>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_user_change_password;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_user_change_password');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_change_password;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_change_password')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_change_passwordAction',));
            }
            not_api_user_change_password:

            // api_user_edit_name
            if (0 === strpos($pathinfo, '/api/user/name') && preg_match('#^/api/user/name/(?P<id>[^/]++)/(?P<name>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_user_edit_name;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_user_edit_name');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_edit_name;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_edit_name')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_edit_nameAction',));
            }
            not_api_user_edit_name:

            // api_user_email
            if (0 === strpos($pathinfo, '/api/user/email') && preg_match('#^/api/user/email/(?P<email>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_user_email;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_user_email');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_email')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_emailAction',));
            }
            not_api_user_email:

            if (0 === strpos($pathinfo, '/api/user/re')) {
                // api_user_request
                if (0 === strpos($pathinfo, '/api/user/request') && preg_match('#^/api/user/request/(?P<key>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_api_user_request;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'api_user_request');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_user_request;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_request')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_requestAction',));
                }
                not_api_user_request:

                // api_user_reset
                if (0 === strpos($pathinfo, '/api/user/reset') && preg_match('#^/api/user/reset/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<new_password>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_api_user_reset;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'api_user_reset');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_user_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::api_resetAction',));
                }
                not_api_user_reset:

            }

            // api_user_check
            if (0 === strpos($pathinfo, '/api/user/check') && preg_match('#^/api/user/check/(?P<id>[^/]++)/(?P<key>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_user_check;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_user_check');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_user_check;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_user_check')), array (  '_controller' => 'UserBundle\\Controller\\UserController::api_checkAction',));
            }
            not_api_user_check:

        }

        // app_home_index
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_app_home_index;
            } else {
                return $this->redirect($rawPathinfo.'/', 'app_home_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'app_home_index',);
        }
        not_app_home_index:

        // api_home_api_device
        if (0 === strpos($pathinfo, '/api/device') && preg_match('#^/api/device/(?P<tkn>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_api_home_api_device;
            } else {
                return $this->redirect($rawPathinfo.'/', 'api_home_api_device');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_home_api_device')), array (  '_controller' => 'AppBundle\\Controller\\HomeController::api_deviceAction',));
        }
        not_api_home_api_device:

        if (0 === strpos($pathinfo, '/categories')) {
            // app_categories_index
            if ('/categories/index.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'app_categories_index',);
            }

            // app_categories_add
            if ('/categories/add.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::addAction',  '_route' => 'app_categories_add',);
            }

            // app_categories_delete
            if (0 === strpos($pathinfo, '/categories/delete') && preg_match('#^/categories/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_categories_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::deleteAction',));
            }

            // app_categories_up
            if (0 === strpos($pathinfo, '/categories/up') && preg_match('#^/categories/up/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_categories_up')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::upAction',));
            }

            // app_categories_down
            if (0 === strpos($pathinfo, '/categories/down') && preg_match('#^/categories/down/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_categories_down')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::downAction',));
            }

            // app_categories_edit
            if (0 === strpos($pathinfo, '/categories/edit') && preg_match('#^/categories/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_categories_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // api_categories_list
            if (0 === strpos($pathinfo, '/api/categories/list') && preg_match('#^/api/categories/list/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_categories_list;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_categories_list');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_categories_list')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::api_listAction',));
            }
            not_api_categories_list:

            if (0 === strpos($pathinfo, '/articles')) {
                // app_articles_add
                if ('/articles/add.html' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::addAction',  '_route' => 'app_articles_add',);
                }

                // app_articles_index
                if ('/articles/index.html' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'app_articles_index',);
                }

                // app_articles_view
                if (0 === strpos($pathinfo, '/articles/view') && preg_match('#^/articles/view/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_articles_view')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::viewAction',));
                }

                // app_articles_notif
                if (0 === strpos($pathinfo, '/articles/notif') && preg_match('#^/articles/notif/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_articles_notif')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::notifAction',));
                }

                // app_articles_edit
                if (0 === strpos($pathinfo, '/articles/edit') && preg_match('#^/articles/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_articles_edit')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::editAction',));
                }

                // app_articles_delete
                if (0 === strpos($pathinfo, '/articles/delete') && preg_match('#^/articles/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_articles_delete')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/articles')) {
                // api_articles_all
                if (0 === strpos($pathinfo, '/api/articles/all') && preg_match('#^/api/articles/all/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_api_articles_all;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'api_articles_all');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_articles_all')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::api_allAction',));
                }
                not_api_articles_all:

                // api_articles_get
                if (0 === strpos($pathinfo, '/api/articles/get') && preg_match('#^/api/articles/get/(?P<id>\\d+)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_api_articles_get;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'api_articles_get');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_articles_get')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::api_getAction',));
                }
                not_api_articles_get:

                // api_articles_next
                if (0 === strpos($pathinfo, '/api/articles/next') && preg_match('#^/api/articles/next/(?P<id>\\d+)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_api_articles_next;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'api_articles_next');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_articles_next')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::api_nextAction',));
                }
                not_api_articles_next:

                // api_articles_by_category
                if (0 === strpos($pathinfo, '/api/articles/by') && preg_match('#^/api/articles/by/(?P<category>\\d+)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_api_articles_by_category;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'api_articles_by_category');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_articles_by_category')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::api_by_categoryAction',));
                }
                not_api_articles_by_category:

                // api_articles_by_query
                if (0 === strpos($pathinfo, '/api/articles/search') && preg_match('#^/api/articles/search/(?P<query>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_api_articles_by_query;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'api_articles_by_query');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_articles_by_query')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::api_by_queryAction',));
                }
                not_api_articles_by_query:

                // api_articles_by_category_next
                if (0 === strpos($pathinfo, '/api/articles/next') && preg_match('#^/api/articles/next/(?P<category>\\d+)/(?P<id>\\d+)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_api_articles_by_category_next;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'api_articles_by_category_next');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_articles_by_category_next')), array (  '_controller' => 'AppBundle\\Controller\\ArticlesController::api_by_category_nextAction',));
                }
                not_api_articles_by_category_next:

            }

        }

        if (0 === strpos($pathinfo, '/videos')) {
            // app_videos_notif
            if (0 === strpos($pathinfo, '/videos/notif') && preg_match('#^/videos/notif/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_videos_notif')), array (  '_controller' => 'AppBundle\\Controller\\VideosController::notifAction',));
            }

            // app_videos_add
            if ('/videos/add.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VideosController::addAction',  '_route' => 'app_videos_add',);
            }

            // app_videos_index
            if ('/videos/index.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\VideosController::indexAction',  '_route' => 'app_videos_index',);
            }

            // app_videos_view
            if (0 === strpos($pathinfo, '/videos/view') && preg_match('#^/videos/view/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_videos_view')), array (  '_controller' => 'AppBundle\\Controller\\VideosController::viewAction',));
            }

            // app_videos_edit
            if (0 === strpos($pathinfo, '/videos/edit') && preg_match('#^/videos/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_videos_edit')), array (  '_controller' => 'AppBundle\\Controller\\VideosController::editAction',));
            }

            // app_videos_delete
            if (0 === strpos($pathinfo, '/videos/delete') && preg_match('#^/videos/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_videos_delete')), array (  '_controller' => 'AppBundle\\Controller\\VideosController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/comments')) {
            if (0 === strpos($pathinfo, '/comments/delete')) {
                // app_comments_delete
                if (preg_match('#^/comments/delete/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_comments_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::deleteAction',));
                }

                // app_comments_delete_two
                if (0 === strpos($pathinfo, '/comments/delete_two') && preg_match('#^/comments/delete_two/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_comments_delete_two')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::delete_twoAction',));
                }

            }

            if (0 === strpos($pathinfo, '/comments/hide')) {
                // app_comments_hide
                if (preg_match('#^/comments/hide/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_comments_hide')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::hideAction',));
                }

                // app_comments_hide_two
                if (0 === strpos($pathinfo, '/comments/hide_two') && preg_match('#^/comments/hide_two/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_comments_hide_two')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::hide_twoAction',));
                }

            }

            // app_comments_index
            if ('/comments/index.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentsController::indexAction',  '_route' => 'app_comments_index',);
            }

        }

        if (0 === strpos($pathinfo, '/api/comments')) {
            // api_comments_add
            if (0 === strpos($pathinfo, '/api/comments/add') && preg_match('#^/api/comments/add/(?P<user>[^/]++)/(?P<article>[^/]++)/(?P<comment>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_comments_add;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_comments_add');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comments_add')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::api_addAction',));
            }
            not_api_comments_add:

            // api_comments_by
            if (0 === strpos($pathinfo, '/api/comments/by') && preg_match('#^/api/comments/by/(?P<article>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_comments_by;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_comments_by');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_comments_by')), array (  '_controller' => 'AppBundle\\Controller\\CommentsController::api_byAction',));
            }
            not_api_comments_by:

        }

        if (0 === strpos($pathinfo, '/support')) {
            // app_support_index
            if ('/support/index.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SupportController::indexAction',  '_route' => 'app_support_index',);
            }

            // app_support_view
            if (0 === strpos($pathinfo, '/support/view') && preg_match('#^/support/view/(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_support_view')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::viewAction',));
            }

            // app_support_delete
            if (0 === strpos($pathinfo, '/support/delete') && preg_match('#^/support/delete/(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_support_delete')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::deleteAction',));
            }

        }

        // api_support_add
        if (0 === strpos($pathinfo, '/api/support/add') && preg_match('#^/api/support/add/(?P<email>[^/]++)/(?P<subject>[^/]++)/(?P<message>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_api_support_add;
            } else {
                return $this->redirect($rawPathinfo.'/', 'api_support_add');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_support_add')), array (  '_controller' => 'AppBundle\\Controller\\SupportController::api_addAction',));
        }
        not_api_support_add:

        if (0 === strpos($pathinfo, '/poll')) {
            // app_poll_add
            if ('/poll/add.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PollController::addAction',  '_route' => 'app_poll_add',);
            }

            // app_poll_edit
            if (0 === strpos($pathinfo, '/poll/edit') && preg_match('#^/poll/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_poll_edit')), array (  '_controller' => 'AppBundle\\Controller\\PollController::editAction',));
            }

            // app_poll_index
            if ('/poll/index.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PollController::indexAction',  '_route' => 'app_poll_index',);
            }

        }

        // api_poll_list
        if (0 === strpos($pathinfo, '/api/poll/list') && preg_match('#^/api/poll/list/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_api_poll_list;
            } else {
                return $this->redirect($rawPathinfo.'/', 'api_poll_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_poll_list')), array (  '_controller' => 'AppBundle\\Controller\\PollController::api_pollAction',));
        }
        not_api_poll_list:

        // app_poll_delete
        if (0 === strpos($pathinfo, '/poll/delete') && preg_match('#^/poll/delete/(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_poll_delete')), array (  '_controller' => 'AppBundle\\Controller\\PollController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/subscription')) {
            // app_subcription_add
            if ('/subscription/add.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::addAction',  '_route' => 'app_subcription_add',);
            }

            // app_subcription_edit
            if (0 === strpos($pathinfo, '/subscription/edit') && preg_match('#^/subscription/edit/(?P<id>\\d+)\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_subcription_edit')), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::editAction',));
            }

            // app_subcription_index
            if ('/subscription/index.html' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::indexAction',  '_route' => 'app_subcription_index',);
            }

        }

        // api_subcription_list
        if (0 === strpos($pathinfo, '/api/subscription/list') && preg_match('#^/api/subscription/list/(?P<token>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_subcription_list')), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::api_subscriptionAction',));
        }

        // app_subcription_delete
        if (0 === strpos($pathinfo, '/subscription/delete') && preg_match('#^/subscription/delete/(?P<id>[^/\\.]++)\\.html$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_subcription_delete')), array (  '_controller' => 'AppBundle\\Controller\\SubscriptionController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/medias')) {
            // media_index
            if ('/medias' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_media_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'media_index');
                }

                return array (  '_controller' => 'MediaBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
            }
            not_media_index:

            // media_add
            if ('/medias/add' === $pathinfo) {
                return array (  '_controller' => 'MediaBundle\\Controller\\MediaController::addAction',  '_route' => 'media_add',);
            }

            // media_delete
            if (0 === strpos($pathinfo, '/medias/delete') && preg_match('#^/medias/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/medias')) {
            // api_media_delete
            if (0 === strpos($pathinfo, '/api/medias/delete') && preg_match('#^/api/medias/delete/(?P<id>[^/]++)/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_api_media_delete;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'api_media_delete');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_media_delete')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::api_deleteAction',));
            }
            not_api_media_delete:

            // media_api_upload
            if (0 === strpos($pathinfo, '/api/medias/upload') && preg_match('#^/api/medias/upload/(?P<token>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_media_api_upload;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'media_api_upload');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_api_upload')), array (  '_controller' => 'MediaBundle\\Controller\\MediaController::api_uploadAction',));
            }
            not_media_api_upload:

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
