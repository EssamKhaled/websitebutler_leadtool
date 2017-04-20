<?php

namespace Tests\CompanyMapperBundle\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CompanyListMapperTest extends WebTestCase
{

    /**
     * @var $companyListMapper
     */
    private $companyListMapper;

    public function setUp()
    {
        self::bootKernel();
        $this->companyListMapper = static::$kernel->getContainer()->get('company_list_mapper_service');
    }

    public function testIsEmail()
    {
        $isValidEmail = $this->companyListMapper->isEmail("foo@bar.com");
        $this->assertEquals(true, $isValidEmail);

        $isInValidEmail = $this->companyListMapper->isEmail("test");
        $this->assertEquals(false, $isInValidEmail);
    }

    public function testIsUrl()
    {
        $isValidUrl = $this->companyListMapper->isUrl("https://www.websitebutler.de");
        $this->assertEquals(true, $isValidUrl);

        $isInValidUrl = $this->companyListMapper->isUrl("websitebutler");
        $this->assertEquals(false, $isInValidUrl);
    }

    public function testIsPhoneNumber()
    {
        $isValidPhoneNumber = $this->companyListMapper->isPhoneNumber("030 7236 234");
        $this->assertEquals(true, $isValidPhoneNumber);

        $isInValidPhoneNumber = $this->companyListMapper->isPhoneNumber("test");
        $this->assertEquals(false, $isInValidPhoneNumber);
    }

    public function testIsAlphaNumaric()
    {
        $isValidAlphaNumaric = $this->companyListMapper->isAlphaNumaric("N26");
        $this->assertEquals(true, $isValidAlphaNumaric);

        $isInValidAlphaNumaric = $this->companyListMapper->isAlphaNumaric("*&sds");
        $this->assertEquals(false, $isInValidAlphaNumaric);
    }

    public function testIsHumanName()
    {
        $isValidHumanName = $this->companyListMapper->isHumanName("James Doo");
        $this->assertEquals(0, $isValidHumanName);

        $isInValidHumanName = $this->companyListMapper->isHumanName("Boo20");
        $this->assertEquals(4, $isInValidHumanName);
    }

    public function testIsValidJSON()
    {
        $isValidJSON = $this->companyListMapper->isValidJSON('{ "name":"John", "age":31, "city":"New York" }');
        $this->assertEquals(true, $isValidJSON);

        $isInValidJSON = $this->companyListMapper->isValidJSON('{json}');
        $this->assertEquals(false, $isInValidJSON);
    }

    public function testGetExcelData()
    {
        $actualData = $this->companyListMapper->getExcelData("tests/CompanyMapperBundle/Mock/test_data.xls");
        $expectedData = array('1' => array('N26', 'Daniel S Aegerter', 'https://n26.com', 'support@n26.com', '030 364286880'));

        $this->assertEquals($expectedData, $actualData);
    }

    public function testMapCompanyData()
    {
        $actualData = $this->companyListMapper->getExcelData("tests/CompanyMapperBundle/Mock/test_data.xls");
        $actualMappedData = $this->companyListMapper->mapCompanyData($actualData);

        $expectedData = array(
            'company' => array('1' => 'N26'),
            'name' => array('1' => 'Daniel S Aegerter'),
            'website' => array('1' => 'https://n26.com'),
            'email' => array('1' => 'support@n26.com'),
            'phone' => array('1' => '030 364286880'),
        );

        $this->assertEquals($expectedData, $actualMappedData);
    }
}
