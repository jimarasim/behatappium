Feature: File for running tests

@javascript
Scenario: Go to a web page
	Given I am on "/"
        And I fill in "arrivalsAddress1" with "3504 sw webster st"
	And I wait for "5" seconds
