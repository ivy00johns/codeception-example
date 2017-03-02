# Welcome to the example Codeception based Test Suite!

## Prereqs
* Codeception is a PHP based application installed via Composer so you will need to have Composer installed in order to run the following. Please visit the [Composer](https://getcomposer.org/) homepage for installation instructions.

* The Suite needs to be configured in the `.suite.yml` file in the `/tests/` directory depending on the Test Suite that you are working on: `tests/XXXXXXX.suite.yml`


### acceptance.suite.yml
    ...
    url: "http://127.0.0.1:32769"
    ...
    
    
    
### Running the Tests
* Once you have Composer installed you will need to install the Project Dependencies. Open a Terminal Window. CD to the Project Directory and run the following command:

    ```
    cd [LOCATION_OF_GITHUB_REPO]
    composer install
    ```
    
* Next make sure Selenium WebDriver/ChromeDriver are up-to-date using the following command:
    ```
    webdriver-manager update
    ```
    
* Next you will need to start a WebDriver server so we can run the tests. Start the server using the following command:
    ```
    webdriver-manager start
    ```
    
* Open a New Terminal Window.


* Finally to kick off the entire E2E Test Suite run the following command: