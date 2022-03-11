<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://localhost:8000
 *
 * @package    core
 * @subpackage completion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkcompletiontracking_help'] = '<strong>Aucun :</strong> ne pas indiquer d\'achèvement d\'activité <strong>Manuel :</strong> les stagiaires peuvent marquer manuellement l\'activité comme achevée <strong>Avec conditions :</strong> marquer l\'activité comme achevée lorsque des conditions sont remplies';
$string['completion_help'] = 'Cette option permet d\'activer le suivi de l\'achèvement des activités, manuellement ou automatiquement, sur la base de conditions choisies. Plusieurs conditions peuvent être exigées simultanément. Dans ce cas, l\'activité sera considérée comme terminée si toutes les conditions sont requises. Une coche à côté du nom de l\'activité indique sur la page de séquence lorsqu\'une activité est terminée.';
$string['completionicons_help'] = 'Une coche à côté du nom de l\'activité peut être utilisée pour indiquer que l\'activité est terminée. Si la bordure de la case à cocher est traitillée, une coche apparaîtra automatiquement lorsque l\'activité sera terminée d\'après les conditions fixées par le intervenant. Si la bordure de la case à cocher est continue, vous pouvez la cocher lorsque vous pensez avoir terminé l\'activité. Vous pouvez cliquer une nouvelle fois si vous changez d\'avis.';
$string['completionnotenabledforcourse'] = 'L\'achèvement n\'est pas activé pour cette séquence';
$string['completionondatevalue'] = 'Date à laquelle la séquence sera marquée comme terminé';
$string['completionusegrade_desc'] = 'Les stagiaires doivent recevoir une note pour terminer cette activité';
$string['completionusegrade_help'] = 'Quand cette option est activée, les stagiaires doivent obtenir une note à l\'activité pour la terminer. Des icônes de réussite ou d\'échec peuvent être affichées, si une note minimale pour réussir a été spécifiée.';
$string['completionview_desc'] = 'Les stagiaires doivent afficher cette activité pour la terminer';
$string['configenablecompletion'] = 'Si ce réglage est activé, des conditions d\'achèvement de séquence et d\'activité peuvent être définies. De telles définitions sont recommandées de sorte à afficher des données pertinentes aux utilisateurs dans la vue d\'ensemble des séquences sur leur tableau de bord.';
$string['courseaggregation_all'] = 'TOUTES les séquences sélectionnées doivent être achevées';
$string['courseaggregation_any'] = 'UNE des séquences sélectionnées doit être achevée';
$string['coursealreadycompleted'] = 'Vous avez déjà terminé cette séquence';
$string['coursecomplete'] = 'Séquence terminée';
$string['coursecompleted'] = 'Séquence terminée';
$string['coursecompletedmessage'] = '<p>Félicitations !</p><p>Vous avez terminé la séquence <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Achèvement de séquence';
$string['coursegrade'] = 'Note de la séquence';
$string['coursesavailable'] = 'Séquences disponibles';
$string['dependenciescompleted'] = 'Achèvement d\'autres séquences';
$string['detail_desc:view'] = 'À consulter';
$string['editcoursecompletionsettings'] = 'Modifier les réglages d\'achèvement de la séquence';
$string['enablecompletion_help'] = 'Si ce réglage est activé, des conditions d\'achèvement peuvent être définies dans les réglages des activités et/ou dans les conditions d\'achèvement de séquence. Il est recommandé d\'activer ce réglage afin que le tableau de bord de progression de la séquence puisse afficher des données significatives.';
$string['err_nocourses'] = 'Le suivi de l\'achèvement n\'est activé dans aucune séquence. Vous pouvez activer le suivi d\'achèvement de séquence dans les réglages de chaque séquence.';
$string['err_nograde'] = 'Une note minimale pour terminer la séquence avec succès n\'a pas été spécifiée. Pour activer ce type de critère, veuillez créer une note minimale pour cette séquence.';
$string['err_noroles'] = 'Il n\'y a pas de rôle avec la capacité moodle/course:markcomplete dans cette séquence.';
$string['err_nousers'] = 'Aucun des participants de cette séquence ou de ce groupe n\'a de rôle pour lequel le suivi de l\'achèvement des activités est activé. Les informations d\'achèvement ne sont affichées que pour les utilisateurs disposant de la capacité « Être affiché dans les rapports d\'achèvement ». Or cette capacité n\'est permise que pour le rôle de stagiaire ; ce message est donc affiché s\'il n\'y a pas de stagiaire.';
$string['err_settingslocked'] = 'Un ou plusieurs stagiaires ont déjà rempli un critère, c\'est pourquoi les réglages ont été verrouillés. Le déverrouillage des critères d\'achèvement supprimera les données existantes de l\'état d\'achèvement des utilisateurs et causera des confusions.';
$string['eventcoursecompleted'] = 'Séquence terminée';
$string['eventcoursecompletionupdated'] = 'Achèvement de séquence modifié';
$string['graderequired'] = 'Note de séquence requise';
$string['nocriteriaset'] = 'Aucun critère d\'achèvement défini pour cette séquence';
$string['notenroled'] = 'Vous n\'êtes pas inscrit à cette séquence';
$string['nottracked'] = 'Vous n\'êtes actuellement pas suivi pour l\'achèvement de cette séquence';
$string['overallaggregation_all'] = 'La séquence est achevée lorsque TOUTES les conditions sont remplies';
$string['overallaggregation_any'] = 'La séquence est achevée lorsqu\'UNE des conditions est remplie';
$string['privacy:metadata:course'] = 'Un identifiant de séquence';
$string['privacy:metadata:coursecompletedsummary'] = 'Enregistre les informations sur les utilisateurs qui ont achevé des critères dans une séquence';
$string['privacy:metadata:coursesummary'] = 'Enregistre les données d\'achèvement de la séquence d\'un utilisateur.';
$string['privacy:metadata:gradefinal'] = 'Note finale reçue pour l\'achèvement de la séquence';
$string['privacy:metadata:reaggregate'] = 'Si l\'achèvement de séquence a été recalculé.';
$string['privacy:metadata:timecompleted'] = 'La date et l\'heure de l\'achèvement de la séquence.';
$string['privacy:metadata:timeenrolled'] = 'La date et l\'heure de l\'inscription de l\'utilisateur dans la séquence';
$string['privacy:metadata:timestarted'] = 'La date et l\'heure du début de la séquence.';
$string['privacy:metadata:unenroled'] = 'Si l\'utilisateur a été désinscrit de la séquence';
$string['privacy:metadata:userid'] = 'L\'identifiant de la personne avec les données d\'achèvement de séquence et d\'activité';
$string['unenrolingfromcourse'] = 'Désinscription de la séquence';
$string['usealternateselector'] = 'Utiliser un autre sélecteur de séquence';
$string['usernotenroled'] = 'L\'utilisateur n\'est pas inscrit à cette séquence';
$string['viewcoursereport'] = 'Consulter le rapport de la séquence';
