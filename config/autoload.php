<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Widgets
	'HeimrichHannot\BeExplanation\ExplanationField' => 'system/modules/be_explanation/widgets/ExplanationField.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_explanation' => 'system/modules/be_explanation/templates/backend',
));
