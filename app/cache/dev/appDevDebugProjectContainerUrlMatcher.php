<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // orion_event_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_event_homepage')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/user_')) {
            if (0 === strpos($pathinfo, '/user_billet')) {
                // user_billet_index
                if ($pathinfo === '/user_billet/index') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::indexAction',  '_route' => 'user_billet_index',);
                }

                // user_billet_show
                if (preg_match('#^/user_billet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_show')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::showAction',));
                }

                // user_billet_new
                if (preg_match('#^/user_billet/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_new')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::newAction',));
                }

                // user_billet_ajout
                if (preg_match('#^/user_billet/(?P<id>[^/]++)/ajout$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_ajout')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::ajoutAction',));
                }

                // user_billet_create
                if ($pathinfo === '/user_billet/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_billet_create;
                    }

                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::createAction',  '_route' => 'user_billet_create',);
                }
                not_user_billet_create:

                // user_billet_edit
                if (preg_match('#^/user_billet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_edit')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::editAction',));
                }

                // user_billet_update
                if (preg_match('#^/user_billet/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_billet_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_update')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::updateAction',));
                }
                not_user_billet_update:

                // user_billet_update2
                if (preg_match('#^/user_billet/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_billet_update2;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_update2')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::update2Action',));
                }
                not_user_billet_update2:

                // user_billet_delete
                if (preg_match('#^/user_billet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_user_billet_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_delete')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::deleteAction',));
                }
                not_user_billet_delete:

                // user_billet_search
                if ($pathinfo === '/user_billet/search') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::searchAction',  '_route' => 'user_billet_search',);
                }

                // user_billet_par_event
                if (preg_match('#^/user_billet/(?P<id>[^/]++)/eventbillets$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_par_event')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_BilletController::indexParEventAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user_event')) {
                // user_event_index
                if ($pathinfo === '/user_event/index') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_EventController::indexAction',  '_route' => 'user_event_index',);
                }

                // user_event_search
                if ($pathinfo === '/user_event/search') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_EventController::searchAction',  '_route' => 'user_event_search',);
                }

                // user_event_show
                if (preg_match('#^/user_event/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_event_show')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_EventController::showAction',));
                }

                // user_event_book
                if (preg_match('#^/user_event/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_event_book')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_EventController::bookAction',));
                }

            }

            if (0 === strpos($pathinfo, '/user_owned_events')) {
                // user_owned_events_all
                if ($pathinfo === '/user_owned_events/all') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::myEventsAction',  '_route' => 'user_owned_events_all',);
                }

                // user_owned_events_published
                if ($pathinfo === '/user_owned_events/published') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::myPublishedEventsAction',  '_route' => 'user_owned_events_published',);
                }

                // user_owned_events_cancelled
                if ($pathinfo === '/user_owned_events/cancelled') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::myCancelledEventsAction',  '_route' => 'user_owned_events_cancelled',);
                }

                // user_owned_events_registred
                if ($pathinfo === '/user_owned_events/registred') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::myRegistredEventsAction',  '_route' => 'user_owned_events_registred',);
                }

                // user_owned_event_publish
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_publish')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::publishAction',));
                }

                // user_owned_event_hide
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/hide$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_hide')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::hideAction',));
                }

                // user_owned_event_search
                if ($pathinfo === '/user_owned_events/search') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::searchAction',  '_route' => 'user_owned_event_search',);
                }

                // user_owned_event_cancel
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_cancel')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::cancelAction',));
                }

                // user_owned_event_show
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_show')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::showAction',));
                }

                // user_owned_event_new
                if ($pathinfo === '/user_owned_events/new') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::newAction',  '_route' => 'user_owned_event_new',);
                }

                // user_owned_event_create
                if ($pathinfo === '/user_owned_events/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_owned_event_create;
                    }

                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::createAction',  '_route' => 'user_owned_event_create',);
                }
                not_user_owned_event_create:

                // user_owned_event_edit
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_edit')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::editAction',));
                }

                // user_owned_event_update
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_owned_event_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_update')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::updateAction',));
                }
                not_user_owned_event_update:

                // user_owned_event_delete
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                        goto not_user_owned_event_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_delete')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::deleteAction',));
                }
                not_user_owned_event_delete:

                // user_owned_event_edit_State
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/editState$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_edit_State')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::editStateAction',));
                }

                // user_owned_event_booking_list
                if (preg_match('#^/user_owned_events/(?P<id>[^/]++)/bookingList$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_owned_event_booking_list')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_Owned_EventsController::bookingListAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin_')) {
            if (0 === strpos($pathinfo, '/admin_event')) {
                // admin_event_index
                if ($pathinfo === '/admin_event/index') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::indexAction',  '_route' => 'admin_event_index',);
                }

                // admin_event_show
                if (preg_match('#^/admin_event/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_show')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::showAction',));
                }

                // admin_event_new
                if ($pathinfo === '/admin_event/new') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::newAction',  '_route' => 'admin_event_new',);
                }

                // admin_event_create
                if ($pathinfo === '/admin_event/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_event_create;
                    }

                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::createAction',  '_route' => 'admin_event_create',);
                }
                not_admin_event_create:

                // admin_event_edit
                if (preg_match('#^/admin_event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_edit')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::editAction',));
                }

                // admin_event_update
                if (preg_match('#^/admin_event/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_event_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_update')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::updateAction',));
                }
                not_admin_event_update:

                // admin_event_delete
                if (preg_match('#^/admin_event/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_event_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_delete')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::deleteAction',));
                }
                not_admin_event_delete:

                // admin_event_publish
                if (preg_match('#^/admin_event/(?P<id>[^/]++)/publish$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_publish')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::publishAction',));
                }

                // admin_event_hide
                if (preg_match('#^/admin_event/(?P<id>[^/]++)/hide$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_hide')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::hideAction',));
                }

                // admin_event_cancel
                if (preg_match('#^/admin_event/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_cancel')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::cancelAction',));
                }

                // admin_event_edit_State
                if (preg_match('#^/admin_event/(?P<id>[^/]++)/editState$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_event_edit_State')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::editStateAction',));
                }

                // admin_event_search
                if (rtrim($pathinfo, '/') === '/admin_event') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_event_search');
                    }

                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_EventController::searchAction',  '_route' => 'admin_event_search',);
                }

            }

            if (0 === strpos($pathinfo, '/admin_t')) {
                if (0 === strpos($pathinfo, '/admin_theme')) {
                    // admin_theme_index
                    if ($pathinfo === '/admin_theme/index') {
                        return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::indexAction',  '_route' => 'admin_theme_index',);
                    }

                    // admin_theme_show
                    if (preg_match('#^/admin_theme/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_theme_show')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::showAction',));
                    }

                    // admin_theme_new
                    if ($pathinfo === '/admin_theme/new') {
                        return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::newAction',  '_route' => 'admin_theme_new',);
                    }

                    // admin_theme_create
                    if ($pathinfo === '/admin_theme/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_theme_create;
                        }

                        return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::createAction',  '_route' => 'admin_theme_create',);
                    }
                    not_admin_theme_create:

                    // admin_theme_edit
                    if (preg_match('#^/admin_theme/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_theme_edit')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::editAction',));
                    }

                    // admin_theme_update
                    if (preg_match('#^/admin_theme/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_admin_theme_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_theme_update')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::updateAction',));
                    }
                    not_admin_theme_update:

                    // admin_theme_delete
                    if (preg_match('#^/admin_theme/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_admin_theme_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_theme_delete')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::deleteAction',));
                    }
                    not_admin_theme_delete:

                    // admin_theme_activate
                    if (preg_match('#^/admin_theme/(?P<id>[^/]++)/activate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_theme_activate')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::activateAction',));
                    }

                    // admin_theme_deactivate
                    if (preg_match('#^/admin_theme/(?P<id>[^/]++)/deactivate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_theme_deactivate')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::deactivateAction',));
                    }

                    // admin_theme_search
                    if ($pathinfo === '/admin_theme/search') {
                        return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_ThemeController::searchAction',  '_route' => 'admin_theme_search',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin_type')) {
                    // admin_type_index
                    if ($pathinfo === '/admin_type/index') {
                        return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::indexAction',  '_route' => 'admin_type_index',);
                    }

                    // admin_type_show
                    if (preg_match('#^/admin_type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_show')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::showAction',));
                    }

                    // admin_type_new
                    if ($pathinfo === '/admin_type/new') {
                        return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::newAction',  '_route' => 'admin_type_new',);
                    }

                    // admin_type_create
                    if ($pathinfo === '/admin_type/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_type_create;
                        }

                        return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::createAction',  '_route' => 'admin_type_create',);
                    }
                    not_admin_type_create:

                    // admin_type_edit
                    if (preg_match('#^/admin_type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_edit')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::editAction',));
                    }

                    // admin_type_update
                    if (preg_match('#^/admin_type/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_admin_type_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_update')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::updateAction',));
                    }
                    not_admin_type_update:

                    // admin_type_delete
                    if (preg_match('#^/admin_type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_admin_type_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_delete')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::deleteAction',));
                    }
                    not_admin_type_delete:

                    // admin_type_activate
                    if (preg_match('#^/admin_type/(?P<id>[^/]++)/activate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_activate')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::activateAction',));
                    }

                    // admin_type_deactivate
                    if (preg_match('#^/admin_type/(?P<id>[^/]++)/deactivate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_type_deactivate')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::deactivateAction',));
                    }

                    // admin_type_search
                    if ($pathinfo === '/admin_type/search') {
                        return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_TypeController::searchAction',  '_route' => 'admin_type_search',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin_billet')) {
                // admin_billet_index
                if ($pathinfo === '/admin_billet/index') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::indexAction',  '_route' => 'admin_billet_index',);
                }

                // admin_billet_show
                if (preg_match('#^/admin_billet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billet_show')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::showAction',));
                }

                // admin_billet_new
                if ($pathinfo === '/admin_billet/new') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::newAction',  '_route' => 'admin_billet_new',);
                }

                // admin_billet_ajout
                if (preg_match('#^/admin_billet/(?P<id>[^/]++)/ajout$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billet_ajout')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::ajoutAction',));
                }

                // admin_billet_create
                if ($pathinfo === '/admin_billet/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_billet_create;
                    }

                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::createAction',  '_route' => 'admin_billet_create',);
                }
                not_admin_billet_create:

                // admin_billet_edit
                if (preg_match('#^/admin_billet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billet_edit')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::editAction',));
                }

                // admin_billet_update
                if (preg_match('#^/admin_billet/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_billet_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billet_update')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::updateAction',));
                }
                not_admin_billet_update:

                // admin_billet_delete
                if (preg_match('#^/admin_billet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_billet_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_billet_delete')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::deleteAction',));
                }
                not_admin_billet_delete:

                // admin_billet_search
                if ($pathinfo === '/admin_billet/search') {
                    return array (  '_controller' => 'Orion\\EventBundle\\Controller\\Admin_BilletController::searchAction',  '_route' => 'admin_billet_search',);
                }

            }

        }

        // index
        if (rtrim($pathinfo, '/') === '/index') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Orion\\EventBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/acceuil')) {
            // orion_event_user_home
            if ($pathinfo === '/acceuil') {
                return array (  '_controller' => 'Orion\\EventBundle\\Controller\\DefaultController::indexUserAction',  '_route' => 'orion_event_user_home',);
            }

            // orion_event_admin_home
            if ($pathinfo === '/acceuil_admin') {
                return array (  '_controller' => 'Orion\\EventBundle\\Controller\\DefaultController::indexAction',  '_route' => 'orion_event_admin_home',);
            }

        }

        // orion_event_home
        if ($pathinfo === '/home_page') {
            return array (  '_controller' => 'Orion\\EventBundle\\Controller\\DefaultController::redirectAction',  '_route' => 'orion_event_home',);
        }

        if (0 === strpos($pathinfo, '/user_reservation')) {
            // user_billet_par_event_reserve
            if (preg_match('#^/user_reservation/(?P<id>[^/]++)/eventbilletsreserve$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_par_event_reserve')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_ReservationController::indexParEventReserveAction',));
            }

            // user_billet_reserve
            if (preg_match('#^/user_reservation/(?P<id>[^/]++)/reserve$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_reserve')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_ReservationController::ReserveAction',));
            }

            // user_billet_reserve_end
            if (preg_match('#^/user_reservation/(?P<idBillet>[^/]++)/(?P<nbBillet>[^/]++)/reserveEnd$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_billet_reserve_end')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_ReservationController::ReserveEndAction',));
            }

            // user_my_reservation
            if ($pathinfo === '/user_reservation/myReservation') {
                return array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_ReservationController::MyReservationAction',  '_route' => 'user_my_reservation',);
            }

            // user_reservation_cancell
            if (preg_match('#^/user_reservation/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_reservation_cancell')), array (  '_controller' => 'Orion\\EventBundle\\Controller\\User_ReservationController::CancelAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/forum')) {
            if (0 === strpos($pathinfo, '/forum/category')) {
                // discutea_forum_create_category
                if ($pathinfo === '/forum/category/new') {
                    return array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\CategoryController::newCategoryAction',  '_route' => 'discutea_forum_create_category',);
                }

                // discutea_forum_edit_category
                if (0 === strpos($pathinfo, '/forum/category/edit') && preg_match('#^/forum/category/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_edit_category')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\CategoryController::editCategoryAction',));
                }

                // discutea_forum_remove_category
                if (0 === strpos($pathinfo, '/forum/category/remove') && preg_match('#^/forum/category/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_remove_category')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\CategoryController::removeCategoryAction',));
                }

            }

            // discutea_forum_homepage
            if (rtrim($pathinfo, '/') === '/forum') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'discutea_forum_homepage');
                }

                return array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\ForumController::indexAction',  '_route' => 'discutea_forum_homepage',);
            }

            if (0 === strpos($pathinfo, '/forum/forum')) {
                // discutea_forum_create_forum
                if (0 === strpos($pathinfo, '/forum/forum/new') && preg_match('#^/forum/forum/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_create_forum')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\ForumController::newForumAction',));
                }

                // discutea_forum_edit_forum
                if (0 === strpos($pathinfo, '/forum/forum/edit') && preg_match('#^/forum/forum/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_edit_forum')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\ForumController::editForumAction',));
                }

                // discutea_forum_remove_forum
                if (0 === strpos($pathinfo, '/forum/forum/remove') && preg_match('#^/forum/forum/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_remove_forum')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\ForumController::removeForumAction',));
                }

            }

            // discutea_forum_topic
            if (0 === strpos($pathinfo, '/forum/cat') && preg_match('#^/forum/cat/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_topic')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\TopicController::topicAction',));
            }

            if (0 === strpos($pathinfo, '/forum/topic')) {
                // discutea_forum_topic_delete
                if (0 === strpos($pathinfo, '/forum/topic/delete') && preg_match('#^/forum/topic/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_topic_delete')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\TopicController::deleteAction',));
                }

                // discutea_forum_topic_edit
                if (0 === strpos($pathinfo, '/forum/topic/edit') && preg_match('#^/forum/topic/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_topic_edit')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\TopicController::editAction',));
                }

                // discutea_forum_post
                if (preg_match('#^/forum/topic/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_post')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\PostController::postAction',));
                }

            }

            if (0 === strpos($pathinfo, '/forum/post')) {
                // discutea_forum_post_delete
                if (0 === strpos($pathinfo, '/forum/post/delete') && preg_match('#^/forum/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_post_delete')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\PostController::deleteAction',));
                }

                // discutea_forum_post_edit
                if (0 === strpos($pathinfo, '/forum/post/edit') && preg_match('#^/forum/post/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_forum_post_edit')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\PostController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/forum/label')) {
                // discutea_label_solved
                if (0 === strpos($pathinfo, '/forum/label/solved') && preg_match('#^/forum/label/solved/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_label_solved')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\LabelController::solvedAction',));
                }

                // discutea_label_pinned
                if (0 === strpos($pathinfo, '/forum/label/pinned') && preg_match('#^/forum/label/pinned/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_label_pinned')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\LabelController::pinnedAction',));
                }

                // discutea_label_closed
                if (0 === strpos($pathinfo, '/forum/label/closed') && preg_match('#^/forum/label/closed/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discutea_label_closed')), array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\LabelController::closedAction',));
                }

            }

            // discutea_forum_admin_dashboard
            if ($pathinfo === '/forum/admin') {
                return array (  '_controller' => 'Discutea\\DForumBundle\\Controller\\AdminController::indexAction',  '_route' => 'discutea_forum_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/forum/category')) {
                // orion_forum_create_category
                if ($pathinfo === '/forum/category/new') {
                    return array (  '_controller' => 'Orion\\ForumBundle\\Controller\\CategoryController::newCategoryAction',  '_route' => 'orion_forum_create_category',);
                }

                // orion_forum_edit_category
                if (0 === strpos($pathinfo, '/forum/category/edit') && preg_match('#^/forum/category/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_edit_category')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\CategoryController::editCategoryAction',));
                }

                // orion_forum_remove_category
                if (0 === strpos($pathinfo, '/forum/category/remove') && preg_match('#^/forum/category/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_remove_category')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\CategoryController::removeCategoryAction',));
                }

            }

            // orion_forum_homepage
            if (rtrim($pathinfo, '/') === '/forum') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orion_forum_homepage');
                }

                return array (  '_controller' => 'Orion\\ForumBundle\\Controller\\ForumController::indexAction',  '_route' => 'orion_forum_homepage',);
            }

            if (0 === strpos($pathinfo, '/forum/forum')) {
                // orion_forum_create_forum
                if (0 === strpos($pathinfo, '/forum/forum/new') && preg_match('#^/forum/forum/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_create_forum')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\ForumController::newForumAction',));
                }

                // orion_forum_edit_forum
                if (0 === strpos($pathinfo, '/forum/forum/edit') && preg_match('#^/forum/forum/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_edit_forum')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\ForumController::editForumAction',));
                }

                // orion_forum_remove_forum
                if (0 === strpos($pathinfo, '/forum/forum/remove') && preg_match('#^/forum/forum/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_remove_forum')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\ForumController::removeForumAction',));
                }

            }

            // orion_forum_topic
            if (0 === strpos($pathinfo, '/forum/cat') && preg_match('#^/forum/cat/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_topic')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\TopicController::topicAction',));
            }

            if (0 === strpos($pathinfo, '/forum/topic')) {
                // orion_forum_topic_delete
                if (0 === strpos($pathinfo, '/forum/topic/delete') && preg_match('#^/forum/topic/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_topic_delete')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\TopicController::deleteAction',));
                }

                // orion_forum_topic_edit
                if (0 === strpos($pathinfo, '/forum/topic/edit') && preg_match('#^/forum/topic/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_topic_edit')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\TopicController::editAction',));
                }

                // orion_forum_post
                if (preg_match('#^/forum/topic/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_post')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\PostController::postAction',));
                }

            }

            if (0 === strpos($pathinfo, '/forum/post')) {
                // orion_forum_post_delete
                if (0 === strpos($pathinfo, '/forum/post/delete') && preg_match('#^/forum/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_post_delete')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\PostController::deleteAction',));
                }

                // orion_forum_post_edit
                if (0 === strpos($pathinfo, '/forum/post/edit') && preg_match('#^/forum/post/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_forum_post_edit')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\PostController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/forum/label')) {
                // orion_label_solved
                if (0 === strpos($pathinfo, '/forum/label/solved') && preg_match('#^/forum/label/solved/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_label_solved')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\LabelController::solvedAction',));
                }

                // orion_label_pinned
                if (0 === strpos($pathinfo, '/forum/label/pinned') && preg_match('#^/forum/label/pinned/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_label_pinned')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\LabelController::pinnedAction',));
                }

                // orion_label_closed
                if (0 === strpos($pathinfo, '/forum/label/closed') && preg_match('#^/forum/label/closed/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'orion_label_closed')), array (  '_controller' => 'Orion\\ForumBundle\\Controller\\LabelController::closedAction',));
                }

            }

            // orion_forum_admin_dashboard
            if ($pathinfo === '/forum/admin') {
                return array (  '_controller' => 'Orion\\ForumBundle\\Controller\\AdminController::indexAction',  '_route' => 'orion_forum_admin_dashboard',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
