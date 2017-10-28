<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Employee;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class EmployeeController extends Controller
{
    /**
     * @Route("/employee/tree", name="employee_tree")
     */
    public function indexAction()
    {
        return $this->render('employee/index.html.twig');
    }

    /**
     * @Route("/employee/source", name="employee_source")
     * @Method({"GET"})
     */
    public function sourceAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository(Employee::class);
        $employee = $repository->childrenHierarchy();

        return $this->json($employee);
    }
}