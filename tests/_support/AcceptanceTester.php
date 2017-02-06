<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */
    public function goToTheAdminLoginPage() {
        $I = $this;
        $I->amOnPage('/admin/admin/');
    }

    public function goToTheAdminLogoutPage() {
        $I = $this;
        $I->amOnPage('/admin/admin/auth/logout/');
    }

    public function goToRandomAdminPage() {
        $I = $this;

        $admin_url_list = array(
            "/admin/admin/dashboard/",
            "/admin/sales/order/",
            "/admin/sales/invoice/",
            "/admin/sales/shipment/",
            "/admin/sales/creditmemo/",
            "/admin/paypal/billing_agreement/",
            "/admin/sales/transactions/",
            "/admin/catalog/product/",
            "/admin/catalog/category/",
            "/admin/customer/index/",
            "/admin/customer/online/",
            "/admin/catalog_rule/promo_catalog/",
            "/admin/sales_rule/promo_quote/",
            "/admin/admin/email_template/",
            "/admin/newsletter/template/",
            "/admin/newsletter/queue/",
            "/admin/newsletter/subscriber/",
            "/admin/admin/url_rewrite/index/",
            "/admin/search/term/index/",
            "/admin/search/synonyms/index/",
            "/admin/admin/sitemap/",
            "/admin/review/product/index/",
            "/admin/cms/page/",
            "/admin/cms/block/",
            "/admin/admin/widget_instance/",
            "/admin/theme/design_config/",
            "/admin/admin/system_design_theme/",
            "/admin/admin/system_design/",
            "/admin/reports/report_shopcart/product/",
            "/admin/search/term/report/",
            "/admin/reports/report_shopcart/abandoned/",
            "/admin/newsletter/problem/",
            "/admin/reports/report_review/customer/",
            "/admin/reports/report_review/product/",
            "/admin/reports/report_sales/sales/",
            "/admin/reports/report_sales/tax/",
            "/admin/reports/report_sales/invoiced/",
            "/admin/reports/report_sales/shipping/",
            "/admin/reports/report_sales/refunded/",
            "/admin/reports/report_sales/coupons/",
            "/admin/paypal/paypal_reports/",
            "/admin/braintree/report/",
            "/admin/reports/report_customer/totals/",
            "/admin/reports/report_customer/orders/",
            "/admin/reports/report_customer/accounts/",
            "/admin/reports/report_product/viewed/",
            "/admin/reports/report_sales/bestsellers/",
            "/admin/reports/report_product/lowstock/",
            "/admin/reports/report_product/sold/",
            "/admin/reports/report_product/downloads/",
            "/admin/reports/report_statistics/",
            "/admin/admin/system_store/",
            "/admin/admin/system_config/",
            "/admin/checkout/agreement/",
            "/admin/sales/order_status/",
            "/admin/tax/rule/",
            "/admin/tax/rate/",
            "/admin/admin/system_currency/",
            "/admin/admin/system_currencysymbol/",
            "/admin/catalog/product_attribute/",
            "/admin/catalog/product_set/",
            "/admin/review/rating/",
            "/admin/customer/group/",
            "/admin/admin/import/",
            "/admin/admin/export/",
            "/admin/tax/rate/importExport/",
            "/admin/admin/history/",
            "/admin/admin/integration/",
            "/admin/admin/cache/",
            "/admin/backup/index/",
            "/admin/indexer/indexer/list/",
            "/admin/admin/user/",
            "/admin/admin/locks/",
            "/admin/admin/user_role/",
            "/admin/admin/notification/",
            "/admin/admin/system_variable/",
            "/admin/admin/crypt_key/"
        );

        $random_admin_url = array_rand($admin_url_list, 1);

        $I->amOnPage($admin_url_list[$random_admin_url]);

        return $admin_url_list[$random_admin_url];
    }

    public function goToTheAdminDashboardPage() {
        $I = $this;
        $I->amOnPage('/admin/admin/dashboard/');
    }

    public function goToTheAdminSalesOrdersPage() {
        $I = $this;
        $I->amOnPage('/admin/sales/order/');
    }

    public function goToTheAdminProductsCatalogPage() {
        $I = $this;
        $I->amOnPage('/admin/catalog/product/');
    }

    public function goToTheAdminCustomersAllCustomersPage() {
        $I = $this;
        $I->amOnPage('/admin/customer/index/');
    }

    public function goToTheAdminMarketingCatalogPriceRule() {
        $I = $this;
        $I->amOnPage('/admin/catalog_rule/promo_catalog/');
    }

    public function shouldBeOnTheAdminLoginPage() {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/');
    }

    public function shouldBeOnTheAdminDashboardPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/dashboard/');
    }

    public function shouldBeOnTheForgotYourPasswordPage() {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/auth/forgotpassword/');
    }

    // Sales
    public function shouldBeOnTheAdminSalesOrdersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/sales/order/');
    }

    public function shouldBeOnTheAdminSalesInvoicesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/sales/invoice/');
    }

    public function shouldBeOnTheAdminSalesShipmentsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/sales/shipment/');
    }

    public function shouldBeOnTheAdminSalesCreditMemosPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/sales/creditmemo/');
    }

    public function shouldBeOnTheAdminSalesBillingAgreementsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/paypal/billing_agreement/');
    }

    public function shouldBeOnTheAdminSalesTransactionsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/sales/transactions/');
    }

    // Products
    public function shouldBeOnTheAdminProductsCatalogPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/catalog/product/');
    }

    public function shouldBeOnTheAdminProductsCategoriesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/catalog/category/');
    }

    // Customers
    public function shouldBeOnTheAdminCustomersAllCustomersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/customer/index/');
    }

    public function shouldBeOnTheAdminCustomersNowOnlinePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/customer/online/');
    }

    // Marketing
    public function shouldBeOnTheAdminMarketingCatalogPriceRulePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/catalog_rule/promo_catalog/');
    }

    public function shouldBeOnTheAdminMarketingCartPriceRulePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/sales_rule/promo_quote/');
    }

    public function shouldBeOnTheAdminMarketingEmailTemplatesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/email_template/');
    }

    public function shouldBeOnTheAdminMarketingNewsletterTemplatePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/newsletter/template/');
    }

    public function shouldBeOnTheAdminMarketingNewsletterQueuePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/newsletter/queue/');
    }

    public function shouldBeOnTheAdminMarketingNewsletterSubscribersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/newsletter/subscriber/');
    }

    public function shouldBeOnTheAdminMarketingURLRewritesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/url_rewrite/index/');
    }

    public function shouldBeOnTheAdminMarketingSearchTermsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/search/term/index/');
    }

    public function shouldBeOnTheAdminMarketingSearchSynonymsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/search/synonyms/index/');
    }

    public function shouldBeOnTheAdminMarketingSiteMapPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/sitemap/');
    }

    public function shouldBeOnTheAdminMarketingReviewsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/review/product/index/');
    }

    // Content
    public function shouldBeOnTheAdminContentPagesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/cms/page/');
    }

    public function shouldBeOnTheAdminContentBlocksPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/cms/block/');
    }

    public function shouldBeOnTheAdminContentWidgetsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/widget_instance/');
    }

    public function shouldBeOnTheAdminContentConfigurationPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/theme/design_config/');
    }

    public function shouldBeOnTheAdminContentThemesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/system_design_theme/');
    }

    public function shouldBeOnTheAdminContentSchedulePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/system_design/');
    }

    // Reports
    public function shouldBeOnTheAdminReportsProductsInCartPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_shopcart/product/');
    }

    public function shouldBeOnTheAdminReportsSearchTermsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/search/term/report/');
    }

    public function shouldBeOnTheAdminReportsAbandonedCartsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_shopcart/abandoned/');
    }

    public function shouldBeOnTheAdminReportsNewsletterProblemReportsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/newsletter/problem/');
    }

    public function shouldBeOnTheAdminReportsByCustomersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_review/customer/');
    }

    public function shouldBeOnTheAdminReportsByProductsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_review/product/');
    }

    public function shouldBeOnTheAdminReportsOrdersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_sales/sales/');
    }

    public function shouldBeOnTheAdminReportsTaxPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_sales/tax/');
    }

    public function shouldBeOnTheAdminReportsInvoicedPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_sales/invoiced/');
    }

    public function shouldBeOnTheAdminReportsShippingPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_sales/shipping/');
    }

    public function shouldBeOnTheAdminReportsRefundsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_sales/refunded/');
    }

    public function shouldBeOnTheAdminReportsCouponsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_sales/coupons/');
    }

    public function shouldBeOnTheAdminReportsPayPalSettlementPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/paypal/paypal_reports/');
    }

    public function shouldBeOnTheAdminReportsBraintreeSettlementPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/braintree/report/');
    }

    public function shouldBeOnTheAdminReportsOrderTotalPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_customer/totals/');
    }

    public function shouldBeOnTheAdminReportsOrderCountPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_customer/orders/');
    }

    public function shouldBeOnTheAdminReportsNewPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_customer/accounts/');
    }

    public function shouldBeOnTheAdminReportsViewsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_product/viewed/');
    }

    public function shouldBeOnTheAdminReportsBestsellersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_sales/bestsellers/');
    }

    public function shouldBeOnTheAdminReportsLowStockPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_product/lowstock/');
    }

    public function shouldBeOnTheAdminReportsOrderedPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_product/sold/');
    }

    public function shouldBeOnTheAdminReportsDownloadsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_product/downloads/');
    }

    public function shouldBeOnTheAdminReportRefreshStatisticsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/reports/report_statistics/');
    }

    // Stores
    public function shouldBeOnTheAdminStoresAllStoresPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/system_store/');
    }

    public function shouldBeOnTheAdminStoresConfigurationPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/system_config/');
    }

    public function shouldBeOnTheAdminStoresTermsAndConditionsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/checkout/agreement/');
    }

    public function shouldBeOnTheAdminStoresOrderStatusPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/sales/order_status/');
    }

    public function shouldBeOnTheAdminStoresTaxRulesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/tax/rule/');
    }

    public function shouldBeOnTheAdminStoresTaxZonesAndRatesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/tax/rate/');
    }

    public function shouldBeOnTheAdminStoresCurrencyRatesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/system_currency/');
    }

    public function shouldBeOnTheAdminStoresCurrencySymbolsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/system_currencysymbol/');
    }

    public function shouldBeOnTheAdminStoresProductPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/catalog/product_attribute/');
    }

    public function shouldBeOnTheAdminStoresAttributeSetPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/catalog/product_set/');
    }

    public function shouldBeOnTheAdminStoresRatingPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/review/rating/');
    }

    public function shouldBeOnTheAdminStoresCustomerGroupsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/customer/group/');
    }

    // System
    public function shouldBeOnTheAdminSystemImportPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/import/');
    }

    public function shouldBeOnTheAdminSystemExportPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/export/');
    }

    public function shouldBeOnTheAdminSystemImportExportTaxRatesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/tax/rate/importExport/');
    }

    public function shouldBeOnTheAdminSystemImportHistoryPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/history/');
    }

    public function shouldBeOnTheAdminSystemIntegrationsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/integration/');
    }

    public function shouldBeOnTheAdminSystemCacheManagementPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/cache/');
    }

    public function shouldBeOnTheAdminSystemBackupsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/backup/index/');
    }

    public function shouldBeOnTheAdminSystemIndexManagementPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/indexer/indexer/list/');
    }

    public function shouldBeOnTheAdminSystemWebSetupWizardPage()
    {
        $I = $this;
        $I->wait(1);
        $I->seeCurrentUrlEquals('/setup/#/home');
    }

    public function shouldBeOnTheAdminSystemAllUsersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/user/');
    }

    public function shouldBeOnTheAdminSystemLockedUsersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/locks/');
    }

    public function shouldBeOnTheAdminSystemUserRolesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/user_role/');
    }

    public function shouldBeOnTheAdminSystemNotificationsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/notification/');
    }

    public function shouldBeOnTheAdminSystemCustomVariablesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/system_variable/');
    }

    public function shouldBeOnTheAdminSystemManageEncryptionKeyPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/admin/crypt_key/');
    }

    public function shouldBeOnTheAdminFindPartnersAndExtensionsPage() {
        $I = $this;
        $I->seeCurrentUrlEquals('/admin/marketplace/index/');
    }

    // Login Helpers
    public function loginAsTheFollowingAdmin($username, $password) {
        $I = $this;
        $I->fillField('login[username]', $username);
        $I->fillField('login[password]', $password);
        $I->click('Sign in');
    }

    public function loginAsAnExistingAdmin() {
        $I = $this;
        $I->fillField('login[username]', 'admin');
        $I->fillField('login[password]', 'admin123');
        $I->click('Sign in');
    }
}
