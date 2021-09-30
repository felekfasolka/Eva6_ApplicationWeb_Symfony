<?php

namespace App\Controller\Admin;

use App\Entity\Agent;
use App\Entity\Contact;
use App\Entity\Mission;
use App\Entity\MissionStatus;
use App\Entity\MissionType;
use App\Entity\SafeHouse;
use App\Entity\Speciality;
use App\Entity\Target;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(MissionCrudController::class)->generateUrl();

        return $this->redirect($url);
        //return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('MissionApp');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Missions', 'fab fa-old-republic', Mission::class);
        yield MenuItem::linkToCrud('Mission types', 'fab fa-old-republic', MissionType::class);
        yield MenuItem::linkToCrud('Mission status', 'fab fa-old-republic', MissionStatus::class);
        yield MenuItem::linkToCrud('Agents Specialities', 'fab fa-old-republic', Speciality::class);
        yield MenuItem::linkToCrud('Agents', 'fab fa-old-republic', Agent::class);
        yield MenuItem::linkToCrud('Targets', 'fab fa-old-republic', Target::class);
        yield MenuItem::linkToCrud('Contacts', 'fab fa-old-republic', Contact::class);
        yield MenuItem::linkToCrud('Safe Houses', 'fab fa-old-republic', SafeHouse::class);
        // yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
