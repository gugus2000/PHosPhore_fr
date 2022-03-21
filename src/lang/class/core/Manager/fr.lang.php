<?php

/** [__construct] **/
/* construction of the object */
$GLOBALS['lang']['class']['core']['Manager']['__construct'] = 'construction de {class}';
/** [/__construct] **/

/** [add] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['add']['start'] = '{class} début de l\'ajout d\'une ligne à la base de donnée';
/* item to add does not have any attributes */
$GLOBALS['lang']['class']['core']['Manager']['add']['no_attributes'] = '{class} impossible d\'ajouter un élément dans la base de donnée sans aucun attribut';
/* query $query constructed */
$GLOBALS['lang']['class']['core']['Manager']['add']['query'] = '{class} requête construte: {query}';
/* success */
$GLOBALS['lang']['class']['core']['Manager']['add']['success'] = '{class} ligne de la base de donnée ajoutée avec succès';
/** [/add] **/

/** [boundaryInterpreter] **/
/* start of the process */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['start'] = '{class} début de la création de la clause LIMIT avec l\'interpréteur des bornes';
/** [group] **/
/* group element of the argument array is not an array */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['group']['not_array'] = '{class} impossible de créer une clause GROUP BY, arguments incorrects donnés: l\'élément group de la liste doit etre une liste composée de 3 éléments: attribute, operations et having';
/* the attribute element of the group element does not exist */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['group']['missing_key'] = '{class} impossible de créer une clause GROUP BY, arguments incorrects donnés: l\'élément groupe doit avoir une clef attribute valide';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['group']['end'] ='{class} requête construite pour GROUP BY: {query}';
/** [/group] **/
/** [order] **/
/* order element of the argument array is not an array */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['order']['not_array'] = '{class} impossible de créer une clause ORDER BY, arguments incorrects donnés: l\'élément order doit être une liste composée de 2 éléments: name et direction';
/* the name element does not exist or is not in the list of the class'attributes */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['order']['unknown_name'] = '{class} impossible de créer une clause ORDER BY, arguments incorrects donnés: l\'élément order doit avoir une clef name valide';
/* direction must be ASC or DESC to be valid */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['order']['direction'] = '{class} impossible de créer une clause ORDER BY, l\'élément direction n\'est ni "ASC", ni "DESC"';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['order']['end'] = '{class} requête construite pour ORDER BY: {query}';
/** [/order] **/
/** [limit] **/
/* limit element of the argument array is not an array */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['limit']['not_array'] = '{class} impossible de créer une clause LIMIT, arguments incorrects donnés: l\'élément limit doit être une liste composée de 2 éléments: number et offset';
/* invalid value for number or/and offset */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['limit']['invalid'] = '{class} impossible de créer une clause LIMIT, arguments incorrects donnés: l\'élément number et offset doivent être des entiers';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['limit']['end'] = '{class} requête construite pour LIMIT: {query}';
/** [/limit] **/
/* unknown element in the argument array */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['unknown_key'] = '{class} l\'élément avec la clef {key} n\'est pas supporté, seulement order, group et limit le sont';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['boundaryInterpreter']['end'] = '{class} requête construite : {query}';
/** [/boundaryInterpreter] **/

/** [conditionCreator] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['conditionCreator']['start'] = '{class} début de la création d\'une clause conditonnelle (WHERE)';
/* no value given */
$GLOBALS['lang']['class']['core']['Manager']['conditionCreator']['no_values'] = '{class} impossible de créer la condition, pas de valeurs données';
/* no operation given for a value */
$GLOBALS['lang']['class']['core']['Manager']['conditionCreator']['missing_operation'] = '{class} impossible de créer la condition, pas d\'opération donnée pour l\'attribut {attribute}';
/* no array given for IN operation */
$GLOBALS['lang']['class']['core']['Manager']['conditionCreator']['empty'] = '{class} impossible d\'avoir une opération IN pour l\'attribut {attribute} car l\'opération IN nécessite une liste de valeur non nulle pour être utilisée';
/* operation not in the whitelist */
$GLOBALS['lang']['class']['core']['Manager']['conditionCreator']['not_in_whitelist'] = '{class} impossible de créer la condition, l\'opération {operation} n\'est pas dans la liste des opérations valides';
/** [/conditionCreator] **/

/** [count] **/
/* counting element of the database */
$GLOBALS['lang']['class']['core']['Manager']['count'] = '{class} comptage des éléments dans la base de donnée';
/** [/count] **/

/** [countBy] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['countBy']['start'] = '{class} début de décompte des éléments de la base de donnée respectant une condition';
/* no values given */
$GLOBALS['lang']['class']['core']['Manager']['countBy']['values'] = '{class} impossible de créer la condition sans valeurs';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['countBy']['end'] = '{class} requête construite : {query}';
/** [/countBy] **/

/** [delete] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['delete']['start'] = '{class} début de la suppression d\'un élément de la base de donnée';
/* missing index */
$GLOBALS['lang']['class']['core']['Manager']['delete']['missing_index'] = '{class} impossible de supprimer un élément de la base de donnée car l\'index {attribute} est manquant';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['delete']['end'] = '{class} requête construite : {query}';
/** [/delete] **/

