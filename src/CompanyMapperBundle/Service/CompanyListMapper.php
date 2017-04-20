<?php

namespace CompanyMapperBundle\Service;

use CompanyMapperBundle\Entity\CompanyListFile;
use Liuggio\ExcelBundle\Factory as phpExcel;
use Doctrine\ORM\EntityManager;
use CompanyMapperBundle\Entity\Company;

class CompanyListMapper
{
    /**
     * @var phpExcel
     */
    private $phpExcel;

    /**
     * File upload directory.
     *
     * @var string
     */
    private $targetDir;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * CompanyListUploaderListener constructor.
     * @param phpExcel $phpExcel
     */
    public function __construct(phpExcel $phpExcel, $targetDir, EntityManager $entityManager)
    {
        $this->phpExcel = $phpExcel;
        $this->targetDir = $targetDir;
        $this->em = $entityManager;
    }

    /**
     * @param $entity
     * @return array|bool
     */
    public function getMappedData($entity)
    {
        if (!$entity instanceof CompanyListFile) {
            return false;
        }

        $companyData = $this->getExcelData($this->targetDir .'/'. $entity->getCompanyList());
        return $this->mapCompanyData($companyData);
    }

    /**
     * @param $fileName
     * @return array
     */
    public function getExcelData($fileName)
    {
        // check if file is not exists.
        if (!file_exists($fileName)) {
            return array();
        }

        $excelData = array();

        // read the excel file using phpexcel library.
        $phpExcelObject = $this->phpExcel->createPHPExcelObject($fileName);
        foreach ($phpExcelObject ->getWorksheetIterator() as $worksheet) {
            foreach ($worksheet->getRowIterator() as $index => $row) {
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(false);
                foreach ($cellIterator as $cell) {
                    if (!is_null($cell)) {
                        $excelData[$index][] = $cell->getCalculatedValue();
                    }
                }
            }
        }

        return $excelData;
    }

    /**
     * @param $companyData
     */
    public function mapCompanyData($companyData)
    {
        $mappedData = array();

        if(!empty($companyData)){
            foreach($companyData as $index => $row){
                foreach($row as $key => $column){
                    if($this->isEmail($column)){
                        $mappedData['email'][$index] = $column;
                    } elseif($this->isUrl($column)){
                        $mappedData['website'][$index] = $column;
                    } elseif($this->isPhoneNumber($column)){
                        $mappedData['phone'][$index] = $column;
                    } elseif($this->isHumanName($column) == 0){
                        $mappedData['name'][$index] = $column;
                    } elseif($this->isHumanName($column) != 0 && $this->isAlphaNumaric($column)){
                        $mappedData['company'][$index] = $column;
                    } else {
                        $mappedData['unknown'][$index] = $column;
                    }
                }
            }
        }

        return $mappedData;
    }

    /**
     * @param $value
     * @return bool
     */
    public function isEmail($value){
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * @param $value
     * @return bool
     */
    public function isUrl($value){
        if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$value)) {
            return true;
        }
        return false;
    }

    /**
     * @param $value
     * @return bool
     */
    public function isPhoneNumber($value){
        if (is_numeric(str_replace(" ", "", $value))) {
            return true;
        }
        return false;
    }

    /**
     * @param $value
     * @return bool
     */
    public function isAlphaNumaric($value){
        if (ctype_alnum($value)) {
            return true;
        }
        return false;
    }

    /**
     * @param $value
     * @return int
     */
    public function isHumanName($value) {
        $nameScore = 0;
        //If name < 4 score + '3'
        $chars_count = strlen($value);
        $consonants = preg_replace('![^BCDFGHJKLMNPQRSTVWXZ]!i','',$value);
        $consonant_count = strlen($consonants);
        $vowels = preg_replace('![^AEIOUY]!i','',$value);
        $vowel_count = strlen($vowels);
        //We're expecting first and last name.
        if ($chars_count < 4){
            $nameScore = $nameScore + 3;
        }

        //if name > 4 and no spaces score + '4'
        if (($chars_count > 4)&& (!preg_match('![ ]!',$value))){
            $nameScore = $nameScore + 4;
        }

        if (($chars_count > 4)&&(($consonant_count==0)||($vowel_count==0))){
            $nameScore = $nameScore + 5;
        }

        //if name > 4 and vowel to consonant ratio < 1/8 score + '5'
        if (($consonant_count > 0) && ($vowel_count > 0) && ($chars_count > 4) && ($vowel_count/$consonant_count < 1/8)){
            $nameScore = $nameScore + 5;
        }
        //Needs at least 1 letter.
        if (!preg_match('![A-Za-z]!',$value)){
            $nameScore = $nameScore + 10;
        }

        return $nameScore;
    }

    /**
     * @param $data
     * @return bool
     */
    public function saveCompanyData($data) {
        if(!empty($data) && $this->isValidJSON($data)){
            $dataArray = json_decode($data, true);

            foreach (range(0, count($dataArray['company'])-1) as $index) {
                // TODO: Validate fields before setting the entity values.
                $company = new Company();
                $company->setCompanyName($dataArray['company'][$index]);
                $company->setName($dataArray['name'][$index]);
                $company->setWebsite($dataArray['website'][$index]);
                $company->setEmail($dataArray['email'][$index]);
                $company->setPhone($dataArray['phone'][$index]);

                $this->em->persist($company);
            }
            $this->em->flush();

            return true;
        }
        return false;
    }

    /**
     * @param $json
     * @return bool
     */
    public function isValidJSON($json) {
        json_decode($json);
        return json_last_error() == JSON_ERROR_NONE;
    }
}