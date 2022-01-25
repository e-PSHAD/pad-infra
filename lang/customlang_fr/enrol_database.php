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
 * @subpackage database
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaultcategory'] = 'Catégorie par défaut des nouvelles séquences';
$string['defaultcategory_desc'] = 'La catégorie par défaut pour les séquences créées automatiquement. Utilisée lorsqu\'aucun identifiant n\'est spécifié pour la catégorie ou qu\'il n\'est pas trouvé.';
$string['ignorehiddencourses'] = 'Ignorer les séquences cachées';
$string['ignorehiddencourses_desc'] = 'Si cette option est activée, les utilisateurs ne seront pas inscrits aux séquences non disponibles pour les stagiaires.';
$string['localcoursefield'] = 'Champ séquence local';
$string['newcoursecategory'] = 'Champ catégorie des nouvelles séquences';
$string['newcoursefullname'] = 'Champ nom complet des nouvelles séquences';
$string['newcourseidnumber'] = 'Champ identifiant des nouvelles séquences';
$string['newcourseshortname'] = 'Champ nom abrégé des nouvelles séquences';
$string['newcoursetable'] = 'Table des nouvelles séquences de la base de données externe';
$string['newcoursetable_desc'] = 'Nom de la table contenant la liste des séquences à créer automatiquement. Si le champ n\'est pas renseigné, aucune séquence ne sera créée.';
$string['pluginname_desc'] = 'Vous pouvez utiliser une base de données externe (presque de n\'importe quel type) pour contrôler les inscriptions. On suppose que la base de données externe comporte au moins un champ contenant l\'identifiant de séquence et un champ contenant l\'identifiant de l\'utilisateur. Ces champs sont comparés à ceux que vous choisissez dans les tables de séquence et d\'utilisateurs dans la base Moodle.';
$string['remotecoursefield'] = 'Champ séquence de la base de données externe';
$string['remotecoursefield_desc'] = 'Nom du champ de la table de la base de données externe utilisé pour comparer les enregistrements de la table de séquence.';
$string['settingsheadernewcourses'] = 'Création de nouvelles séquences';
$string['templatecourse'] = 'Modèle des nouvelles séquences';
$string['templatecourse_desc'] = 'Option : les séquences créées automatiquement peuvent copier leurs réglages sur une séquence modèle. Indiquer ici le nom abrégé de cette séquence modèle.';
