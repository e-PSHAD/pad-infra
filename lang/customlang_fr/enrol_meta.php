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
 * @package    enrol
 * @subpackage meta
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursesort'] = 'Trier la liste des séquences';
$string['coursesort_help'] = 'Ce réglage détermine si la liste des séquence est triée suivant l\'ordre de tri par défaut (défini dans la Gestion des séquences et catégories de l\'administration) ou alphabétiquement.';
$string['defaultgroupnametext'] = 'Séquence {$a->name} {$a->increment}';
$string['linkedcourse'] = 'Lier la séquence';
$string['meta:selectaslinked'] = 'Sélectionner la séquence comme méta-séquence';
$string['nosyncroleids_desc'] = 'Par défaut, toutes les attributions de rôles dans la séquence sont synchronisées des séquences parents vers les séquences enfants. Les rôles sélectionnés ici ne seront pas inclus dans le processus de synchronisation. Les rôles disponibles pour la synchronisation seront mis à jour lors de la prochaine exécution du cron.';
$string['pluginname'] = 'Lien méta-séquence';
$string['pluginname_desc'] = 'Le plugin d\'inscription lien méta-séquence synchronise les inscriptions et rôle entre différentes séquences.';
$string['privacy:metadata:core_group'] = 'Le plugin d\'inscription Lien méta-séquence peut créer un nouveau groupe ou utiliser un groupe existant pour y ajouter tous les participants de la séquence liée.';
$string['syncall_desc'] = 'Si ce réglage est activé, tous les utilisateurs sont synchronisés même s\'ils n\'ont aucun rôle dans la séquence parent. Dans le cas contraire, seuls les utilisateurs avec au moins un rôle synchronisé sont inscrits dans la séquence enfant.';
