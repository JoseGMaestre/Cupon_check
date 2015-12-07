<?php
// src/Cupon/OfertaBundle/DataFixtures/ORM/Ofertas.php

namespace Cupon\OfertaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\OfertaBundle\Entity\Oferta;

class Ofertas implements FixtureInterface {

    public function load(ObjectManager $manager) {
        for ($i = 0; $i < 400; $i++) {
            $entidad = new Oferta();
            $entidad->setNombre('Oferta');
            $entidad->setDescripcion('Es un buen producto');
            $entidad->setDescripcion('condiciones excelentes');
            $entidad->setRutaFoto('/foto/prod_xx.jpg');
            $entidad->setPrecio(rand(1, 100));

            $entidad->setFechaPublicacion(new \DateTime());
            $entidad->setFechaExpiracion(new \DateTime());
            $entidad->setCompras(rand(1, 400));
            $entidad->setUmbral(rand(400, 500));
            $entidad->setRevisada(rand(0, 1));
            $entidad->setCiudad('ccs');
            $entidad->setTienda('local');

            $manager->persist($entidad);
        }

        $manager->flush();
    }

}
