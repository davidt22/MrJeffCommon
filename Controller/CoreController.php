<?php

namespace MrJeff\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
    const FLASH_TYPE_ERROR = 'error';
    const FLASH_TYPE_SUCCESS = 'success';
    const FLASH_TYPE_WARNING = 'warning';

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function redirectToReferer(Request $request)
    {
        return $this->redirect($request->headers->get('referer'));
    }

    /**
     * @param $type
     * @param $message
     */
    public function addFlashMessage($type, $message)
    {
        $this->get('session')->getFlashBag()->add($type, $message);
    }

}