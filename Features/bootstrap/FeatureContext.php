<?php

use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{
    /**
     * @Given I wait for :arg1 seconds
     */
    public function iWaitForSeconds($arg1)
    {
        sleep($arg1);
    }	
    
    /**
     * @Given I click on the smartsearch drop option :arg1
     */
    public function iClickOnTheSmartsearchDropOption($arg1)
    {
        $xpathOfDropdownOption = "//div[@class='option_name' and contains(text(),'".$arg1."')]";
        $this->getSession()->wait(5000, $this->getSession()->getPage()->find('xpath',$xpathOfDropdownOption)===null?false:true);
        $this->getSession()->getPage()->find('xpath',$xpathOfDropdownOption)->click();
        $this->getSession()->wait(5000, $this->getSession()->getPage()->find('xpath',$xpathOfDropdownOption)===null?true:false);
    }
    
    /**
     * @Given I click the element with xpath :arg1
     */
    public function iClickTheElementWithXpath($arg1)
    {
        $this->getSession()->getPage()->find('xpath',$arg1)->click();
    }
    
     /**
     * @When I wait for the url to contain :arg1
     */
    public function iWaitForTheUrlToContain($arg1)
    {
        $this->getSession()->wait(5000,strpos($this->getSession()->getCurrentUrl(),$arg1));
    }
}
