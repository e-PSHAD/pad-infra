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
 * @subpackage file
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = 'Déposer un ou plusieurs fichiers de feedback pour tous les stagiaires sélectionnés ?';
$string['enabled_help'] = 'Si ce réglage est activé, le formateur peut déposer des fichiers comme feedback lors de l\'évaluation des devoirs. Ces fichiers peuvent être, par exemple mais pas seulement, les travaux des stagiaires annotés, des documents avec des commentaires ou des feedbacks audio.';
$string['feedbackfileadded'] = 'Nouveau fichier de feedback « {$a->filename} » pour le stagiaire « {$a->student} »';
$string['feedbackfileupdated'] = 'Fichier de feedback « {$a->filename} » modifié pour le stagiaire « {$a->student} »';
$string['privacy:metadata:filepurpose'] = 'Fichiers de feedback du formateur pour le stagiaire.';
