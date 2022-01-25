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
 * @subpackage grades
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregatesubcatsupgradedgrades'] = 'Remarque : le réglage « Inclure les sous-catégories dans les tendances centrales » a été supprimé au cours de la mise à jour du site. Puisque ce réglage était utilisé antérieurement dans cette séquence, il vous est conseillé de vérifier le résultat de cette modification dans le carnet de notes.';
$string['aggregationposition_help'] = 'Ce réglage détermine si les colonnes des tendances centrales de la catégorie et de la séquences sont affichées en premier ou en dernier dans les rapports du carnet de notes.';
$string['allstudents'] = 'Tous les stagiaires';
$string['contributiontocoursetotal'] = 'Contribution au total de la séquence';
$string['courseavg'] = 'Moyenne de la séquence';
$string['coursegradecategory'] = 'Catégorie de notes de la séquence';
$string['coursegradedisplaytype'] = 'Type d\'affichage des notes de la séquence';
$string['coursegradedisplayupdated'] = 'Le type d\'affichage des notes de la séquence a été modifié.';
$string['coursegradesettings'] = 'Réglages des notes de la séquence';
$string['coursename'] = 'Nom de la séquence';
$string['coursescales'] = 'Barèmes de la séquence';
$string['coursesettings'] = 'Réglages de la séquence';
$string['coursesettingsexplanation'] = 'Les réglages d\'évaluation de la séquence déterminent la présentation du carnet de notes pour tous les participants de la séquence.';
$string['coursesiamtaking'] = 'Les séquences que je suis';
$string['coursesiamteaching'] = 'Les séquences que je donne';
$string['coursetotal'] = 'Total de la séquence';
$string['errornocourse'] = 'Impossible d\'obtenir les informations de la séquence';
$string['feedback_help'] = 'Ce champ permet au formateur d\'ajouter des remarques sur la note donnée.';
$string['fixedstudents'] = 'Colonne stagiaires statique';
$string['fixedstudents_help'] = 'Permet aux notes de défiler horizontalement sans perdre de vue la colonne des stagiaires, en rendant statique cette dernière.';
$string['forstudents'] = 'Pour les stagiaires';
$string['grade_help'] = 'La note à donner au stagiaire pour son travail.';
$string['gradebookhiddenerror'] = 'Le carnet de notes est configuré de façon à cacher toutes ses données aux stagiaires.';
$string['gradeoutcomescourses'] = 'Objectifs de la séquence';
$string['hidden_help'] = 'Si cette case est cochée, les notes sont cachées aux stagiaires. Un délai peut être fixé au besoin, afin d\'afficher les notes après que l\'évaluation soit terminée.';
$string['hidetotalifhiddenitems_help'] = 'Ce réglage détermine si les totaux contenant un ou plusieurs éléments d\'évaluation cachés seront affichés pour les participants ou remplacés par un tiret (-). S\'ils sont affichés, les totaux seront calculés soit en incluant, soit en excluant les éléments d\'évaluation cachés. Si les éléments cachés sont exclus, le total vu par les participants sera différent de celui vu dans le rapport d\'évaluation par le formateur, puisque celui-ci voit toujours les totaux calculés à partir de tous les éléments, qu\'ils soient cachés ou non. Si les éléments cachés sont inclus, les participants seront potentiellement en mesure de déduire par le calcul la valeur des éléments cachés.';
$string['importcustom'] = 'Importer comme objectifs de cette séquence';
$string['incorrectcourseid'] = 'Le No de séquence est incorrect';
$string['nocategories'] = 'Les catégories de note ne peuvent être ajoutées ou trouvées dans cette séquence';
$string['nocourses'] = 'Il n\'y a pas encore de séquence';
$string['nooutcomes'] = 'Les éléments d\'objectif doivent être liés à un objectif de séquence. Il n\'y a cependant aucun objectif défini dans cette séquence. Voulez-vous en définir un ?';
$string['noreports'] = 'Vous n\'êtes inscrit à aucune séquence, et n\'enseignez dans aucune séquence sur cette plateforme.';
$string['noscales'] = 'Les éléments d\'objectif doivent être liés à un barème de séquence ou un barème global. Il n\'y a cependant aucun barème. Voulez-vous en définir un ?';
$string['notenrolled'] = 'Vous n\'êtes inscrit à aucune séquence sur cette plateforme.';
$string['notteachererror'] = 'Vous devez être formateur pour utiliser cette fonctionnalité.';
$string['outcomeassigntocourse'] = 'Attribuer un autre objectif à cette séquence';
$string['outcomescourse'] = 'Objectifs utilisés dans la séquence';
$string['outcomestandard_help'] = 'Un objectif standard est disponible dans tout le site, pour toutes les séquences.';
$string['overridesitedefaultgradedisplaytype_help'] = 'Si ce réglage est activé, les notes lettres et les valeurs limites des notes peuvent être configurées par séquence, au lieu d\'utiliser les valeurs par défaut de la plateforme.';
$string['recovergradesdefault_help'] = 'Par défaut, récupérer les anciennes notes lors de la ré-inscription d\'un participant à une séquence.';
$string['seeallcoursegrades'] = 'Voir toutes les notes de la séquence';
$string['setcategorieserror'] = 'Les catégories doivent être mises en place dans votre séquence avant de pouvoir leur attribuer des coefficients.';
$string['showallstudents'] = 'Afficher tous les stagiaires';
$string['showaverage_help'] = 'Si ce réglage est activé, la colonne avec la moyenne sera affichée. Les stagiaires pourraient alors être en mesure d\'estimer les notes d\'autres stagiaires, si la moyenne est calculée à partir de peu de notes. Pour des raisons de performance, la moyenne est une estimation lorsqu\'elle dépend d\'éléments cachés.';
$string['showcontributiontocoursetotal'] = 'Afficher la contribution au total de la séquence';
$string['showcontributiontocoursetotal_help'] = 'Ce réglage détermine si une colonne doit être affichée, comprenant la contribution en % de chaque élément d\'évaluation au pourcentage total de l\'utilisateur dans cette séquence, après pondération.';
$string['showhiddenitems_help'] = 'Spécifie si les éléments d\'évaluations cachés sont totalement invisibles ou si les noms des éléments d\'évaluations cachés sont visibles pour les stagiaires. * Afficher les éléments cachés : les noms des éléments d\'évaluations cachés sont affichés, mais les notes sont cachées * Cacher les éléments jusqu\'au : les éléments d\'évaluation et les notes sont totalement invisibles, jusqu\'à l\'échéance de la date fixée, s\'il y en a une. Une fois le date passée, l\'élément et les notes sont affichées * Cacher les éléments : les éléments d\'évaluation et les notes sont totalement invisibles';
$string['sumofgradesupgradedgrades'] = 'Remarque : la méthode de calcul de la tendance centrale « Somme des notes » a été changé à « Naturelle » à la séquence de la mise à jour du site. Puisque la méthode « Somme des notes » était utilisée dans cette séquence, il vous est conseillé de vérifier le résultat de cette modification dans le carnet de notes.';
$string['unenrolledusersinimport'] = 'Ce fichier d\'importation contenait les notes suivantes d\'utilisateurs n\'étant actuellement pas inscrits dans cette séquence : {$a}';
$string['usedcourses'] = 'Séquences utilisées';
$string['weight_help'] = 'Valeur utilisée pour déterminer l\'importance relative des éléments d\'évaluation dans une catégorie ou une séquence.';
$string['weightcourse'] = 'Utiliser les coefficients pour la séquence';
