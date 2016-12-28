<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // administration_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'administration_homepage');
            }

            return array (  '_controller' => 'AdministrationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'administration_homepage',);
        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur_index
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur_index');
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur_index',);
            }
            not_utilisateur_index:

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/(?P<idstruct>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'AccueilBundle\\Controller\\UtilisateurController::showAction',));
            }
            not_utilisateur_show:

            // utilisateur_new
            if ($pathinfo === '/utilisateur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_utilisateur_new;
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
            }
            not_utilisateur_new:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_utilisateur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'AccueilBundle\\Controller\\UtilisateurController::editAction',));
            }
            not_utilisateur_edit:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_utilisateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'AccueilBundle\\Controller\\UtilisateurController::deleteAction',));
            }
            not_utilisateur_delete:

        }

        if (0 === strpos($pathinfo, '/projet')) {
            // projet_index
            if (rtrim($pathinfo, '/') === '/projet') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'projet_index');
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet_index',);
            }
            not_projet_index:

            // projet_show
            if (preg_match('#^/projet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_show')), array (  '_controller' => 'AccueilBundle\\Controller\\ProjetController::showAction',));
            }
            not_projet_show:

            // projet_new
            if ($pathinfo === '/projet/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_projet_new;
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
            }
            not_projet_new:

            // projet_edit
            if (preg_match('#^/projet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_projet_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_edit')), array (  '_controller' => 'AccueilBundle\\Controller\\ProjetController::editAction',));
            }
            not_projet_edit:

            // projet_delete
            if (preg_match('#^/projet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_projet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_delete')), array (  '_controller' => 'AccueilBundle\\Controller\\ProjetController::deleteAction',));
            }
            not_projet_delete:

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category_index
            if (rtrim($pathinfo, '/') === '/category') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category_index');
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
            }
            not_category_index:

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'AccueilBundle\\Controller\\CategoryController::showAction',));
            }
            not_category_show:

            // category_new
            if ($pathinfo === '/category/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_category_new;
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }
            not_category_new:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_category_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'AccueilBundle\\Controller\\CategoryController::editAction',));
            }
            not_category_edit:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'AccueilBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        if (0 === strpos($pathinfo, '/structure')) {
            // structure_index
            if (rtrim($pathinfo, '/') === '/structure') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_structure_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'structure_index');
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\StructureController::indexAction',  '_route' => 'structure_index',);
            }
            not_structure_index:

            // structure_show
            if (preg_match('#^/structure/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_structure_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_show')), array (  '_controller' => 'AccueilBundle\\Controller\\StructureController::showAction',));
            }
            not_structure_show:

            // structure_new
            if ($pathinfo === '/structure/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_structure_new;
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\StructureController::newAction',  '_route' => 'structure_new',);
            }
            not_structure_new:

            // structure_edit
            if (preg_match('#^/structure/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_structure_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_edit')), array (  '_controller' => 'AccueilBundle\\Controller\\StructureController::editAction',));
            }
            not_structure_edit:

            // structure_delete
            if (preg_match('#^/structure/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_structure_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_delete')), array (  '_controller' => 'AccueilBundle\\Controller\\StructureController::deleteAction',));
            }
            not_structure_delete:

        }

        if (0 === strpos($pathinfo, '/media')) {
            // media_index
            if (rtrim($pathinfo, '/') === '/media') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_media_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'media_index');
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
            }
            not_media_index:

            // media_show
            if (preg_match('#^/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_media_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_show')), array (  '_controller' => 'AccueilBundle\\Controller\\MediaController::showAction',));
            }
            not_media_show:

            // media_new
            if ($pathinfo === '/media/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_media_new;
                }

                return array (  '_controller' => 'AccueilBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
            }
            not_media_new:

            // media_edit
            if (preg_match('#^/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_media_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_edit')), array (  '_controller' => 'AccueilBundle\\Controller\\MediaController::editAction',));
            }
            not_media_edit:

            // media_delete
            if (preg_match('#^/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_media_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'AccueilBundle\\Controller\\MediaController::deleteAction',));
            }
            not_media_delete:

        }

        if (0 === strpos($pathinfo, '/contribut')) {
            if (0 === strpos($pathinfo, '/contributeur')) {
                // contributeur_index
                if (rtrim($pathinfo, '/') === '/contributeur') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contributeur_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contributeur_index');
                    }

                    return array (  '_controller' => 'AccueilBundle\\Controller\\ContributeurController::indexAction',  '_route' => 'contributeur_index',);
                }
                not_contributeur_index:

                // contributeur_show
                if (preg_match('#^/contributeur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contributeur_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contributeur_show')), array (  '_controller' => 'AccueilBundle\\Controller\\ContributeurController::showAction',));
                }
                not_contributeur_show:

                // contributeur_new
                if ($pathinfo === '/contributeur/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contributeur_new;
                    }

                    return array (  '_controller' => 'AccueilBundle\\Controller\\ContributeurController::newAction',  '_route' => 'contributeur_new',);
                }
                not_contributeur_new:

                // contributeur_edit
                if (preg_match('#^/contributeur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contributeur_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contributeur_edit')), array (  '_controller' => 'AccueilBundle\\Controller\\ContributeurController::editAction',));
                }
                not_contributeur_edit:

                // contributeur_delete
                if (preg_match('#^/contributeur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_contributeur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contributeur_delete')), array (  '_controller' => 'AccueilBundle\\Controller\\ContributeurController::deleteAction',));
                }
                not_contributeur_delete:

            }

            if (0 === strpos($pathinfo, '/contribution')) {
                // contribution_index
                if (rtrim($pathinfo, '/') === '/contribution') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contribution_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contribution_index');
                    }

                    return array (  '_controller' => 'AccueilBundle\\Controller\\ContributionController::indexAction',  '_route' => 'contribution_index',);
                }
                not_contribution_index:

                // contribution_show
                if (preg_match('#^/contribution/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contribution_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contribution_show')), array (  '_controller' => 'AccueilBundle\\Controller\\ContributionController::showAction',));
                }
                not_contribution_show:

                // contribution_new
                if ($pathinfo === '/contribution/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contribution_new;
                    }

                    return array (  '_controller' => 'AccueilBundle\\Controller\\ContributionController::newAction',  '_route' => 'contribution_new',);
                }
                not_contribution_new:

                // contribution_edit
                if (preg_match('#^/contribution/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contribution_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contribution_edit')), array (  '_controller' => 'AccueilBundle\\Controller\\ContributionController::editAction',));
                }
                not_contribution_edit:

                // contribution_delete
                if (preg_match('#^/contribution/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_contribution_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contribution_delete')), array (  '_controller' => 'AccueilBundle\\Controller\\ContributionController::deleteAction',));
                }
                not_contribution_delete:

            }

        }

        // accueil_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accueil_homepage');
            }

            return array (  '_controller' => 'AccueilBundle\\Controller\\DefaultController::indexAction',  '_route' => 'accueil_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
