<?php

namespace App\Controller;

use App\Entity\View3D;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

/**
 * Class View3DCrudController
 *
 * @package App\Controller
 */
class View3DCrudController extends AbstractCrudController
{
    /**
     * @return string
     */
    public static function getEntityFqcn(): string
    {
        return View3D::class;
    }

    /**
     * @param string $pageName
     * @return iterable
     */
    public function configureFields(string $pageName): iterable
    {
        return [
            DateField::new('date'),
            TextField::new('player'),
            TextField::new('agent'),
            TextField::new('currency'),
            NumberField::new('bet'),
            NumberField::new('win'),
            NumberField::new('rake'),
            NumberField::new('tournament'),
            NumberField::new('net'),
            NumberField::new('fin'),
            TextField::new('aamsTicket'),
            TextField::new('aamsTable'),
        ];
    }

    /**
     * @param Actions $actions
     * @return Actions
     */
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::NEW)
            ->remove(Crud::PAGE_INDEX, Action::EDIT)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            ->remove(Crud::PAGE_DETAIL, Action::EDIT)
            ->remove(Crud::PAGE_DETAIL, Action::DELETE)
            ;
    }

    /**
     * @param Filters $filters
     * @return Filters
     */
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('date')
            ->add('player')
            ->add('agent')
            ->add('currency')
            ->add('bet')
            ->add('win')
            ->add('rake')
            ->add('tournament')
            ->add('net')
            ->add('fin')
            ->add('aamsTicket')
            ->add('aamsTable')
            ;
    }


}