<?php

/** [getFullRegex] **/
$GLOBALS['lang']['class']['route']['Parameter']['getFullRegex']['start'] = 'début de l\'obtention de l\'expression régulière entière pour le paramètre, valeur de départ: {regex}';
/* regex is invalid */
$GLOBALS['lang']['class']['route']['Parameter']['getFullRegex']['bad_regex'] = 'l\'expression régulière {regex} est invalide';
/* the regex is only one character, we escaping it in case */
$GLOBALS['lang']['class']['route']['Parameter']['getFullRegex']['one_escaped'] = 'l\'expression régulière fait un caractère, l\'expression régulière finale sera {regex}';
/* the regex is already valid, with delimiters */
$GLOBALS['lang']['class']['route']['Parameter']['getFullRegex']['already_done'] = 'l\'expression régulière a déjà des délimiteurs, l\'expression régulière finale sera {regex}';
/* the regex did not have delimiters */
$GLOBALS['lang']['class']['route']['Parameter']['getFullRegex']['no_delimiter'] = 'des délimiteurs ont été rajouté à l\'expression régulière, celle-ci est maintenant: {regex}';
/** [/getFullRegex] **/

?>
