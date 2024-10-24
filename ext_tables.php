<?php
if (! defined('TYPO3')) {
	die ('Access denied.');
}


call_user_func(function () {

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_beacl_acl');

});

