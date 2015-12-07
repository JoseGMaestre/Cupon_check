<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
	public function ayudaAction() {
		return $this->render('OfertaBundle:Default:ayuda.html.twig');
		//return new Response(' este es Ayuda');
	}
        
        public function portadaAction()
        {
            
            
        }
        
        
}
