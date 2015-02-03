<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            if (0 === strpos($pathinfo, '/css/bootstrap_')) {
                // _assetic_bootstrap_css_0
                if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                }

                // _assetic_bootstrap_css_1
                if ($pathinfo === '/css/bootstrap_form_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/js/bootstrap.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/bootstrap_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ($pathinfo === '/js/bootstrap_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_c')) {
                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/js/bootstrap_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/js/bootstrap_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                    }

                    // _assetic_bootstrap_js_5
                    if ($pathinfo === '/js/bootstrap_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                    }

                    // _assetic_bootstrap_js_6
                    if ($pathinfo === '/js/bootstrap_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                    }

                    // _assetic_bootstrap_js_7
                    if ($pathinfo === '/js/bootstrap_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                    }

                    // _assetic_bootstrap_js_8
                    if ($pathinfo === '/js/bootstrap_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                    }

                    // _assetic_bootstrap_js_9
                    if ($pathinfo === '/js/bootstrap_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                    }

                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/bootstrap_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                    // _assetic_bootstrap_js_12
                    if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/js/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/js/jquery_jquery-1.10.2_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/endereco')) {
            // endereco
            if (rtrim($pathinfo, '/') === '/endereco') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'endereco');
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EnderecoController::indexAction',  '_route' => 'endereco',);
            }

            // endereco_show
            if (preg_match('#^/endereco/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endereco_show')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EnderecoController::showAction',));
            }

            // endereco_new
            if ($pathinfo === '/endereco/new') {
                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EnderecoController::newAction',  '_route' => 'endereco_new',);
            }

            // endereco_create
            if ($pathinfo === '/endereco/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_endereco_create;
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EnderecoController::createAction',  '_route' => 'endereco_create',);
            }
            not_endereco_create:

            // endereco_edit
            if (preg_match('#^/endereco/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endereco_edit')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EnderecoController::editAction',));
            }

            // endereco_update
            if (preg_match('#^/endereco/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_endereco_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endereco_update')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EnderecoController::updateAction',));
            }
            not_endereco_update:

            // endereco_delete
            if (preg_match('#^/endereco/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_endereco_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'endereco_delete')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EnderecoController::deleteAction',));
            }
            not_endereco_delete:

        }

        if (0 === strpos($pathinfo, '/projeto')) {
            // projeto
            if (rtrim($pathinfo, '/') === '/projeto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'projeto');
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ProjetoController::indexAction',  '_route' => 'projeto',);
            }

            // projeto_show
            if (preg_match('#^/projeto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projeto_show')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ProjetoController::showAction',));
            }

            // projeto_new
            if ($pathinfo === '/projeto/new') {
                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ProjetoController::newAction',  '_route' => 'projeto_new',);
            }

            // projeto_create
            if ($pathinfo === '/projeto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_projeto_create;
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ProjetoController::createAction',  '_route' => 'projeto_create',);
            }
            not_projeto_create:

            // projeto_edit
            if (preg_match('#^/projeto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projeto_edit')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ProjetoController::editAction',));
            }

            // projeto_update
            if (preg_match('#^/projeto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_projeto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projeto_update')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ProjetoController::updateAction',));
            }
            not_projeto_update:

            // projeto_delete
            if (preg_match('#^/projeto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_projeto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projeto_delete')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ProjetoController::deleteAction',));
            }
            not_projeto_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/contato')) {
                // contato
                if (rtrim($pathinfo, '/') === '/contato') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contato');
                    }

                    return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::indexAction',  '_route' => 'contato',);
                }

                // contato_show
                if (preg_match('#^/contato/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contato_show')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::showAction',));
                }

                // contato_new
                if ($pathinfo === '/contato/new') {
                    return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::newAction',  '_route' => 'contato_new',);
                }

                // contato_cliente_new
                if (preg_match('#^/contato/(?P<id>[^/]++)/newcontatocliente$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contato_cliente_new')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::newContatoClienteAction',));
                }

                // contato_create
                if ($pathinfo === '/contato/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_contato_create;
                    }

                    return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::createAction',  '_route' => 'contato_create',);
                }
                not_contato_create:

                // contato_cliente_create
                if (preg_match('#^/contato/(?P<id>[^/]++)/createcontatocliente$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_contato_cliente_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contato_cliente_create')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::createContatoClienteAction',));
                }
                not_contato_cliente_create:

                // contato_edit
                if (preg_match('#^/contato/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contato_edit')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::editAction',));
                }

                // contato_update
                if (preg_match('#^/contato/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_contato_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contato_update')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::updateAction',));
                }
                not_contato_update:

                // contato_delete
                if (preg_match('#^/contato/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_contato_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contato_delete')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContatoController::deleteAction',));
                }
                not_contato_delete:

            }

            if (0 === strpos($pathinfo, '/cliente')) {
                // cliente
                if (rtrim($pathinfo, '/') === '/cliente') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cliente');
                    }

                    return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ClienteController::indexAction',  '_route' => 'cliente',);
                }

                // cliente_show
                if (preg_match('#^/cliente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ClienteController::showAction',));
                }

                // cliente_new
                if ($pathinfo === '/cliente/new') {
                    return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
                }

                // cliente_create
                if ($pathinfo === '/cliente/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cliente_create;
                    }

                    return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ClienteController::createAction',  '_route' => 'cliente_create',);
                }
                not_cliente_create:

                // cliente_edit
                if (preg_match('#^/cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ClienteController::editAction',));
                }

                // cliente_update
                if (preg_match('#^/cliente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cliente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_update')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ClienteController::updateAction',));
                }
                not_cliente_update:

                // cliente_delete
                if (preg_match('#^/cliente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_cliente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ClienteController::deleteAction',));
                }
                not_cliente_delete:

                // cliente_endereco
                if (preg_match('#^/cliente/(?P<id>[^/]++)/clienteendereco$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_endereco')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ClienteController::enderecoAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/membro')) {
            // membro
            if (rtrim($pathinfo, '/') === '/membro') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'membro');
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::indexAction',  '_route' => 'membro',);
            }

            // membro_show
            if (preg_match('#^/membro/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membro_show')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::showAction',));
            }

            // membro_new
            if ($pathinfo === '/membro/new') {
                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::newAction',  '_route' => 'membro_new',);
            }

            // membro_equipe_new
            if (preg_match('#^/membro/(?P<id>[^/]++)/membroequipe$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membro_equipe_new')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::newMembroEquipeAction',));
            }

            // membro_create
            if ($pathinfo === '/membro/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_membro_create;
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::createAction',  '_route' => 'membro_create',);
            }
            not_membro_create:

            // membro_equipe_create
            if (preg_match('#^/membro/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_membro_equipe_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membro_equipe_create')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::createMembroEquipeAction',));
            }
            not_membro_equipe_create:

            // membro_edit
            if (preg_match('#^/membro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membro_edit')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::editAction',));
            }

            // membro_update
            if (preg_match('#^/membro/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_membro_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membro_update')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::updateAction',));
            }
            not_membro_update:

            // membro_delete
            if (preg_match('#^/membro/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_membro_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membro_delete')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::deleteAction',));
            }
            not_membro_delete:

            // membro_desabilitar
            if (preg_match('#^/membro/(?P<id>[^/]++)/desabilitar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membro_desabilitar')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\MembroController::desabilitarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/equipe')) {
            // equipe
            if (rtrim($pathinfo, '/') === '/equipe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'equipe');
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EquipeController::indexAction',  '_route' => 'equipe',);
            }

            // equipe_show
            if (preg_match('#^/equipe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_show')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EquipeController::showAction',));
            }

            // equipe_new
            if ($pathinfo === '/equipe/new') {
                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EquipeController::newAction',  '_route' => 'equipe_new',);
            }

            // equipe_create
            if ($pathinfo === '/equipe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_equipe_create;
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EquipeController::createAction',  '_route' => 'equipe_create',);
            }
            not_equipe_create:

            // equipe_edit
            if (preg_match('#^/equipe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_edit')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EquipeController::editAction',));
            }

            // equipe_update
            if (preg_match('#^/equipe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_equipe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_update')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EquipeController::updateAction',));
            }
            not_equipe_update:

            // equipe_delete
            if (preg_match('#^/equipe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_equipe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_delete')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EquipeController::deleteAction',));
            }
            not_equipe_delete:

            // equipe_desabilitar
            if (preg_match('#^/equipe/(?P<id>[^/]++)/desabilitar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_desabilitar')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\EquipeController::desabilitarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/conta')) {
            // conta
            if (rtrim($pathinfo, '/') === '/conta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'conta');
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContaController::indexAction',  '_route' => 'conta',);
            }

            // conta_show
            if (preg_match('#^/conta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conta_show')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContaController::showAction',));
            }

            // conta_new
            if ($pathinfo === '/conta/new') {
                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContaController::newAction',  '_route' => 'conta_new',);
            }

            // conta_create
            if ($pathinfo === '/conta/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_conta_create;
                }

                return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContaController::createAction',  '_route' => 'conta_create',);
            }
            not_conta_create:

            // conta_edit
            if (preg_match('#^/conta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conta_edit')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContaController::editAction',));
            }

            // conta_update
            if (preg_match('#^/conta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_conta_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conta_update')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContaController::updateAction',));
            }
            not_conta_update:

            // conta_delete
            if (preg_match('#^/conta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_conta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conta_delete')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContaController::deleteAction',));
            }
            not_conta_delete:

            // conta_endereco
            if (preg_match('#^/conta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conta_endereco')), array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\ContaController::enderecoAction',));
            }

        }

        // imaginativo_ts_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'imaginativo_ts_homepage');
            }

            return array (  '_controller' => 'Imaginativo\\Bundle\\TSBundle\\Controller\\DefaultController::indexAction',  '_route' => 'imaginativo_ts_homepage',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
