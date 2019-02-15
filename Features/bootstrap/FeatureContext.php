<?php

use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{
    /**
     * @Then /^I wait for the suggestion box to appear$/
     */
    public function iWaitForTheSuggestionBoxToAppear()
    {
        $this->getSession()->wait(5000, "$('.suggestions-results').children().length > 0");
    }

    /**
     * @Given I wait for :arg1 seconds
     */
    public function iWaitForSeconds($arg1)
    {
        sleep($arg1);
    }	
}
