<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('verify that I can access the Admin Login page');

$I->goToTheAdminLoginPage();
$I->shouldBeOnTheAdminLoginPage();
$I->see('Welcome, please sign in');