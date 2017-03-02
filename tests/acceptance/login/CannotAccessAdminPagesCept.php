<?php
// @env firefox
// @env chrome
// @env phantom
$I = new AcceptanceTester($scenario);

$I->wantTo('make sure you cannot access Admin pages when NOT logged in');
$I->goToTheAdminLoginPage();

$I->goToRandomAdminPage();
$I->shouldBeOnTheAdminLoginPage();

$I->goToRandomAdminPage();
$I->shouldBeOnTheAdminLoginPage();

$I->goToRandomAdminPage();
$I->shouldBeOnTheAdminLoginPage();

$I->goToRandomAdminPage();
$I->shouldBeOnTheAdminLoginPage();

$I->goToRandomAdminPage();
$I->shouldBeOnTheAdminLoginPage();