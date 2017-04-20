<?php

namespace CompanyMapperBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use CompanyMapperBundle\Entity\CompanyListFile;
use CompanyMapperBundle\Form\CompanyListType;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;

class CompanyController extends Controller
{
    /**
     * @Route("/company", name="company_mapper")
     */
    public function indexAction(Request $request)
    {
        $companyList = new CompanyListFile();
        $form = $this->createForm(CompanyListType::class, $companyList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $companyList->getCompanyList();
            try{
                $fileName = $this->get('company_list_uploader_service')->upload($file);
                $companyList->setCompanyList($fileName);

                $mappedData = $this->get('company_list_mapper_service')->getMappedData($companyList);

                return $this->render('CompanyMapperBundle:CompanyList:mapping.html.twig', array(
                    'mappedData' => $mappedData
                ));
            } catch (UploadException $e){
                // @TODO Handle the exception with pretty error message in the frontend view.
            }
        }

        return $this->render('CompanyMapperBundle:CompanyList:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/company/save/", name="company_save")
     */
    public function saveAction(Request $request)
    {
        $status = 'failed';

        if($request->isXmlHttpRequest()) {
            $response = $this->get('company_list_mapper_service')->saveCompanyData($request->request->get('data'));

            if($response){
                $status = 'success';
            }
        }

        return new JsonResponse(array(
            'status' => $status,
            'url' => $url = $this->generateUrl('company_mapper')
        ));
    }
}
