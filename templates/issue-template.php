<!--
Thanks for reporting issues back to ownCloud! This is the issue tracker of ownCloud, if you have any support question please check out https://owncloud.org/support

This is the bug tracker for the Server component. Find other components at https://github.com/owncloud/core/blob/master/.github/CONTRIBUTING.md#guidelines

For reporting potential security issues please see https://owncloud.org/security/

To make it possible for us to help you please fill out below information carefully.

Before reporting any issues please make sure that you're using the latest available version for your major branch (e.g. 9.0.x), see https://owncloud.org/changelog/
-->
### Steps to reproduce
<?php p($_['steps']); ?>

### Expected behaviour
<?php p($_['expected']); ?>

### Actual behaviour
<?php p($_['actual']); ?>


### Server configuration
**Operating system**: <?php p($_['os']); ?>

**Web server:** <?php p($_['webserver']); ?>

**Database:** <?php p($_['database']); ?>

**PHP version:** <?php p($_['php']); ?>

**ownCloud version:** <?php p($_['owncloudVersion']); ?>

**Updated from an older ownCloud or fresh install:** <?php p($_['didUpgrade']); ?>

**Where did you install ownCloud from:** <?php p($_['installSource']); ?>

**Signing status (ownCloud 9.0 and above):** <?php p($_['signingStatus']); ?>

**The content of config/config.php:**

<?php p($_['config']); ?>

**List of activated apps:**

<?php p($_['apps']); ?>

**Are you using external storage, if yes which one:** local/smb/sftp/...
<?php p($_['externalStorage']); ?>

**Are you using encryption:** <?php p($_['usingEncryption']); ?>

**Are you using an external user-backend, if yes which one:** LDAP/ActiveDirectory/Webdav/...
<?php p($_['userBackends']); ?>

<?php if($_['usingLDAP']) { ?>
	#### LDAP configuration (delete this part if not used)
	<?php p($_['LDAPConfig']); ?>
<?php } ?>

<?php if($_['isBrowserRelatedIssue']) { ?>
	### Client configuration
	**Browser:** <?php p($_['browserName']); ?>
	**Operating system:** <?php p($_['browserName']); ?>
	**Browser log:**
	<?php p($_['browserName']); ?>


<?php } ?>

### Logs
#### Web server error log
<?php p($_['webserverLogs']); ?>

#### ownCloud log (data/owncloud.log)
<?php p($_['ownCloudLogs']); ?>

