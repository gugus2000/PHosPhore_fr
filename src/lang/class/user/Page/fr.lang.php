<?php

/** [__construct] **/
/* start of the process */
$GLOBALS['lang']['class']['user']['Page']['__construct']['start'] = 'début de la construction de la page';
/* no attributes to hydrate */
$GLOBALS['lang']['class']['user']['Page']['__construct']['no_attributes'] = 'la page ne peut pas être construite, les attributes sont vides ou invalides';
/* no route defined */
$GLOBALS['lang']['class']['user']['Page']['__construct']['no_route'] = 'la page ne peut pas être construite, l\'id n\'a pas été défini';
/* end of the process */
$GLOBALS['lang']['class']['user']['Page']['__construct']['end'] = 'page construite';
/** [/__construct] **/

/** [addParameter] **/
/* start of the process */
$GLOBALS['lang']['class']['user']['Page']['addParameter']['start'] = 'début de l\'ajout de {key} comme un paramètre (temporaire) avec la valeur {value} de la page';
/* trying to overwrite a parameter */
$GLOBALS['lang']['class']['user']['Page']['addParameter']['already'] = 'le paramètre {name} a déjà été définit comme la valeur {old}, impossible de le supprimer pour avoir la valeur {value}';
/** [/addParameter] **/

/** [display] **/
/* display the page */
$GLOBALS['lang']['class']['user']['Page']['display'] = 'affichage de la page';
/** [/display] **/

/** [load] **/
/* start the loading of the page */
$GLOBALS['lang']['class']['user']['Page']['load']['start'] = 'début du chargement de le page';
/* there is an existing preset */
$GLOBALS['lang']['class']['user']['Page']['load']['preset'] = 'utilisation du preset existant "{preset}" pour construite la page';
/* the number of notification fetched does not match the number of notifications deleted */
$GLOBALS['lang']['class']['user']['Page']['load']['different_number'] = 'le nombre de notification récupéré ({number_fetch}) ne correspond pas au nombre de notifications supprimés ({number_delete})';
/* inserting notifications */
$GLOBALS['lang']['class']['user']['Page']['load']['notifications'] = 'insertion de {number} éléments de notification dans le \\content\\PageElement principal';
/* there is no file for this page */
$GLOBALS['lang']['class']['user']['Page']['load']['no_file'] = 'impossible de trouver le fichier {file} qui est requis pour le chargement de la page';
/* start to load the sub files */
$GLOBALS['lang']['class']['user']['Page']['load']['subfiles'] = 'début du chargement des sous-fichiers nécessaires au chargement de page ';
/* start to include the file */
$GLOBALS['lang']['class']['user']['Page']['load']['include'] = 'début de l\'inclusion du fichier {file}, qui terminera le chargement de la page';
/** [/load] **/

/** [retrieveParameters] **/
/* start the retrieval */
$GLOBALS['lang']['class']['user']['Page']['retrieveParameters']['start'] = 'récupération des paramètres de la page';
/* already retrieved */
$GLOBALS['lang']['class']['user']['Page']['retrieveParameters']['already_defined'] = 'paramètres déjà récupéré auparavant';
/* parameters of parent loading */
$GLOBALS['lang']['class']['user']['Page']['retrieveParameters']['loading_parameters'] = 'chargement des paramètres de la route parente';
/* parameteres of this parent is already loaded */
$GLOBALS['lang']['class']['user']['Page']['retrievedParameters']['already_loaded'] = 'les paramètres de ce parent sont déjà chargés';
/* no parameteres to load, root route */
$GLOBALS['lang']['class']['user']['Page']['retrieveParameters']['root_parameters'] = 'route racine, aucun paramètre supplémentaire à charger';
/* parameters retrieved */
$GLOBALS['lang']['class']['user']['Page']['retrieveParameters']['loaded'] = '{number} paramètres récupérés pour cette page';
/** [/retrieveParameters] **/

/** [retrieveRoute] **/
/* the route does not exist */
$GLOBALS['lang']['class']['user']['Page']['retrieveRoute']['no_exist'] = 'la route associée à cette page n\'existe pas';
/* route already retrieved */
$GLOBALS['lang']['class']['user']['Page']['retrieveRoute']['already_defined'] = 'route déjà récupéré';
/** [/retrieveRoute] **/

?>
