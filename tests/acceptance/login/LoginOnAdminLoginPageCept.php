<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('verify that I can login via the Admin Login page');

$I->goToTheAdminLoginPage();
$I->loginAsAnExistingAdmin();
$I->shouldBeOnTheAdminDashboardPage();