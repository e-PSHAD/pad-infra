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
 * @package    tool
 * @subpackage uploaduser
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['uploadusers_help'] = 'Il est possible d\'importer manuellement des comptes utilisateurs (et optionnellement inscrits à des séquences) à partir d\'un fichier texte, ce fichier doit être formaté de la façon suivante : * chaque ligne du fichier contient un enregistrement ; * les données de chaque enregistrement sont séparées par une virgule (ou un autre caractère de séparation) ; * le premier enregistrement contient le nom des champs qui composent les enregistrements, et détermine ainsi la structure de la suite du fichier ; * les champs requis sont username, password, firstname, lastname, email <a href="https://docs.moodle.org/fr/Importer_des_utilisateurs" target="_blank">Plus d\'aide à ce sujet</a>';
