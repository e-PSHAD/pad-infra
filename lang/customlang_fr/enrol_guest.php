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
 * @subpackage guest
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowguests'] = 'Les visiteurs anonymes ont accès à cette séquence';
$string['password_help'] = 'Un mot de passe permet de restreindre l\'accès aux seuls utilisateurs anonymes qui connaissent ce mot de passe. Les utilisateurs anonymes devront saisir le mot de passe à chaque accès à la séquence.';
$string['pluginname_desc'] = 'Le plugin accès anonyme n\'autorise qu\'un accès à la séquence. Il n\'inscrit effectivement pas les utilisateurs';
$string['requirepassword_desc'] = 'Utiliser un mot de passe pour l\'accès anonyme dans les nouvelles séquences et empêcher la suppression du mot de passe d\'accès des séquences existantes.';
$string['status_help'] = 'Ce réglage détermine si un utilisateur peut accéder à la séquence anonymement, sans nécessiter d\'inscription.';
