<?php

/** [lang] **/
/* abbreviation of the lang */
$GLOBALS['lang']['core']['lang']['abbr'] = 'fr';
/* full name of the lang */
$GLOBALS['lang']['core']['lang']['full'] = 'français';
/** [/lang] **/

/** [AUTOLOAD] **/
/* starting autoload */
$GLOBALS['lang']['core']['autoload']['start'] = 'début du chargement automatique de la classe {class}';
/* load config file */
$GLOBALS['lang']['core']['autoload']['config_file'] = 'chargement du fichier config {path} pour la classe {class}';
/* load lang file */
$GLOBALS['lang']['core']['autoload']['lang_file'] = 'chargement du fichier lang {path} pour la classe {class}';
/* load locale file */
$GLOBALS['lang']['core']['autoload']['locale_file'] = 'chargement du fichier locale {path} pour la classe {class}';
/* end of autoload */
$GLOBALS['lang']['core']['autoload']['end'] = 'chargement automatique terminé';
/** [/AUTOLOAD] **/

/** [LOG] **/
/* start */
$GLOBALS['lang']['core']['start'] = 'début du script, Logger initialisée';
/* router_init */
$GLOBALS['lang']['core']['router_init'] = 'routeur initialisé';
/* visitor_init */
$GLOBALS['lang']['core']['visitor_init'] = 'visiteur initialisé';
/* visitor successfully connect */
$GLOBALS['lang']['core']['visitor_connect'] = 'visiteur connecté';
/* guest credentials are incorrect */
$GLOBALS['lang']['core']['guest_missmatch'] = 'les informations d\'identification stocké dans la configuration du serveur sont incorrects';
/* exception threw */
$GLOBALS['lang']['core']['exception_threw'] = 'exception lancée, tentative de récupération';
/* cannot display the error page */
$GLOBALS['lang']['core']['cannot_display_error_page'] = 'impossible d\'afficher la page d\'erreur, tentative de récupération';
/* cannot display at all */
$GLOBALS['lang']['core']['cannot_display_error'] = 'erreur impossible à afficher, tentative de récupération';
/* page loaded fine */
$GLOBALS['lang']['core']['end'] = 'fin du script, au revoir o/';
/* recovery ended */
$GLOBALS['lang']['core']['end_error'] = 'récupération de l\'erreur réussie pour l\'erreur : {error}';
/** [/LOG] **/

/** [LOGIN] **/
/* no token stored in session */
$GLOBALS['lang']['core']['login']['no_session'] = 'pas de jeton (token) stocké dans la session, connexion avec le compte invité';
/* token stored in session */
$GLOBALS['lang']['core']['login']['session'] = 'jeton (token) stocké dans la session';
/* bad token */
$GLOBALS['lang']['core']['login']['bad_credential'] = 'jeton (token) invalide';
/** [/LOGIN] **/

/** [TYPE] **/
/* unknown type */
$GLOBALS['lang']['core']['type']['unknown'] = 'type inconnu'
/** [/TYPE] **/

?>
