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
 * @package    mod
 * @subpackage scorm
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaultgradesettings'] = 'Réglages par défaut des évaluations';
$string['gradehighest'] = 'Évaluation la plus haute';
$string['grademethod_help'] = 'La méthode de notation définit comment l\'évaluation d\'une tentative est calculée. Il y a 4 méthodes possibles pour cela : * Objets complétés : le nombre d\'objets d\'apprentissage complétés/réussis de l\'activité * Évaluation la plus haute : le plus haut score AICC obtenu dans les objets d\'apprentissage achevés * Évaluation moyenne : la moyenne des scores AICC obtenus * Somme : la somme des scores AICC obtenus';
$string['grademethoddesc'] = 'La méthode d\'évaluation définit comment l\'évaluation d\'une tentative unique est calculée.';
$string['maximumgradedesc'] = 'Ce réglage détermine l\'évaluation maximale par défaut de l\'activité';
$string['modulename_help'] = 'Un paquetage SCORM est constitué d\'un ensemble de fichiers assemblés suivant un standard défini pour les objets d\'apprentissages. Le module d\'activité SCORM permet de déposer des paquetages SCORM ou AICC sous la forme d\'archives ZIP et de les ajouter à un cours. Le contenu est en principe affiché sur plusieurs pages avec une navigation permettant de passer d\'une page à l\'autre. Il y a diverses options d\'affichage, dans une fenêtre surgissante, avec une table des matières, avec des boutons de navigation, etc. Les activités SCORM comportent en général des questions et les évaluations sont enregistrées dans le livret des évaluations. Les activités SCORM peuvent être utilisées : * pour présenter des contenus multimédias et des animations * comme outil d\'évaluation';
$string['whatgradedesc'] = 'Ce réglage détermine quelle évaluation est enregistrée dans le livret des évaluations lorsque de multiples tentatives sont autorisées : la plus haute, la moyenne des tentatives ou la dernière.';
