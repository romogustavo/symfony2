<?php

namespace Ap\LoginBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UsuarioAdmin extends Admin {

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('apellido', 'text', array('label' => 'Post Title'))
                ->add('nombre')
//              Devuelve una Entidad
//            ->add('nombre', 'entity', array('class' => 'Ap\LoginBundle\Entity\Usuario'))
                ->add('numeroDocumento') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('nombre')
                ->add('apellido')
                ->add('sexo')
                ->add('tipoDocumento')
                ->add('numeroDocumento')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('id')
                ->add('nombre')
                ->add('apellido')
                ->add('sexo')
                ->add('tipoDocumento')
                ->add('numeroDocumento')
        ;
    }

}
