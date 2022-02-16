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
 * @package    assignfeedback
 * @subpackage offline
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enabled_help'] = 'Si ce réglage est activé, le intervenant pourra télécharger, puis déposer un formulaire d\'évaluation comprenant les notes des stagiaires.';
$string['feedbackupdate'] = 'Remplir le champ « {$a->field} » avec le texte« {$a->text} » pour le stagiaire « {$a->student} »';
$string['gradesfile_help'] = 'Le formulaire d\'évaluation avec les notes modifiées. Ce fichier doit être un fichier CSV encodé en UTF-8, qui a été téléchargé depuis le devoir, et doit contenir des colonnes pour les notes des stagiaires et leur identifiant.';
$string['gradeupdate'] = 'Mettre la note {$a->grade} au stagiaire {$a->student}';
