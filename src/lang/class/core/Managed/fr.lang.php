<?php

/** [__construct] **/
/* construct the object */
$GLOBALS['lang']['class']['core']['Managed']['__construct'] = 'construction d\'une instance de {class}';
/** [/__construct] **/

/** [add] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Managed']['add']['start'] = 'début d\'insertion de l\'objet {class} dans la base de donnée';
/* error during the query */
$GLOBALS['lang']['class']['core']['Managed']['add']['error'] = 'erreur durant la requête pour insérer l\'objet {class} dans la base de donnée';
/* success */
$GLOBALS['lang']['class']['core']['Managed']['add']['success'] = 'insertion de l\'objet {class} dans la base de donnée avec succès';
/** [/add] **/

/** [clone] **/
/* cloning the object */
$GLOBALS['lang']['class']['core']['Managed']['clone'] = 'clonage de l\'objet {class}';
/** [/clone] **/

/** [delete] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Managed']['delete']['start'] = 'début de la supression de l\'objet {class} dans la base de donnée';
/* the object is not in the database */
$GLOBALS['lang']['class']['core']['Managed']['delete']['not_exist'] = 'l\'objet {class} ne peut pas être supprimer car il n\'est pas dans la base de donnée';
/* the index of the object is missing */
$GLOBALS['lang']['class']['core']['Managed']['delete']['missing_index'] = 'l\'objet {class} ne peut pas être supprimé car il lui manque son index';
/* success */
$GLOBALS['lang']['class']['core']['Managed']['delete']['success'] = 'l\'objet {class} a été supprimé de la base de donnée';
/** [/delete] **/

/** [displayer] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Managed']['displayer']['start'] = 'début de l\'affichage de l\'attribut {attribute} de la classe {class}';
/* the method to display this attribute exist */
$GLOBALS['lang']['class']['core']['Managed']['displayer']['exist'] = 'une méthode personnalisée existe pour afficher l\'attribut {attribute} de la classe {class}';
/* the method to display this attribute does not exist, using the default one */
$GLOBALS['lang']['class']['core']['Managed']['displayer']['not_exist'] = 'pas de méthode personnalisée existante pour afficher l\'attribut {attribute} de la classe {class}';
/** [/displayer] **/

/** [exist] **/
/* index missing */
$GLOBALS['lang']['class']['core']['Managed']['exist']['missing_index'] = 'impossible de vérifier l\'existance de l\'objet {class} car l\'index n\'est pas défini';
/** [/exist] **/

/** [hydrate] **/
/* start hydrating */
$GLOBALS['lang']['class']['core']['Managed']['hydrate']['start'] = 'début de l\'hydratation de {class}';
/* end hydrating */
$GLOBALS['lang']['class']['core']['Managed']['hydrate']['end'] = 'hydratation de {class} terminé, {count} attributs stockées';
/** [/hydrate] **/

/** [get] **/
/* start of the process */
$GLOBALS['lang']['class']['core']['Managed']['get']['start'] = 'tentative d\'accès à l\'attribut {attribute} de l\'objet {class}';
/* attribute not defined */
$GLOBALS['lang']['class']['core']['Managed']['get']['not_defined'] = 'l\'attribute {attribute} de {class} n\'est pas défini';
/* custom method exist */
$GLOBALS['lang']['class']['core']['Managed']['get']['getter'] = 'méthode personnalisée trouvé pour accéder à l\'attribut {attribute} de la classe {class}';
/* no custom method */
$GLOBALS['lang']['class']['core']['Managed']['get']['default'] = 'méthode personnalisée non trouvé pour accéder à l\'attribut {attribute} de la classe {class}';
/** [/get] **/

/** [getIndex] **/
/* index attribute not defined */
$GLOBALS['lang']['class']['core']['Managed']['getIndex'] = 'l\'attribut {attribute} est un index mais n\'est pas défini';
/** [/getIndex] **/

