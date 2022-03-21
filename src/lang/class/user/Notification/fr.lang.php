<?php

/** [addToSession] **/
/* no content */
$GLOBALS['lang']['class']['user']['Notification']['addToSession']['content'] = 'impossible d\'ajouter une notification sans le contenu de la session';
/* no id */
$GLOBALS['lang']['class']['user']['Notification']['addToSession']['id'] = 'impossible d\'ajouter une notification ayant une id mais pas d\'id_content';
/* successfuly added notification to the session */
$GLOBALS['lang']['class']['user']['Notification']['addToSession']['success'] = 'notification ajouté à la session avec succès';
/** [/addToSession] **/

/** [create] **/
/* id_content undefined */
$GLOBALS['lang']['class']['user']['Notification']['create']['id_content'] = 'impossible de créer une notification, id_content n\'est pas défini';
/* id_users empty */
$GLOABLS['lang']['class']['user']['Notification']['create']['id_users'] = 'impossible de créer une notification, id_users n\'est pas défini';
/** [/create] **/

/** [delete] **/
/* missing attributes */
$GLOBALS['lang']['class']['user']['Notification']['delete']['missing_attributes'] = 'impossible de supprimer la notification sans les attributs corrects';
/* notification not exist */
$GLOBALS['lang']['class']['user']['Notification']['delete']['not_exist'] = 'impossible de supprimer la notification car elle n\'existe pas';
/* success */
$GLOBALS['lang']['class']['user']['Notification']['delete']['success'] = '{number} notifications ont bien été supprimés';
/** [/delete] **/

/** [deleteNotifications] **/
/* start to delete notifications */
$GLOBALS['lang']['class']['user']['Notification']['deleteNotifications']['start'] = 'début de la suppression des notifications';
/* delete notifications in session */
$GLOBALS['lang']['class']['user']['Notification']['deleteNotifications']['session'] = 'suppression de {number} notifications dans la session';
/* delete notifications in database */
$GLOBALS['lang']['class']['user']['Notification']['deleteNotifications']['db'] = 'suppression de {number} notification dans la base de donnée';
/* notifications deleted */
$GLOBALS['lang']['class']['user']['Notification']['deleteNotifications']['end'] = '{number} notifications ont bien été supprimés';
/** [/deleteNotifications] **/

/** [displayContent] **/
/* no content */
$GLOBALS['lang']['class']['user']['Notification']['displayContent']['no_content'] = 'rien à afficher, le contenu n\'est pas défini';
/** [/displayContent] **/

/** [getNotifications] **/
/* pageElement already has a content */
$GLOBALS['lang']['class']['user']['Notification']['getNotifications']['already_content'] = 'l\'élément de base pour la notification a déjà le contenu : {content}';
/* pageElement already has a date */
$GLOBALS['lang']['class']['user']['Notification']['getNotifications']['already_date'] = 'l\'élément de base pour la notification a déjà la date : {date}';
/* pageElement already has a type */
$GLOBALS['lang']['class']['user']['Notification']['getNotifications']['already_type'] = 'l\'élément de base pour la notification a déjà le type : {type}';
/* there is at least one notification in the session */
$GLOBALS['lang']['class']['user']['Notification']['getNotifications']['in_session'] = 'il y a {number} notifications dans la session';
/* there is at least one notification in the database */
$GLOBALS['lang']['class']['user']['Notification']['getNotifications']['in_db'] = 'il y a {number} notifications dans la base de donnée';
/** [/getNotifications] **/

/** [retrieveContent] **/
/* no content to retrieve */
$GLOBALS['lang']['class']['user']['Notification']['retrieveContent']['no_content'] = 'pas de contenu associé à la notification';
/** [/retrieveContent] **/

?>
