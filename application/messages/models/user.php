<?php

return array(
	'username' => array(
        'not_empty' => 'Vous devez fournir un pseudo',
        'min_length' => 'Le pseudo doit être composé d\'au minimum :param2 caractères.',
        'max_length' => 'Le pseudo doit être composé d\'au maximum :param2 caractères.',
        'username_available' => 'Ce pseudo est déjà utilisé.',
    ),
	'email' => array(
		'not_empty' => 'Veuillez fournir une adresse e-mail',
		'min_length' => 'Cette adresse e-mail doit faire au moins :param2 caractères',
		'max_length' => 'Cette adresse e-mail doit faire au maximum :param2 caractères',
		'email' =>	'Merci d\'entrer une adresse e-mail valide !',
		'email_available' => 'Cette adressee e-mail est déjà utilisée.',
	)
);
?>