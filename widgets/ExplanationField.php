<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) Heimrich & Hannot GmbH
 * @package be_explanation
 * @author Dennis Patzer
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\BeExplanation;


class ExplanationField extends \Widget
{

	protected $strTemplate = 'be_explanation';


	public function generate()
	{
		return sprintf('<p style="margin-top: 15px;" id="ctrl_%s"%s>%s</p>',
			$this->strId, (($this->strClass != '') ? ' class="' . $this->strClass . '"' : ''),
			$this->text
		);
	}
}
