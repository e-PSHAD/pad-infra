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
 * @subpackage quiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adaptive_help'] = 'Si ce paramètre est activé, il est permis de répondre plusieurs fois à une même question au cours d\'une même tentative à un test. Par exemple, si une réponse est marquée comme incorrecte, le stagiaire peut réessayer immédiatement de répondre correctement. Toutefois, selon la fonction choisie dans « Appliquer les pénalités », une pénalité sera habituellement déduite à chaque essai incorrect.';
$string['affectedstudents'] = 'Stagiaires concernés';
$string['confirmremovesectionheading'] = 'Voulez-vous vraiment supprimer le titre de séance « {$a} » ?';
$string['modulename_help'] = 'Le module d\'activité test permet au formateur de créer des tests comportant des questions de divers types, notamment des questions à choix multiple, vrai-faux, d\'appariement, à réponses courtes ou calculées. Le formateur peut autoriser plusieurs tentatives pour un test, les questions étant mélangées ou choisies aléatoirement dans une banque de questions. Une limite de temps peut être fixée. Chaque tentative est évaluée automatiquement, à l\'exception des questions de composition, et la note est enregistrée dans le carnet de notes. Le formateur peut choisir quand et si il veut que des indices, un feedback et les réponses correctes soient proposés aux stagiaires. Les tests peuvent notamment être utilisés : * pour des évaluations certificatives (examen), * comme mini-tests pour des devoirs de lecture ou au terme de l\'étude d\'un thème, * comme exercice pour un examen, en utilisant les questions de l\'examen de l\'année précédente, * pour fournir un feedback de performance, * pour l\'auto-évaluation.';
$string['onlyteachersexport'] = 'Seuls les formateurs peuvent exporter des questions';
$string['onlyteachersimport'] = 'Seuls les formateurs (éditeurs) peuvent importer des questions';
$string['questiondeleted'] = 'Cette question a été supprimée. Veuillez contacter votre formateur.';
$string['showteacherattempts'] = 'Afficher les tentatives des formateurs';
$string['shufflequestions_help'] = 'Si ce réglage est activé, à chaque tentative du test, l\'ordre des questions dans cette section sera mélangé dans un ordre aléatoire différent. Ceci permet de rendre plus difficile le partage des réponses entre stagiaires, mais rend également plus difficile les discussions entre les stagiaires et le formateur sur une question déterminée.';
$string['subnetnotice'] = 'Ce test a été configuré de façon à ne pouvoir être effectué que depuis certains ordinateurs. Votre ordinateur n\'est pas situé dans une sous-réseau autorisé. En tant que formateur, vous pouvez toutefois le prévisualiser.';
