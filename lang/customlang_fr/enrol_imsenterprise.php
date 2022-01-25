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
 * @subpackage imsenterprise
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowunenrol_desc'] = 'Si ce réglage est activé, les inscriptions aux séquences seront retirées lorsque spécifié dans les données IMS Enterprise.';
$string['coursesettings'] = 'Options séquence';
$string['createnewcategories'] = 'Créer de nouvelles catégories de séquence (cachées) si inexistantes dans Moodle';
$string['createnewcourses'] = 'Créer de nouvelles séquences (cachées) si inexistantes dans Moodle';
$string['createnewcourses_desc'] = 'Si ce réglage est activé, le plugin IMS Enterprise peut créer de nouvelles séquences pour celles qui se trouvent dans les données IMS mais pas dans la base de données de la PAD. Toutes les séquences générées sont cachées lors de leur création.';
$string['settingfullname'] = 'Tag de description IMS pour le nom complet de la séquence';
$string['settingshortname'] = 'Tag de description IMS pour le nom abrégé de la séquence';
$string['settingsummary'] = 'Tag de description IMS pour le résumé de la séquence';
$string['settingsummarydescription'] = 'Champ optionnel. Veuillez sélectionner « Laisser vide » si vous ne voulez pas spécifier de résumé de séquence';
$string['truncatecoursecodes'] = 'Tronquer les codes de séquence à cette longueur';
$string['truncatecoursecodes_desc'] = 'Dans certaines situations, il peut y avoir des codes de séquence que vous désirez tronquer à une longueur fixe avant le traitement des données. Dans ce cas, tapez le nombre de caractères désirés dans ce champ. Sinon, laissez le champ vide et aucune troncature ne sera effectuée.';
$string['updatecourses'] = 'Modifier la séquence';
$string['updatecourses_desc'] = 'Si ce réglage est activé, le plugin d\'inscription IMS Enterprise peut modifier le nom complet et le nom abrégé des séquences (si le champ « recstatus » est fixé à 2, ce qui représente une modification).';
