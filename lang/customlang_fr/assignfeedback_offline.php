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

$string['confirmimport'] = 'Confirmer l\'importation des évaluations';
$string['enabled_help'] = 'Si ce réglage est activé, l\'intervenant pourra télécharger, puis déposer un formulaire d\'évaluation comprenant les évaluations des stagiaires.';
$string['feedbackupdate'] = 'Remplir le champ « {$a->field} » avec le texte« {$a->text} » pour le stagiaire « {$a->student} »';
$string['gradelockedingradebook'] = 'L\'évaluation de {$a} a été verrouillée dans le livret des évaluations';
$string['graderecentlymodified'] = 'L\'évaluation de {$a} a été modifiée dans la PAD plus récemment que dans le formulaire d\'évaluation.';
$string['gradesfile_help'] = 'Le formulaire d\'évaluation avec les évaluations modifiées. Ce fichier doit être un fichier CSV encodé en UTF-8, qui a été téléchargé depuis le travail, et doit contenir des colonnes pour les évaluations des stagiaires et leur identifiant.';
$string['gradeupdate'] = 'Mettre l\'évaluation {$a->grade} au stagiaire {$a->student}';
$string['ignoremodified_help'] = 'Lorsque le formulaire d\'évaluation est téléchargé depuis la PAD, il comporte la date de la dernière modification de chaque évaluation. Si l\'une des évaluations est modifiée dans la PAD après le téléchargement du formulaire, la PAD refusera d\'écraser cette évaluation modifiée lors de l\'importation des évaluations par défaut. L\'activation de cette option désactive ce contrôle de sécurité et permet à des évaluateurs d\'écraser les évaluations données par d\'autres.';
$string['nochanges'] = 'Aucune modification d\'évaluation n\'a été trouvée dans le formulaire déposé';
$string['offlinegradingworksheet'] = 'Évaluations';
$string['processgrades'] = 'Importer des évaluations';
$string['updatedgrades'] = '<strong>{$a->gradeupdatescount}</strong> évaluations et <strong>{$a->feedbackupdatescount}</strong> instances de feedbacks modifiées.';
