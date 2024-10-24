<?php

$EM_CONF['be_acl'] = [
	'title' => 'Backend ACLs',
	'description' => 'Backend Access Control Lists',
	'category' => 'be',
	'version' => '3.0.0',
	'state' => 'stable',
	'clearcacheonload' => false,
	'author' => 'Sebastian Kurfuerst, Jan Bartels, Moritz Ngo, Sonal Chauhan',
	'author_email' => 'sebastian@garbage-group.de, j.bartels@arcor.de, moritz.ngo@p2media.de, s.r.vadhavana36@gmail.com',
	'author_company' => '',
	'constraints' => [
		'depends' => [
			'typo3' => '11.5.0-12.99.99',
		],
		'conflicts' => [
		],
		'suggests' => [
		],
	],
	'autoload' => [
		'psr-4' => [
		  	'JBartels\\BeAcl\\' => 'Classes/',
			'P2Media\\BeAcl\\' => 'Classes/',
		]
	],
];