/** [isIdentical] **/
/* start the check */
$GLOBALS['lang']['class']['core']['Managed']['isIdentical']['start'] = 'début de la vérification d\'égalité entre {class_1} et {class_2}';
/* not the same class */
$GLOBALS['lang']['class']['core']['Managed']['isIdentical']['dif_class'] = '{class_1} et {class_2} ont des classes différentes';
/* missing index */
$GLOBALS['lang']['class']['core']['Managed']['isIdentical']['missing_index'] = 'au moins un des index de {class_1} ou de {class_2} sont manquant (attribut {attribute})';
/* not the same index value */
$GLOBALS['lang']['class']['core']['Managed']['isIdentical']['dif_index'] = 'la valeur de {attribute} est différent entre {class_1} et {class_2}';
/* same object */
$GLOBALS['lang']['class']['core']['Managed']['isIdentical']['same'] = '{class_1} et {class_2} sont identiques';
/** [/isIdentical] **/

/** [manager] **/
/* start */
$GLOBALS['lang']['class']['core']['Managed']['manager']['start'] = 'début de la création d\'une instance du manager associé à {class}';
/* manager class not found */
$GLOBALS['lang']['class']['core']['Managed']['manager']['not_defined'] = 'impossible de trouvé la classe manager de {class}';
/* end */
$GLOBALS['lang']['class']['core']['Managed']['manager']['end'] = 'classe manager de {class} trouvé avec succès';
/** [/manager] **/

/** [retrieve] **/
/* start of the process */
$GLOBALS['lang']['class']['core']['Managed']['retrieve']['start'] = 'début de la récupération de {class}';
/* object not defined (not exist) */
$GLOBALS['lang']['class']['core']['Managed']['retrieve']['not_defined'] = 'impossible de récupérer {class} parce qu\'il n\'existe pas';
/* end of the process */
$GLOBALS['lang']['class']['core']['Managed']['retrieve']['end'] = '{class} récupéré';
/** [/retrieve] **/

/** [set] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Managed']['set']['start'] = 'début de la définition de l\'attribute {attribute} de la classe {class}';
/* attribute does not exist */
$GLOBALS['lang']['class']['core']['Managed']['set']['undefined'] = 'impossible de définir la valeur de l\'attribut {attribute} de la classe {class} car cet attribut n\'existe pas dans cette classe';
/* custom method exists */
$GLOBALS['lang']['class']['core']['Managed']['set']['custom_method'] = 'définisseur personnalisé trouvé: {method}, définissant {attribute} de {class}';
/* attribute is typed */
$GLOBALS['lang']['class']['core']['Managed']['set']['typed_attribute'] = 'l\'attribute {attribute} de {class} est typé';
/* unknown attribute type */
$GLOBALS['lang']['class']['core']['Managed']['set']['unknown_type'] = 'type inconnu: {type}';
/* attribute is note typed */
$GLOBALS['lang']['class']['core']['Managed']['set']['not_typed'] = 'l\'attribut {attribute} de {class} n\'est pas typé';
/* no custom method */
$GLOBALS['lang']['class']['core']['Managed']['set']['default_method'] = 'définisseur personnalisé non trouvé, définition de {attribute} de {class} avec la méthode par défaut';
/** [/set] **/

/** [table] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Managed']['table']['start'] = 'début de la conversion de {class} en une liste (profondeur: {depth})';
/* depth value not accepted */
$GLOBALS['lang']['class']['core']['Managed']['table']['undefined_depth'] = 'la profondeur {depth} n\'est pas valide pour la conversion de {class} en une liste';
/** [/table] **/

/** [update] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Managed']['update']['start'] = 'début de la mise à jour de {class}';
/* object not exist */
$GLOBALS['lang']['class']['core']['Managed']['update']['not_exist'] = 'cet instance de {class} n\'existe pas de la base de donnée';
/* missing index */
$GLOBALS['lang']['class']['core']['Managed']['update']['missing_index'] = 'au moins un index de {class} n\'est pas défini';
/** [/update] **/

?>
