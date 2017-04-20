<?php

namespace CompanyMapperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="company_list_file")
 */
class CompanyListFile
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the Company list as a Excel file.")
     * @Assert\File(mimeTypes={ "application/vnd.ms-office" })
     */
    private $companyList;


    public function getId()
    {
        return $this->id;
    }

    public function getCompanyList()
    {
        return $this->companyList;
    }

    public function setCompanyList($companyList)
    {
        $this->companyList = $companyList;

        return $this;
    }
}
