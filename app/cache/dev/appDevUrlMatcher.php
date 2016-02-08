<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        // fileupload__default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fileupload__default_index')), array (  '_controller' => 'FileUpload\\Bundle\\Controller\\DefaultController::indexAction',));
        }

        // file_upload
        if ($pathinfo === '/file') {
            return array (  '_controller' => 'FileUpload\\Bundle\\Controller\\FileController::indexAction',  '_route' => 'file_upload',);
        }

        if (0 === strpos($pathinfo, '/category')) {
            // category
            if (rtrim($pathinfo, '/') === '/category') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category');
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
            }
            not_category:

            // category_create
            if ($pathinfo === '/category/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_category_create;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }
            not_category_create:

            // category_new
            if ($pathinfo === '/category/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_new;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }
            not_category_new:

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'First\\UserBundle\\Controller\\CategoryController::showAction',));
            }
            not_category_show:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'First\\UserBundle\\Controller\\CategoryController::editAction',));
            }
            not_category_edit:

            // category_update
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'First\\UserBundle\\Controller\\CategoryController::updateAction',));
            }
            not_category_update:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'First\\UserBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        // first_user_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'first_user_default_index')), array (  '_controller' => 'First\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // _del_user_device
        if (0 === strpos($pathinfo, '/deleteDevice') && preg_match('#^/deleteDevice/(?P<deviceId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_del_user_device')), array (  '_controller' => 'First\\UserBundle\\Controller\\ProfileController::deleteDeviceAction',));
        }

        // user_register
        if (rtrim($pathinfo, '/') === '/betainsider') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_register');
            }

            return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_register',);
        }

        // user_index_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::loginAction',  '_route' => 'user_index_login',);
        }

        // user_thankyou_login
        if ($pathinfo === '/thankyou') {
            return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::thankyouAction',  '_route' => 'user_thankyou_login',);
        }

        if (0 === strpos($pathinfo, '/product')) {
            // product
            if (rtrim($pathinfo, '/') === '/product') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product');
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'product',);
            }
            not_product:

            // product_create
            if ($pathinfo === '/product/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_product_create;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'product_create',);
            }
            not_product_create:

            // product_new
            if ($pathinfo === '/product/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_new;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'product_new',);
            }
            not_product_new:

            // product_show
            if (preg_match('#^/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'First\\UserBundle\\Controller\\UserController::showAction',));
            }
            not_product_show:

            // product_edit
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'First\\UserBundle\\Controller\\UserController::editAction',));
            }
            not_product_edit:

            // product_update
            if (preg_match('#^/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_product_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_update')), array (  '_controller' => 'First\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_product_update:

            // product_delete
            if (preg_match('#^/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'First\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_product_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // first_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_first_user_security_login;
                    }

                    return array (  '_controller' => 'First\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'first_user_security_login',);
                }
                not_first_user_security_login:

                // first_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_first_user_security_check;
                    }

                    return array (  '_controller' => 'First\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'first_user_security_check',);
                }
                not_first_user_security_check:

            }

            // first_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_first_user_security_logout;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'first_user_security_logout',);
            }
            not_first_user_security_logout:

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

                return array (  '_controller' => 'First\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'First\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_profile_pro
            if ($pathinfo === '/profile/pro') {
                return array (  '_controller' => 'First\\UserBundle\\Controller\\ProfileController::proAction',  '_route' => 'fos_user_profile_pro',);
            }

            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/profile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/profile/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/profile/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/profile/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/profile/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/profile/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // fos_user_resetting_request
            if ($pathinfo === '/profile/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/profile/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/profile/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/profile/reset') && preg_match('#^/profile/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'First\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'First\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // first_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_first_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'first_user_registration_register');
                    }

                    return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'first_user_registration_register',);
                }
                not_first_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // first_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_first_user_registration_check_email;
                        }

                        return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'first_user_registration_check_email',);
                    }
                    not_first_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // first_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_first_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'first_user_registration_confirm')), array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_first_user_registration_confirm:

                        // first_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_first_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'First\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'first_user_registration_confirmed',);
                        }
                        not_first_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // first_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_first_user_resetting_request;
                    }

                    return array (  '_controller' => 'First\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'first_user_resetting_request',);
                }
                not_first_user_resetting_request:

                // first_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_first_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'First\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'first_user_resetting_send_email',);
                }
                not_first_user_resetting_send_email:

                // first_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_first_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'First\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'first_user_resetting_check_email',);
                }
                not_first_user_resetting_check_email:

                // first_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_first_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'first_user_resetting_reset')), array (  '_controller' => 'First\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_first_user_resetting_reset:

            }

        }

        // first_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_first_user_change_password;
            }

            return array (  '_controller' => 'First\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'first_user_change_password',);
        }
        not_first_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/app')) {
                if (0 === strpos($pathinfo, '/admin/app/user')) {
                    // admin_app_user_list
                    if ($pathinfo === '/admin/app/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_list',  '_route' => 'admin_app_user_list',);
                    }

                    // admin_app_user_create
                    if ($pathinfo === '/admin/app/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_create',  '_route' => 'admin_app_user_create',);
                    }

                    // admin_app_user_batch
                    if ($pathinfo === '/admin/app/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_batch',  '_route' => 'admin_app_user_batch',);
                    }

                    // admin_app_user_edit
                    if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_edit',));
                    }

                    // admin_app_user_delete
                    if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_delete',));
                    }

                    // admin_app_user_show
                    if (preg_match('#^/admin/app/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_show',));
                    }

                    // admin_app_user_export
                    if ($pathinfo === '/admin/app/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_export',  '_route' => 'admin_app_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/groups')) {
                    // admin_app_groups_list
                    if ($pathinfo === '/admin/app/groups/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_groups_list',  '_route' => 'admin_app_groups_list',);
                    }

                    // admin_app_groups_create
                    if ($pathinfo === '/admin/app/groups/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_groups_create',  '_route' => 'admin_app_groups_create',);
                    }

                    // admin_app_groups_batch
                    if ($pathinfo === '/admin/app/groups/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_groups_batch',  '_route' => 'admin_app_groups_batch',);
                    }

                    // admin_app_groups_edit
                    if (preg_match('#^/admin/app/groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_groups_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_groups_edit',));
                    }

                    // admin_app_groups_delete
                    if (preg_match('#^/admin/app/groups/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_groups_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_groups_delete',));
                    }

                    // admin_app_groups_show
                    if (preg_match('#^/admin/app/groups/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_groups_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_groups_show',));
                    }

                    // admin_app_groups_export
                    if ($pathinfo === '/admin/app/groups/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_groups_export',  '_route' => 'admin_app_groups_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/managefilesystem')) {
                // managefilesystem_list
                if ($pathinfo === '/admin/managefilesystem/list') {
                    return array (  '_controller' => 'First\\AdminBundle\\Controller\\manageFileSystemAdminController::listAction',  '_sonata_admin' => 'sonata.admin.promocodebox',  '_sonata_name' => 'managefilesystem_list',  '_route' => 'managefilesystem_list',);
                }

                // managefilesystem_create
                if ($pathinfo === '/admin/managefilesystem/create') {
                    return array (  '_controller' => 'First\\AdminBundle\\Controller\\manageFileSystemAdminController::createAction',  '_sonata_admin' => 'sonata.admin.promocodebox',  '_sonata_name' => 'managefilesystem_create',  '_route' => 'managefilesystem_create',);
                }

                // managefilesystem_batch
                if ($pathinfo === '/admin/managefilesystem/batch') {
                    return array (  '_controller' => 'First\\AdminBundle\\Controller\\manageFileSystemAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.promocodebox',  '_sonata_name' => 'managefilesystem_batch',  '_route' => 'managefilesystem_batch',);
                }

                // managefilesystem_edit
                if (preg_match('#^/admin/managefilesystem/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'managefilesystem_edit')), array (  '_controller' => 'First\\AdminBundle\\Controller\\manageFileSystemAdminController::editAction',  '_sonata_admin' => 'sonata.admin.promocodebox',  '_sonata_name' => 'managefilesystem_edit',));
                }

                // managefilesystem_show
                if (preg_match('#^/admin/managefilesystem/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'managefilesystem_show')), array (  '_controller' => 'First\\AdminBundle\\Controller\\manageFileSystemAdminController::showAction',  '_sonata_admin' => 'sonata.admin.promocodebox',  '_sonata_name' => 'managefilesystem_show',));
                }

                // managefilesystem_export
                if ($pathinfo === '/admin/managefilesystem/export') {
                    return array (  '_controller' => 'First\\AdminBundle\\Controller\\manageFileSystemAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.promocodebox',  '_sonata_name' => 'managefilesystem_export',  '_route' => 'managefilesystem_export',);
                }

                // managefilesystem_ProductUpload
                if ($pathinfo === '/admin/managefilesystem/ProductUpload') {
                    return array (  '_controller' => 'First\\AdminBundle\\Controller\\manageFileSystemAdminController::productUploadAction',  '_sonata_admin' => 'sonata.admin.promocodebox',  '_sonata_name' => 'managefilesystem_ProductUpload',  '_route' => 'managefilesystem_ProductUpload',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                    // admin_sonata_media_media_list
                    if ($pathinfo === '/admin/sonata/media/media/list') {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                    }

                    // admin_sonata_media_media_create
                    if ($pathinfo === '/admin/sonata/media/media/create') {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                    }

                    // admin_sonata_media_media_batch
                    if ($pathinfo === '/admin/sonata/media/media/batch') {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                    }

                    // admin_sonata_media_media_edit
                    if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                    }

                    // admin_sonata_media_media_delete
                    if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                    }

                    // admin_sonata_media_media_show
                    if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                    }

                    // admin_sonata_media_media_export
                    if ($pathinfo === '/admin/sonata/media/media/export') {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                    // admin_sonata_media_gallery_list
                    if ($pathinfo === '/admin/sonata/media/gallery/list') {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                    }

                    // admin_sonata_media_gallery_create
                    if ($pathinfo === '/admin/sonata/media/gallery/create') {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                    }

                    // admin_sonata_media_gallery_batch
                    if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                    }

                    // admin_sonata_media_gallery_edit
                    if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                    }

                    // admin_sonata_media_gallery_delete
                    if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                    }

                    // admin_sonata_media_gallery_show
                    if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                    }

                    // admin_sonata_media_gallery_export
                    if ($pathinfo === '/admin/sonata/media/gallery/export') {
                        return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                        // admin_sonata_media_galleryhasmedia_list
                        if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                        }

                        // admin_sonata_media_galleryhasmedia_create
                        if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                        }

                        // admin_sonata_media_galleryhasmedia_batch
                        if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                        }

                        // admin_sonata_media_galleryhasmedia_edit
                        if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                        }

                        // admin_sonata_media_galleryhasmedia_delete
                        if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                        }

                        // admin_sonata_media_galleryhasmedia_show
                        if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                        }

                        // admin_sonata_media_galleryhasmedia_export
                        if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // _security_check
            if ($pathinfo === '/login_fb_check') {
                return array('_route' => '_security_check');
            }

            // _security_logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_security_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