/** [deleteBy] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['deleteBy']['start'] = '{class} début de la suppression d\'éléments de la base de donnée respectant une condition';
/* empty values */
$GLOBALS['lang']['class']['core']['Manager']['deleteBy']['values'] = '{class} impossible de créer la condition sans valeurs';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['deleteBy']['end'] = '{class} requête construite : {query}';
/** [/deleteBy] **/

/** [exist] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['exist']['start'] = '{class} début de la vérification de l\'existence de l\'élément dans la base de donnée';
/* missing index */
$GLOBALS['lang']['class']['core']['Manager']['exist']['missing_index'] = '{class} impossible de vérifier l\'existence de l\'élément dans la base de donnée car l\'index {attribute} est manquant';
/* there is more than one element with the same index */
$GLOBALS['lang']['class']['core']['Manager']['exist']['more_one_index'] = '{class} il y a plus d\'un élément ({number}) pour le même index';
/** [/exist] **/

/** [existBy] **/
/* check if there is at least one element which respect a condition */
$GLOBALS['lang']['class']['core']['Manager']['existBy'] = '{class} vérifie si au moins un élément respecte une condition';
/** [/existBy] **/

/** [get] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['get']['start'] = '{class} début de l\'obtention d\'un élément de la base de donnée';
/* missing index */
$GLOBALS['lang']['class']['core']['Manager']['get']['missing_index'] = '{class} impossible d\'obtenir l\'élément de la base de donnée car l\'index {attribute} est manquant';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['get']['end'] = '{class} query constructed: {query}';
/** [/get] **/

/** [getBy] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['getBy']['start'] = '{class} starting to get elements respecting a condition in the database';
/* empty values */
$GLOBALS['lang']['class']['core']['Manager']['getBy']['values'] = '{class} cannot get elements respecting a condition in the database because values is empty, so there is no condition';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['getBy']['end'] = '{class} query constructed: {query}';
/** [/getBy] **/

/** [getIdBy] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['getIdBy']['start'] = '{class} starting to get index of elements respecting a condition in the database';
/* empty values */
$GLOBALS['lang']['class']['core']['Manager']['getIdBy']['values'] = '{class} cannot get index of elements respecting a condition in the database because values is empty, so there is no condition';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['getIdBy']['end'] = '{class} query constructed: {query}';
/** [/getIdBy] **/

/** [getIdByPos] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['getIdByPos']['start'] = '{class} starting to get index of elements by checking their position in the database';
/* invalid type for arguments */
$GLOBALS['lang']['class']['core']['Manager']['getIdByPos']['invalid_data'] = '{class} invalid types for some arguments';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['getIdByPos']['end'] = '{data} query constructed: {query}';
/** [/getIdByPos] **/

/** [getNextId] **/
/* get next value of the index */
$GLOBALS['lang']['class']['core']['Manager']['getNextId'] = '{class} getting next value of the index in the database';
/** [/getNextId] **/

/** [managed] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['managed']['start'] = '{class} creating an instance of the Managed class associated to this one';
/* the calculated class was not found */
$GLOBALS['lang']['class']['core']['Manager']['managed']['not_defined'] = '{class} class {managed} not found';
/** [/managed] **/

/** [retrieveBy] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['retrieveBy']['start'] = '{class} starting to retrieve object with data stored in the database matching a condition';
/* custom class not defined */
$GLOBALS['lang']['class']['core']['Manager']['retrieveBy']['custom_class_not_defined'] = '{class} class {managed} not found, cannot retrieve object of this class';
/* custom class manager not defined */
$GLOBALS['lang']['class']['core']['Manager']['retrieveBy']['custom_class_manager_not_defined'] = '{class} class {manager} not found, cannot retrieve object not directly linked to this database';
/* end of the process */
$GLOBALS['lang']['class']['core']['Manager']['retrieveBy']['end'] = '{class} retrieved';
/* objects retrieved */
$GLOBALS['lang']['class']['core']['Manager']['retrievedBy']['end'] = '{class} objects retrieved';
/** [/retrieveBy] **/

/** [setDb] **/
/* trying to set a db which is not an instance of \PDO */
$GLOBALS['lang']['class']['core']['Manager']['seetDb'] = '{class} cannot set db to this new value because this is not an instance of \PDO';
/** [/setDb] **/

/** [update] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['update']['start'] = '{class} starting to update an element of the database';
/* missing index */
$GLOBALS['lang']['class']['core']['Manager']['update']['missing_index'] = '{class} cannot update an element of the database because the index {attribute} is missing';
/* values */
$GLOBALS['lang']['class']['core']['Manager']['update']['values'] = '{class} cannot update an element of the database because the values to replace are empty';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['update']['end'] = '{class} query constructed: {query}';
/** [/update] **/

/** [updateBy] **/
/* start the process */
$GLOBALS['lang']['class']['core']['Manager']['updateBy']['start'] = '{class} starting to update elements respecting a condition in the database';
/* empty values */
$GLOBALS['lang']['class']['core']['Manager']['updateBy']['values'] = '{class} cannot update elements respecting a condition in the database because the values to make the condition or modification are empty';
/* end, query constructed */
$GLOBALS['lang']['class']['core']['Manager']['updateBy']['end'] = '{class} query constructed: {query}';
/** [/updateBy] **/

?>
