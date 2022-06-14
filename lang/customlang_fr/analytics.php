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
 * @subpackage analytics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoroles'] = 'Le rôle de stagiaire ou d\'intervenant n\'a pas été défini. Veuillez les définir dans la page de configuration de l\'analyse de données.';
$string['nocourses'] = 'Aucune séquence à analyser';
$string['percentonline_help'] = 'Si votre organisation propose des séquences hybrides, quel pourcentage de travail est effectué en ligne par les stagiaires ? Indiquez un nombre entre 0 et 100.';
$string['timesplittingmethod_help'] = 'L\'intervalle d\'analyse définit quand le système calcule les prédictions, ainsi que la partie des journaux d\'activité considérée pour ces prédictions. Par exemple, la durée de la séquence peut être divisée en périodes, et une prédiction générée à la fin de chaque période.';
