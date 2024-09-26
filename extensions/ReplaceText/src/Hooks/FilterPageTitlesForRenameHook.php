<?php

namespace MediaWiki\Extension\ReplaceText\Hooks;

use MediaWiki\Title\Title;

/**
 * This is a hook handler interface, see docs/Hooks.md in core.
 * Use the hook name "ReplaceTextFilterPageTitlesForRename" to register handlers implementing this interface.
 *
 * @stable to implement
 * @ingroup Hooks
 */
interface FilterPageTitlesForRenameHook {
	/**
	 * Provides other extension the ability to avoid renaming pages based on their titles.
	 *
	 * @param Title[] &$filteredTitles Array of page titles being renamed
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onReplaceTextFilterPageTitlesForRename( array &$filteredTitles );
}
