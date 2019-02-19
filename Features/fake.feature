Feature: File for running tests

@javascript
Scenario: Verify the real time arrivals page contains a map
	Given I am on "/"
        And I fill in "arrivalsAddress1" with "3504 sw webster st"
        And I click on the smartsearch drop option "3504 SW Webster St, Seattle, WA 98126"
        When I click the element with xpath "//button[@data-role='real-time-arrivals']"
        And I wait for the url to contain "real-time"
        Then I should see a "#block-mapblock" element