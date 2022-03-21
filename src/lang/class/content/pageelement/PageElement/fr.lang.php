<?php

/** [__construct] **/
/* unknown attribute given */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['__construct']['unknown_attribute'] = '{key} (avec la valeur de {value}) ne peut pas être stocké dans \\content\\pageelement\\PageElement car ce n\'est pas un attribut défini (la méthode {method} n\'existe pas)';
/** [/__construct] **/

/** [addElement] **/
/* start the process */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['addElement']['start'] = 'tentative d\'ajout de {key} avec la valeur {value} à l\'attribut elements';
/* success */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['addElement']['success'] = 'ajout de {key} => {value} à l\'attribut';
/* failure, key already taken */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['addElement']['failure'] = 'la clef {key} est déjà prise, impossible de changer sa valeur à {value}';
/** [/addElement] **/

/** [addValueElement] **/
/* start the process */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['addValueElement']['start'] = 'tentative d\'ajout de {new_key} avec la valeur de {value} à l\'élément associé à la clef {key} de l\'attribut elements';
/* the value associated with the key $key in elements attribute is not an array */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['addValueElement']['not_array'] = 'la valeur associé à la clef {key] dans l\'attribut elements n\'est pas une liste, impossible d\'ajouter {new_key} => {value} à autre chose qu\'une liste';
/* success */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['addValueElement']['success'] = 'ajout de {new_key} avec la valeur de {value} à l\'élément associé à la clef {key} de l\'attribut elements réussie';
/* the $new_key is already taken */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['addValueElement']['already_taken'] = 'la clef {new_key} de la liste associé à la clef {key} de l\'attribut elements est déjà pris, impossible de changer sa valeur à {value}';
/** [/addValueElement] **/

/** [display] **/
/* start the process */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['start'] = 'début de l\'affichage du \\content\\pageelement\\PageElement';
/* using the cache */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['use_cache'] = 'cache utilisé pour la template {template}';
/* no file template */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['no_file_template'] = 'le fichier de template {template} n\'existe pas, on considère que la template n\'est pas définie';
/* no template */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['no_template'] = 'aucune template n\'est définie pour mettre en forme le contenu, le contenu sera composé de tout les éléments de elements à la suite';
/* there are elements to display (at least one) */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['elements'] = 'il y a au moins un élément à afficher';
/* the content will not be displayed as a list of item without consideration to key value */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['content'] = 'le contenu n\'est pas vide, le contenu ne sera pas affiché comme tout les éléments à la suite';
/* the object cannot be displayed because it does not have a display method */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['cannot_display_object'] = 'l\'objet de la classe {object} ne peut pas être affiché car il ne possède pas de méthode display';
/* the content will be displayed as a list of item whithout taking key value into consideration */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['no_content'] = 'contenu vide, le contenu sera affiché comme tout les éléments à la suite';
/* end of the process */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['display']['end'] = '\\content\\pageelement\\PageElement affiché';
/** [/display] **/

/** [displayArray] **/
/* the object cannot be displayed because it does not have a display method */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['displayArray']['cannot_display_object'] = 'l\'object de la classe {object} ne peut pas être affiché dans la liste car il ne possède pas de méthode display';
/** [/displayArray] **/

/** [getElement] **/
/* start the process */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['getElement']['start'] = 'tentative d\'accéder à l\'élément {key}';
/* attribute elements is null */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['getElement']['elements_null'] = 'l\'attribut elements n\'était pas défini, c\'est maintenant une liste vide';
/* element found */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['getElement']['success'] = 'élément {key} trouvé';
/* element not found */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['getElement']['failure'] = 'élément {key} non trouvé';
/** [/getElement] **/

/** [setElement] **/
/* start the process */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['setElement']['start'] = 'tentative de définition de l\'élément {key} à la valeur {value} en étant {strict} strict';
/* value changed */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['setElement']['change'] = 'l\'élément {key} à maintenant la valeur {valeur}';
/* value added */
$GLOBALS['lang']['class']['content']['pageelement']['PageElement']['setElement']['add'] = 'Malgré le paramètre strict (Vrai), l\'élément {key} a été ajouté à l\'élément de la liste avec une valeur {value} car il n\'existait pas avant';
/** [/setElement] **/

?>
