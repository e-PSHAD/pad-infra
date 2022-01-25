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
 * @subpackage enrol
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Plugins d\'inscription aux séquences disponibles';
$string['assignnotpermitted'] = 'Vous n\'avez pas les permissions requises pour attribuer des rôles dans cette séquence.';
$string['defaultenrol'] = 'Ajouter une instance aux nouvelles séquences';
$string['defaultenrol_desc'] = 'Il est possible d\'ajouter par défaut ce plugin à tous les nouvelles séquences.';
$string['deleteinstanceconfirm'] = 'Vous allez supprimer la méthode d\'inscription « {$a->name} ». La totalité des {$a->users} utilisateurs inscrits au moyen de cette méthode seront désinscrits et toutes les données de séquence en lien avec ces utilisateurs, notamment les notes, l\'appartenance aux groupes et les abonnements aux forums seront également supprimés. Voulez-vous vraiment continuer ?';
$string['deleteinstanceconfirmself'] = 'Voulez-vous vraiment supprimer l\'instance « {$a->name} » qui vous donne accès à cette séquence ? Il est possible que vous ne puissiez plus accéder à cette séquence, si vous continuez.';
$string['disableinstanceconfirmself'] = 'Voulez-vous vraiment désactiver l\'instance « {$a->name} » qui vous donne accès à cette séquence ? Il est possible que vous ne puissiez plus accéder à cette séquence, si vous continuez.';
$string['enrolme'] = 'M\'inscrire dans cette séquence';
$string['enrolmentnewuser'] = '{$a->user} s\'est inscrit à la séquence « {$a->course} »';
$string['enrolnotpermitted'] = 'Vous n\'avez pas les permissions requises pour inscrire quelqu\'un dans cette séquence.';
$string['eventuserenrolmentcreated'] = 'Utilisateur inscrit dans une séquence';
$string['eventuserenrolmentdeleted'] = 'Utilisateur désinscrit d\'une séquence';
$string['extremovedsuspend'] = 'Désactiver l\'inscription à la séquence';
$string['extremovedsuspendnoroles'] = 'Désactiver l\'inscription à la séquence et retirer l\'attribution des rôles';
$string['extremovedunenrol'] = 'Désinscrire de la séquence l\'utilisateur';
$string['instanceeditselfwarningtext'] = 'Vous êtes inscrit à cette séquence au moyen de cette méthode d\'inscription. Des modifications pourraient empêcher votre accès à cette séquence.';
$string['noguestaccess'] = 'Les visiteurs anonymes ne peuvent pas accéder à cette séquence. Veuillez vous connecter.';
$string['notenrollable'] = 'Vous ne pouvez pas vous inscrire vous-même à cette séquence.';
$string['otheruserdesc'] = 'Les utilisateurs suivants ne sont pas inscrits dans cette séquence, mais y ont des rôles attribués ou hérités.';
$string['privacy:metadata:user_enrolments:status'] = 'Le statut de l\'inscription de l\'utilisateur dans une séquence';
$string['proceedtocourse'] = 'Continuer vers le contenu de la séquence';
$string['rolefromcategory'] = '{$a->role} (hérité d\'une catégorie de séquence)';
$string['rolefrommetacourse'] = '{$a->role} (hérité de la séquence parente)';
$string['rolefromthiscourse'] = '{$a->role} (attribué dans cette séquence)';
$string['sendfromcoursecontact'] = 'Du contact de la séquence';
$string['unassignnotpermitted'] = 'Vous n\'avez pas les permissions requises pour retirer des rôles dans cette séquence';
$string['unenrolconfirm'] = 'Voulez-vous vraiment désinscrire « {$a->user} » (inscrit via « {$a->enrolinstancename} ») de la séquence « {$a->course} » ?';
$string['unenrolleduser'] = 'L\'utilisateur « {$a->fullname} » a été désinscrit de la séquence.';
$string['unenrolnotpermitted'] = 'Vous n\'avez pas les permissions requises pour désinscrire cet utilisateur de cette séquence.';
$string['youenrolledincourse'] = 'Vous être inscrit à la séquence.';
$string['youunenrolledfromcourse'] = 'Vous êtes désinscrit de la séquence « {$a} ».';
