This is a sample project of getting appium to work with behat.  This project assumes you're running a mac with xcode and android studio installed.  And that you have emulators for "iPhone 7" in xcode, and an avd in Android Studio named "Pixel."

composer update

composer install

Download Chromedriver

Download Appium

Open Appium

Put path of chromedriver in appium advanced settings

Start Appium

./vendor/bin/behat

./vendor/bin/behat -p android