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
 * @package    report
 * @subpackage security
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_crawlers_details'] = '<p>L\'activation du réglage « Ouvert à Google » autorise les moteurs de recherche à accéder aux séquences en tant que visiteur anonyme. Il n\'y a aucune raison d\'activer ce réglage si l\'accès aux visiteurs anonymes n\'est pas autorisé.</p>';
$string['check_defaultuserrole_details'] = '<p>Tous les utilisateurs connectés possèdent les capacités du rôle par défaut. Veuillez vous assurer qu\'aucune capacité comportant des risques n\'est autorisée pour ce rôle.</p><p>Le seul type de rôle historique supporté pour un tel rôle est le rôle <em>Utilisateur authentifié</em>. La capacité de voir les séquences ne doit pas être autorisée.</p>';
$string['check_guestrole_details'] = '<p>Un rôle de visiteur anonyme est utilisé pour l\'accès temporaire aux séquences pour les utilisateurs anonymes. Veuillez vous assurer qu\'aucune capacité comportant des risques n\'est autorisée pour ce rôle.</p><p>Le seul type de rôle historique supporté pour un tel rôle est le rôle <em>Visiteur anonyme</em>.</p>';
$string['check_riskbackup_details_users'] = '<p>À cause des rôles ou des dérogations locales ci-dessus, les utilisateurs ci-dessous ont les permissions requises pour inclure dans les sauvegardes les données privées de n\'importe quel utilisateur inscrit dans leur séquence. Veuillez vous assurer que ces utilisateurs sont fiables et que le compte est protégé par un mot de passe fort.</p> {$a}';
