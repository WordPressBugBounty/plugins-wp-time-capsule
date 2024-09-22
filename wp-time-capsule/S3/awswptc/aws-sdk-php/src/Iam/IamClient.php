<?php
namespace AwsWPTC\Iam;

use AwsWPTC\AwsClient;

/**
 * This client is used to interact with the **AWS Identity and Access Management (AWS IAM)** service.
 *
 * @method \AwsWPTC\Result addClientIDToOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addClientIDToOpenIDConnectProviderAsync(array $args = [])
 * @method \AwsWPTC\Result addRoleToInstanceProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addRoleToInstanceProfileAsync(array $args = [])
 * @method \AwsWPTC\Result addUserToGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise addUserToGroupAsync(array $args = [])
 * @method \AwsWPTC\Result attachGroupPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise attachGroupPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result attachRolePolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise attachRolePolicyAsync(array $args = [])
 * @method \AwsWPTC\Result attachUserPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise attachUserPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result changePassword(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise changePasswordAsync(array $args = [])
 * @method \AwsWPTC\Result createAccessKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createAccessKeyAsync(array $args = [])
 * @method \AwsWPTC\Result createAccountAlias(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createAccountAliasAsync(array $args = [])
 * @method \AwsWPTC\Result createGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createGroupAsync(array $args = [])
 * @method \AwsWPTC\Result createInstanceProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createInstanceProfileAsync(array $args = [])
 * @method \AwsWPTC\Result createLoginProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createLoginProfileAsync(array $args = [])
 * @method \AwsWPTC\Result createOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createOpenIDConnectProviderAsync(array $args = [])
 * @method \AwsWPTC\Result createPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result createPolicyVersion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createPolicyVersionAsync(array $args = [])
 * @method \AwsWPTC\Result createRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createRoleAsync(array $args = [])
 * @method \AwsWPTC\Result createSAMLProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createSAMLProviderAsync(array $args = [])
 * @method \AwsWPTC\Result createServiceLinkedRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createServiceLinkedRoleAsync(array $args = [])
 * @method \AwsWPTC\Result createServiceSpecificCredential(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createServiceSpecificCredentialAsync(array $args = [])
 * @method \AwsWPTC\Result createUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createUserAsync(array $args = [])
 * @method \AwsWPTC\Result createVirtualMFADevice(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise createVirtualMFADeviceAsync(array $args = [])
 * @method \AwsWPTC\Result deactivateMFADevice(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deactivateMFADeviceAsync(array $args = [])
 * @method \AwsWPTC\Result deleteAccessKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteAccessKeyAsync(array $args = [])
 * @method \AwsWPTC\Result deleteAccountAlias(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteAccountAliasAsync(array $args = [])
 * @method \AwsWPTC\Result deleteAccountPasswordPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteAccountPasswordPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result deleteGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \AwsWPTC\Result deleteGroupPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteGroupPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result deleteInstanceProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteInstanceProfileAsync(array $args = [])
 * @method \AwsWPTC\Result deleteLoginProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteLoginProfileAsync(array $args = [])
 * @method \AwsWPTC\Result deleteOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteOpenIDConnectProviderAsync(array $args = [])
 * @method \AwsWPTC\Result deletePolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \AwsWPTC\Result deletePolicyVersion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deletePolicyVersionAsync(array $args = [])
 * @method \AwsWPTC\Result deleteRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteRoleAsync(array $args = [])
 * @method \AwsWPTC\Result deleteRolePermissionsBoundary(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteRolePermissionsBoundaryAsync(array $args = [])
 * @method \AwsWPTC\Result deleteRolePolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteRolePolicyAsync(array $args = [])
 * @method \AwsWPTC\Result deleteSAMLProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteSAMLProviderAsync(array $args = [])
 * @method \AwsWPTC\Result deleteSSHPublicKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteSSHPublicKeyAsync(array $args = [])
 * @method \AwsWPTC\Result deleteServerCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteServerCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result deleteServiceLinkedRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteServiceLinkedRoleAsync(array $args = [])
 * @method \AwsWPTC\Result deleteServiceSpecificCredential(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteServiceSpecificCredentialAsync(array $args = [])
 * @method \AwsWPTC\Result deleteSigningCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteSigningCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result deleteUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteUserAsync(array $args = [])
 * @method \AwsWPTC\Result deleteUserPermissionsBoundary(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteUserPermissionsBoundaryAsync(array $args = [])
 * @method \AwsWPTC\Result deleteUserPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteUserPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result deleteVirtualMFADevice(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise deleteVirtualMFADeviceAsync(array $args = [])
 * @method \AwsWPTC\Result detachGroupPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise detachGroupPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result detachRolePolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise detachRolePolicyAsync(array $args = [])
 * @method \AwsWPTC\Result detachUserPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise detachUserPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result enableMFADevice(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise enableMFADeviceAsync(array $args = [])
 * @method \AwsWPTC\Result generateCredentialReport(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise generateCredentialReportAsync(array $args = [])
 * @method \AwsWPTC\Result generateOrganizationsAccessReport(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise generateOrganizationsAccessReportAsync(array $args = [])
 * @method \AwsWPTC\Result generateServiceLastAccessedDetails(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise generateServiceLastAccessedDetailsAsync(array $args = [])
 * @method \AwsWPTC\Result getAccessKeyLastUsed(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getAccessKeyLastUsedAsync(array $args = [])
 * @method \AwsWPTC\Result getAccountAuthorizationDetails(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getAccountAuthorizationDetailsAsync(array $args = [])
 * @method \AwsWPTC\Result getAccountPasswordPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getAccountPasswordPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result getAccountSummary(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getAccountSummaryAsync(array $args = [])
 * @method \AwsWPTC\Result getContextKeysForCustomPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getContextKeysForCustomPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result getContextKeysForPrincipalPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getContextKeysForPrincipalPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result getCredentialReport(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getCredentialReportAsync(array $args = [])
 * @method \AwsWPTC\Result getGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getGroupAsync(array $args = [])
 * @method \AwsWPTC\Result getGroupPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getGroupPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result getInstanceProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getInstanceProfileAsync(array $args = [])
 * @method \AwsWPTC\Result getLoginProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getLoginProfileAsync(array $args = [])
 * @method \AwsWPTC\Result getOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getOpenIDConnectProviderAsync(array $args = [])
 * @method \AwsWPTC\Result getOrganizationsAccessReport(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getOrganizationsAccessReportAsync(array $args = [])
 * @method \AwsWPTC\Result getPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result getPolicyVersion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getPolicyVersionAsync(array $args = [])
 * @method \AwsWPTC\Result getRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getRoleAsync(array $args = [])
 * @method \AwsWPTC\Result getRolePolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getRolePolicyAsync(array $args = [])
 * @method \AwsWPTC\Result getSAMLProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getSAMLProviderAsync(array $args = [])
 * @method \AwsWPTC\Result getSSHPublicKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getSSHPublicKeyAsync(array $args = [])
 * @method \AwsWPTC\Result getServerCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getServerCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result getServiceLastAccessedDetails(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getServiceLastAccessedDetailsAsync(array $args = [])
 * @method \AwsWPTC\Result getServiceLastAccessedDetailsWithEntities(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getServiceLastAccessedDetailsWithEntitiesAsync(array $args = [])
 * @method \AwsWPTC\Result getServiceLinkedRoleDeletionStatus(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getServiceLinkedRoleDeletionStatusAsync(array $args = [])
 * @method \AwsWPTC\Result getUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getUserAsync(array $args = [])
 * @method \AwsWPTC\Result getUserPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise getUserPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result listAccessKeys(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listAccessKeysAsync(array $args = [])
 * @method \AwsWPTC\Result listAccountAliases(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listAccountAliasesAsync(array $args = [])
 * @method \AwsWPTC\Result listAttachedGroupPolicies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listAttachedGroupPoliciesAsync(array $args = [])
 * @method \AwsWPTC\Result listAttachedRolePolicies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listAttachedRolePoliciesAsync(array $args = [])
 * @method \AwsWPTC\Result listAttachedUserPolicies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listAttachedUserPoliciesAsync(array $args = [])
 * @method \AwsWPTC\Result listEntitiesForPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listEntitiesForPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result listGroupPolicies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listGroupPoliciesAsync(array $args = [])
 * @method \AwsWPTC\Result listGroups(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listGroupsAsync(array $args = [])
 * @method \AwsWPTC\Result listGroupsForUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listGroupsForUserAsync(array $args = [])
 * @method \AwsWPTC\Result listInstanceProfileTags(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listInstanceProfileTagsAsync(array $args = [])
 * @method \AwsWPTC\Result listInstanceProfiles(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listInstanceProfilesAsync(array $args = [])
 * @method \AwsWPTC\Result listInstanceProfilesForRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listInstanceProfilesForRoleAsync(array $args = [])
 * @method \AwsWPTC\Result listMFADeviceTags(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listMFADeviceTagsAsync(array $args = [])
 * @method \AwsWPTC\Result listMFADevices(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listMFADevicesAsync(array $args = [])
 * @method \AwsWPTC\Result listOpenIDConnectProviderTags(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listOpenIDConnectProviderTagsAsync(array $args = [])
 * @method \AwsWPTC\Result listOpenIDConnectProviders(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listOpenIDConnectProvidersAsync(array $args = [])
 * @method \AwsWPTC\Result listPolicies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \AwsWPTC\Result listPoliciesGrantingServiceAccess(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPoliciesGrantingServiceAccessAsync(array $args = [])
 * @method \AwsWPTC\Result listPolicyTags(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPolicyTagsAsync(array $args = [])
 * @method \AwsWPTC\Result listPolicyVersions(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listPolicyVersionsAsync(array $args = [])
 * @method \AwsWPTC\Result listRolePolicies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listRolePoliciesAsync(array $args = [])
 * @method \AwsWPTC\Result listRoleTags(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listRoleTagsAsync(array $args = [])
 * @method \AwsWPTC\Result listRoles(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listRolesAsync(array $args = [])
 * @method \AwsWPTC\Result listSAMLProviderTags(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listSAMLProviderTagsAsync(array $args = [])
 * @method \AwsWPTC\Result listSAMLProviders(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listSAMLProvidersAsync(array $args = [])
 * @method \AwsWPTC\Result listSSHPublicKeys(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listSSHPublicKeysAsync(array $args = [])
 * @method \AwsWPTC\Result listServerCertificateTags(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listServerCertificateTagsAsync(array $args = [])
 * @method \AwsWPTC\Result listServerCertificates(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listServerCertificatesAsync(array $args = [])
 * @method \AwsWPTC\Result listServiceSpecificCredentials(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listServiceSpecificCredentialsAsync(array $args = [])
 * @method \AwsWPTC\Result listSigningCertificates(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listSigningCertificatesAsync(array $args = [])
 * @method \AwsWPTC\Result listUserPolicies(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listUserPoliciesAsync(array $args = [])
 * @method \AwsWPTC\Result listUserTags(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listUserTagsAsync(array $args = [])
 * @method \AwsWPTC\Result listUsers(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listUsersAsync(array $args = [])
 * @method \AwsWPTC\Result listVirtualMFADevices(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise listVirtualMFADevicesAsync(array $args = [])
 * @method \AwsWPTC\Result putGroupPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise putGroupPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result putRolePermissionsBoundary(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise putRolePermissionsBoundaryAsync(array $args = [])
 * @method \AwsWPTC\Result putRolePolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise putRolePolicyAsync(array $args = [])
 * @method \AwsWPTC\Result putUserPermissionsBoundary(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise putUserPermissionsBoundaryAsync(array $args = [])
 * @method \AwsWPTC\Result putUserPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise putUserPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result removeClientIDFromOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise removeClientIDFromOpenIDConnectProviderAsync(array $args = [])
 * @method \AwsWPTC\Result removeRoleFromInstanceProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise removeRoleFromInstanceProfileAsync(array $args = [])
 * @method \AwsWPTC\Result removeUserFromGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise removeUserFromGroupAsync(array $args = [])
 * @method \AwsWPTC\Result resetServiceSpecificCredential(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise resetServiceSpecificCredentialAsync(array $args = [])
 * @method \AwsWPTC\Result resyncMFADevice(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise resyncMFADeviceAsync(array $args = [])
 * @method \AwsWPTC\Result setDefaultPolicyVersion(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise setDefaultPolicyVersionAsync(array $args = [])
 * @method \AwsWPTC\Result setSecurityTokenServicePreferences(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise setSecurityTokenServicePreferencesAsync(array $args = [])
 * @method \AwsWPTC\Result simulateCustomPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise simulateCustomPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result simulatePrincipalPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise simulatePrincipalPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result tagInstanceProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagInstanceProfileAsync(array $args = [])
 * @method \AwsWPTC\Result tagMFADevice(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagMFADeviceAsync(array $args = [])
 * @method \AwsWPTC\Result tagOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagOpenIDConnectProviderAsync(array $args = [])
 * @method \AwsWPTC\Result tagPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result tagRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagRoleAsync(array $args = [])
 * @method \AwsWPTC\Result tagSAMLProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagSAMLProviderAsync(array $args = [])
 * @method \AwsWPTC\Result tagServerCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagServerCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result tagUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise tagUserAsync(array $args = [])
 * @method \AwsWPTC\Result untagInstanceProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagInstanceProfileAsync(array $args = [])
 * @method \AwsWPTC\Result untagMFADevice(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagMFADeviceAsync(array $args = [])
 * @method \AwsWPTC\Result untagOpenIDConnectProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagOpenIDConnectProviderAsync(array $args = [])
 * @method \AwsWPTC\Result untagPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result untagRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagRoleAsync(array $args = [])
 * @method \AwsWPTC\Result untagSAMLProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagSAMLProviderAsync(array $args = [])
 * @method \AwsWPTC\Result untagServerCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagServerCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result untagUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise untagUserAsync(array $args = [])
 * @method \AwsWPTC\Result updateAccessKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateAccessKeyAsync(array $args = [])
 * @method \AwsWPTC\Result updateAccountPasswordPolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateAccountPasswordPolicyAsync(array $args = [])
 * @method \AwsWPTC\Result updateAssumeRolePolicy(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateAssumeRolePolicyAsync(array $args = [])
 * @method \AwsWPTC\Result updateGroup(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateGroupAsync(array $args = [])
 * @method \AwsWPTC\Result updateLoginProfile(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateLoginProfileAsync(array $args = [])
 * @method \AwsWPTC\Result updateOpenIDConnectProviderThumbprint(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateOpenIDConnectProviderThumbprintAsync(array $args = [])
 * @method \AwsWPTC\Result updateRole(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateRoleAsync(array $args = [])
 * @method \AwsWPTC\Result updateRoleDescription(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateRoleDescriptionAsync(array $args = [])
 * @method \AwsWPTC\Result updateSAMLProvider(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateSAMLProviderAsync(array $args = [])
 * @method \AwsWPTC\Result updateSSHPublicKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateSSHPublicKeyAsync(array $args = [])
 * @method \AwsWPTC\Result updateServerCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateServerCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result updateServiceSpecificCredential(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateServiceSpecificCredentialAsync(array $args = [])
 * @method \AwsWPTC\Result updateSigningCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateSigningCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result updateUser(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise updateUserAsync(array $args = [])
 * @method \AwsWPTC\Result uploadSSHPublicKey(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise uploadSSHPublicKeyAsync(array $args = [])
 * @method \AwsWPTC\Result uploadServerCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise uploadServerCertificateAsync(array $args = [])
 * @method \AwsWPTC\Result uploadSigningCertificate(array $args = [])
 * @method \GuzzleHttpWPTC\Promise\Promise uploadSigningCertificateAsync(array $args = [])
 */
class IamClient extends AwsClient {}
