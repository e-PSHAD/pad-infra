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
 * @subpackage rating
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregatetype_help'] = 'Le type de combinaison définit comment les évaluations sont combinées pour former l\'évaluation finale dans le livret des évaluations. * Moyenne des évaluations : la moyenne de toutes les évaluations * Nombre d\'évaluations : le nombre des éléments évalués est l\'évaluation finale. Ce total ne peut pas dépasser l\'évaluation maximale fixée pour l\'activité * Maximum : l\'évaluation finale est l\'évaluation la plus haute * Minimum : l\'évaluation finale est l\'évaluation la plus basse * Somme : Toutes les évaluations sont additionnées. Ce total ne peut pas dépasser l\'évaluation maximale fixée pour l\'activité. Si l\'option « Aucune évaluation » est sélectionnée, l\'activité n\'apparaîtra pas dans le livret des évaluations.';
