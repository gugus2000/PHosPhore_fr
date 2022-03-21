<?php

/* route not retrieved */
$GLOBALS['lang']['class']['route']['Route']['no_retrieved'] = 'route non récupérée';

/** [getPath] **/
/* start the process */
$GLOBALS['lang']['class']['route']['Route']['getPath']['start'] = 'début de l\'obtention d\'un chemin depuis la route {id_root} à la route {this_route}';
/* the path is the name of the route, the route is itself */
$GLOBALS['lang']['class']['route']['Route']['getPath']['found_itself'] = 'le chemin est le nom de la route elle-même, {id_root} est {this_route}';
/* infinite recursion */
$GLOBALS['lang']['class']['route']['Route']['getPath']['infinite_recursion'] = 'il y a une récursion infinie dans la table route (le parent est un enfant des enfants) entre {id_root} et {this_route}';
/* cannot find any parent to this route */
$GLOBALS['lang']['class']['route']['Route']['getPath']['no_parent'] = 'il n\'y a pas de parent à la route {this_route}';
/* root_id is null, the route is itself */
$GLOBALS['lang']['class']['route']['Route']['getPath']['empty_id'] = 'le chemin est le nom de la route elle-même car aucune id racine n\'a été donné pour atteindre {this_route}';
/* the path cannot be defined because it does not exist */
$GLOBALS['lang']['class']['route']['Route']['getPath']['path_not_exist'] = 'le chemin n\'a pas pu être trouvé car un dossier racine (sans parent) a été atteint avant d\'atteindre {id_root} en partant de {this_route]';
/* the path has been found */
$GLOBALS['lang']['class']['route']['Route']['getPath']['found'] = 'un chemin a été trouvé: {path} entre {id_root} et {this_route}';
/* no path found */
$GLOBALS['lang']['class']['route']['Route']['getPath']['not_found'] = 'aucun chemin n\'a été trouvé entre {id_root} et {this_route}';
/** [/getPath] **/

/** [getDefaultPage] **/
/* start of the process */
$GLOBALS['lang']['class']['route']['Route']['getDefaultPage']['start'] = 'début de l\'obtention de la page par défaut pour cette route';
/* unknown type */
$GLOBALS['lang']['class']['route']['Route']['getDefaultPage']['unknown_type'] = '{type} n\'est pas un type défini pour un \\route\\Route';
/* default page is itself */
$GLOBALS['lang']['class']['route']['Route']['getDefaultPage']['itself'] = 'la route est une page, sa page par défaut est elle-même';
/* end of the process */
$GLOBALS['lang']['class']['route']['Route']['getDefaultPage']['end'] = 'page par défaut trouvée';
/** [/getDefaultPage] **/

/** [loadSubFiles] **/
/* start the process */
$GLOBALS['lang']['class']['route']['Route']['loadSubFiles']['start'] = 'début du chargement des sous-fichiers (fichiers config, locale et lang) pour {name}';
/* loading direct subfiles (not files from parent route) */
$GLOBALS['lang']['class']['route']['Route']['loadSubFiles']['current'] = 'chargement direct des sous-fichiers pour {name}';
/* list of files that will be loaded if existing */
$GLOBALS['lang']['class']['route']['Route']['loadSubFiles']['list_files'] = 'chemins des sous-fichiers générés: fichier config {config}, fichier locale {locale} et fichier lang {lang}';
/* config file found */
$GLOBALS['lang']['class']['route']['Route']['loadSubFiles']['config'] = 'fichier config {path} trouvé';
/* locale file found */
$GLOBALS['lang']['class']['route']['Route']['loadSubFiles']['locale'] = 'fichier locale {path} trouvé';
/* lang file found */
$GLOBALS['lang']['class']['route']['Route']['loadSubFiles']['lang'] = 'fichier lang {path} trouvé';
/* end of the process */
$GLOBALS['lang']['class']['route']['Route']['loadSubFiles']['end'] = 'fin de chargement des sous-fichiers pour {name}';
/** [/loadSubFiles] **/

/** [retrieveParameters] **/
/* start the process */
$GLOBALS['lang']['class']['route']['Route']['retrieveParameters']['start'] = 'début du chargement des paramètres de la route';
/* loading parameter of parent route */
$GLOBALS['lang']['class']['route']['Route']['retrieveParameters']['loading_parameters']  = 'chargement des paramètres des routes parentes';
/* the parent route is already loaded, meaning there is a circular reference or two parent with the same parent */
$GLOBALS['lang']['class']['route']['Route']['retrieveParameters']['already_loaded'] = 'cette route {route} a déjà été chargée, cela signifie que deux routes parentes partage le même parent ou référence circulaire';
/* this route don't got any parent */
$GLOBALS['lang']['class']['route']['Route']['retrieveParameters']['root_parameters'] = 'cette route est racine, elle ne peut pas avoir de parents';
/** [/retrieveParameters] **/

?>
