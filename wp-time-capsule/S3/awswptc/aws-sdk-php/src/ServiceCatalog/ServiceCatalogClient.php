<?php
namespace AwsWPTC\ServiceCatalog;

use AwsWPTC\AwsClient;

/**
 * This client is used to interact with the **AWS Service Catalog** service.
 * @method \AwsWPTC\Result acceptPortfolioShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise acceptPortfolioShareAsync(array $args = [])
 * @method \AwsWPTC\Result associateBudgetWithResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateBudgetWithResourceAsync(array $args = [])
 * @method \AwsWPTC\Result associatePrincipalWithPortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associatePrincipalWithPortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result associateProductWithPortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateProductWithPortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result associateServiceActionWithProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateServiceActionWithProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result associateTagOptionWithResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise associateTagOptionWithResourceAsync(array $args = [])
 * @method \AwsWPTC\Result batchAssociateServiceActionWithProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise batchAssociateServiceActionWithProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result batchDisassociateServiceActionFromProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise batchDisassociateServiceActionFromProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result copyProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise copyProductAsync(array $args = [])
 * @method \AwsWPTC\Result createConstraint(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createConstraintAsync(array $args = [])
 * @method \AwsWPTC\Result createPortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createPortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result createPortfolioShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createPortfolioShareAsync(array $args = [])
 * @method \AwsWPTC\Result createProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createProductAsync(array $args = [])
 * @method \AwsWPTC\Result createProvisionedProductPlan(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createProvisionedProductPlanAsync(array $args = [])
 * @method \AwsWPTC\Result createProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result createServiceAction(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createServiceActionAsync(array $args = [])
 * @method \AwsWPTC\Result createTagOption(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createTagOptionAsync(array $args = [])
 * @method \AwsWPTC\Result deleteConstraint(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteConstraintAsync(array $args = [])
 * @method \AwsWPTC\Result deletePortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deletePortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result deletePortfolioShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deletePortfolioShareAsync(array $args = [])
 * @method \AwsWPTC\Result deleteProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteProductAsync(array $args = [])
 * @method \AwsWPTC\Result deleteProvisionedProductPlan(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteProvisionedProductPlanAsync(array $args = [])
 * @method \AwsWPTC\Result deleteProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result deleteServiceAction(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteServiceActionAsync(array $args = [])
 * @method \AwsWPTC\Result deleteTagOption(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteTagOptionAsync(array $args = [])
 * @method \AwsWPTC\Result describeConstraint(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeConstraintAsync(array $args = [])
 * @method \AwsWPTC\Result describeCopyProductStatus(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeCopyProductStatusAsync(array $args = [])
 * @method \AwsWPTC\Result describePortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describePortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result describePortfolioShareStatus(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describePortfolioShareStatusAsync(array $args = [])
 * @method \AwsWPTC\Result describePortfolioShares(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describePortfolioSharesAsync(array $args = [])
 * @method \AwsWPTC\Result describeProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeProductAsync(array $args = [])
 * @method \AwsWPTC\Result describeProductAsAdmin(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeProductAsAdminAsync(array $args = [])
 * @method \AwsWPTC\Result describeProductView(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeProductViewAsync(array $args = [])
 * @method \AwsWPTC\Result describeProvisionedProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeProvisionedProductAsync(array $args = [])
 * @method \AwsWPTC\Result describeProvisionedProductPlan(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeProvisionedProductPlanAsync(array $args = [])
 * @method \AwsWPTC\Result describeProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result describeProvisioningParameters(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeProvisioningParametersAsync(array $args = [])
 * @method \AwsWPTC\Result describeRecord(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeRecordAsync(array $args = [])
 * @method \AwsWPTC\Result describeServiceAction(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeServiceActionAsync(array $args = [])
 * @method \AwsWPTC\Result describeServiceActionExecutionParameters(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeServiceActionExecutionParametersAsync(array $args = [])
 * @method \AwsWPTC\Result describeTagOption(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise describeTagOptionAsync(array $args = [])
 * @method \AwsWPTC\Result disableAWSOrganizationsAccess(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disableAWSOrganizationsAccessAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateBudgetFromResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateBudgetFromResourceAsync(array $args = [])
 * @method \AwsWPTC\Result disassociatePrincipalFromPortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociatePrincipalFromPortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateProductFromPortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateProductFromPortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateServiceActionFromProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateServiceActionFromProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result disassociateTagOptionFromResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise disassociateTagOptionFromResourceAsync(array $args = [])
 * @method \AwsWPTC\Result enableAWSOrganizationsAccess(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise enableAWSOrganizationsAccessAsync(array $args = [])
 * @method \AwsWPTC\Result executeProvisionedProductPlan(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise executeProvisionedProductPlanAsync(array $args = [])
 * @method \AwsWPTC\Result executeProvisionedProductServiceAction(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise executeProvisionedProductServiceActionAsync(array $args = [])
 * @method \AwsWPTC\Result getAWSOrganizationsAccessStatus(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getAWSOrganizationsAccessStatusAsync(array $args = [])
 * @method \AwsWPTC\Result getProvisionedProductOutputs(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getProvisionedProductOutputsAsync(array $args = [])
 * @method \AwsWPTC\Result importAsProvisionedProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise importAsProvisionedProductAsync(array $args = [])
 * @method \AwsWPTC\Result listAcceptedPortfolioShares(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listAcceptedPortfolioSharesAsync(array $args = [])
 * @method \AwsWPTC\Result listBudgetsForResource(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listBudgetsForResourceAsync(array $args = [])
 * @method \AwsWPTC\Result listConstraintsForPortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listConstraintsForPortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result listLaunchPaths(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listLaunchPathsAsync(array $args = [])
 * @method \AwsWPTC\Result listOrganizationPortfolioAccess(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listOrganizationPortfolioAccessAsync(array $args = [])
 * @method \AwsWPTC\Result listPortfolioAccess(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPortfolioAccessAsync(array $args = [])
 * @method \AwsWPTC\Result listPortfolios(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPortfoliosAsync(array $args = [])
 * @method \AwsWPTC\Result listPortfoliosForProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPortfoliosForProductAsync(array $args = [])
 * @method \AwsWPTC\Result listPrincipalsForPortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPrincipalsForPortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result listProvisionedProductPlans(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listProvisionedProductPlansAsync(array $args = [])
 * @method \AwsWPTC\Result listProvisioningArtifacts(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listProvisioningArtifactsAsync(array $args = [])
 * @method \AwsWPTC\Result listProvisioningArtifactsForServiceAction(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listProvisioningArtifactsForServiceActionAsync(array $args = [])
 * @method \AwsWPTC\Result listRecordHistory(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listRecordHistoryAsync(array $args = [])
 * @method \AwsWPTC\Result listResourcesForTagOption(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listResourcesForTagOptionAsync(array $args = [])
 * @method \AwsWPTC\Result listServiceActions(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listServiceActionsAsync(array $args = [])
 * @method \AwsWPTC\Result listServiceActionsForProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listServiceActionsForProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result listStackInstancesForProvisionedProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listStackInstancesForProvisionedProductAsync(array $args = [])
 * @method \AwsWPTC\Result listTagOptions(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listTagOptionsAsync(array $args = [])
 * @method \AwsWPTC\Result provisionProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise provisionProductAsync(array $args = [])
 * @method \AwsWPTC\Result rejectPortfolioShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise rejectPortfolioShareAsync(array $args = [])
 * @method \AwsWPTC\Result scanProvisionedProducts(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise scanProvisionedProductsAsync(array $args = [])
 * @method \AwsWPTC\Result searchProducts(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise searchProductsAsync(array $args = [])
 * @method \AwsWPTC\Result searchProductsAsAdmin(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise searchProductsAsAdminAsync(array $args = [])
 * @method \AwsWPTC\Result searchProvisionedProducts(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise searchProvisionedProductsAsync(array $args = [])
 * @method \AwsWPTC\Result terminateProvisionedProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise terminateProvisionedProductAsync(array $args = [])
 * @method \AwsWPTC\Result updateConstraint(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateConstraintAsync(array $args = [])
 * @method \AwsWPTC\Result updatePortfolio(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updatePortfolioAsync(array $args = [])
 * @method \AwsWPTC\Result updatePortfolioShare(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updatePortfolioShareAsync(array $args = [])
 * @method \AwsWPTC\Result updateProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateProductAsync(array $args = [])
 * @method \AwsWPTC\Result updateProvisionedProduct(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateProvisionedProductAsync(array $args = [])
 * @method \AwsWPTC\Result updateProvisionedProductProperties(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateProvisionedProductPropertiesAsync(array $args = [])
 * @method \AwsWPTC\Result updateProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateProvisioningArtifactAsync(array $args = [])
 * @method \AwsWPTC\Result updateServiceAction(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateServiceActionAsync(array $args = [])
 * @method \AwsWPTC\Result updateTagOption(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateTagOptionAsync(array $args = [])
 */
class ServiceCatalogClient extends AwsClient {}
