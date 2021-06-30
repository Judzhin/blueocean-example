<?php

namespace App\Controller;

use App\Controller\Admin\RequestCrudController;
use App\Entity\View3D;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DashboardController
 * @package App\Controller
 */
class DashboardController extends AbstractDashboardController
{
    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        return $this->redirect($this->get(AdminUrlGenerator::class)
            ->setController(View3DCrudController::class)
            ->setAction(Action::INDEX)
            ->generateUrl());
    }

    /**
     * @return Dashboard
     */
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('BlueOcean');
    }

    /**
     * @return iterable
     */
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('SOAP Client', 'fa fa-eye', 'crcind');
        yield MenuItem::linkToCrud('View3D', 'fa fa-eye', View3D::class);
    }
}
