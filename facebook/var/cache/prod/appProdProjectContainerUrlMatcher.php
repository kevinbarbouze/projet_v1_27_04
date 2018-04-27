<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // app_chat_chat
        if ('/chat' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ChatController::chat',  '_route' => 'app_chat_chat',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LoginController::login',  '_route' => 'login',);
            }

            // login_redirect
            if ('/login_redirect' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\LoginController::loginRedirect',  '_route' => 'login_redirect',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::logout',  '_route' => 'logout',);
        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::register',  '_route' => 'register',);
        }

        // profile
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<pseudo>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'AppBundle\\Controller\\ProfileController::profile',));
        }

        // timeline
        if ('/timeline' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::timeline',  '_route' => 'timeline',);
        }

        // monProfil
        if ('/monprofil' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::monProfil',  '_route' => 'monProfil',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\ProfileController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
