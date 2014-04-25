<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;    


//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
     

    /**
     * @When /^I search for "([^"]*)"$/
     */
    public function iSearchFor($arg1)
    {
        $this->fillField('Search Drupal.org', $arg1);
        $this->pressButton('Search');
        //$this->wait(3000);   // wait 2sec
    }

    /**
     * @Then /^I should see "([^"]*)"$/
     */
   // public function iShouldSee($val)
    //{
     //   $this->assertPageContainsText('Sorry, 180.211.112.67 has been banned',$val);
  //  }


}
