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
 * @subpackage course
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychoosertabmode_desc'] = 'Le sélecteur d\'activité permet au formateur de choisir facilement les activités et ressources à ajouter à leur séquence. Ce réglage détermine les onglets à y afficher. L\'onglet « Favoris » n\'est affiché que si l\'utilisateur a marqué une ou plusieurs activités comme favorites et l\'onglet « Recommandés » n\'est affiché que si l\'administrateur du site a défini certaines activités comme recommandées.';
$string['aria:coursecategory'] = 'Catégorie de séquence';
$string['aria:courseimage'] = 'Image de la séquence';
$string['aria:coursename'] = 'Nom de la séquence';
$string['aria:courseshortname'] = 'Nom abrégé de la séquence';
$string['aria:favourite'] = 'La séquence est marquée comme favorite';
$string['coursealreadyfinished'] = 'Séquence déjà terminée';
$string['coursenotyetfinished'] = 'La séquence n\'est pas encore terminée';
$string['coursenotyetstarted'] = 'La séquence n\'a pas encore commencé';
$string['coursetoolong'] = 'La séquence est trop longue';
$string['customfield_visibletoteachers'] = 'Formateurs';
$string['customfieldsettings'] = 'Réglages des champs personnalisés des séquences communes';
$string['downloadcoursecontent'] = 'Télécharger les contenus de la séquence';
$string['downloadcoursecontent_help'] = 'Ce réglage détermine si les contenus de séquence peuvent être téléchargés par les utilisateurs disposant de la capacité adéquate (par défaut ceux qui ont le rôle de stagiaire ou de formateur).';
$string['enabledownloadcoursecontent'] = 'Activer le téléchargement de contenus de séquence';
$string['errorendbeforestart'] = 'La date de fin ({$a}) est antérieure à la date du début de la séquence.';
$string['favourite'] = 'Séquence marquée comme favorite';
$string['gradetopassnotset'] = 'Cette séquence n\'a pas de note pour passer. Une telle note peut être indiquée dans l\'élément d\'évaluation de la séquence (configuration du carnet de notes).';
$string['noaccesssincestartinfomessage'] = 'Bonjour {$a->userfirstname}, <p>Certains stagiaires de la séquence {$a->coursename} n\'ont jamais accédé à la séquence.</p>';
$string['nocourseactivity'] = 'Pas assez d\'activités de séquence entre le début et la fin de la séquence';
$string['nocourseendtime'] = 'La séquence n\'a pas de date de fin';
$string['nocoursesections'] = 'Aucune séance de séquence';
$string['nocoursestudents'] = 'Aucun stagiaire';
$string['norecentaccessesinfomessage'] = 'Bonjour {$a->userfirstname}, <p>Certains stagiaire de la séquence {$a->coursename} n\'ont pas accédé récemment à la séquence.</p>';
$string['noteachinginfomessage'] = 'Bonjour {$a->userfirstname}, <p>Des séquences dont la date de début est fixée la semaine prochaine ont été identifiées comme sans formateur ou sans inscription de stagiaire.</p>';
$string['privacy:completionpath'] = 'Achèvement de séquence';
$string['privacy:favouritespath'] = 'Information sur le marquage comme favorite de la séquence';
$string['privacy:metadata:activityfavouritessummary'] = 'Le système des séquences contient des informations sur les éléments du sélecteur d\'activités qui ont été marqués comme favoris par l\'utilisateur.';
$string['privacy:metadata:completionsummary'] = 'La séquence contient des informations d\'achèvement concernant l\'utilisateur.';
$string['privacy:metadata:favouritessummary'] = 'La séquence contient des informations en lien avec son marquage comme séquence favorite par l\'utilisateur.';
$string['privacy:perpage'] = 'Le nombre de séquences à afficher par page.';
$string['studentsatriskincourse'] = 'Stagiaires à risque dans la séquence {$a}';
$string['studentsatriskinfomessage'] = 'Bonjour {$a->userfirstname}, <p>Des stagiaires dans la séquence {$a->coursename} ont été identifiés comme en risque de décrochage.</p>';
$string['target:coursecompetencies'] = 'Stagiaires risquant de ne pas atteindre les compétences attribuées à une séquence';
$string['target:coursecompetencies_help'] = 'Cette cible décrit si un stagiaire est considéré comme risquant de ne pas atteindre les compétences attribuées à une séquence. Elle considère que toutes les compétences attribuées à la séquence doivent être atteintes avant la fin de la séquence.';
$string['target:coursecompletion'] = 'Stagiaires risquant de ne pas remplir les conditions d\'achèvement de la séquence';
$string['target:coursecompletion_help'] = 'Cette cible décrit si le stagiaire est considéré comme risquant de ne pas remplir les conditions d\'achèvement de la séquence.';
$string['target:coursedropout'] = 'Stagiaires risquant de décrocher';
$string['target:coursedropout_help'] = 'Cette cible décrit si un stagiaire est considéré comme risquant de décrocher.';
$string['target:coursegradetopass'] = 'Stagiaires risquant de ne pas atteindre la note minimale pour passer la séquence';
$string['target:coursegradetopass_help'] = 'Cette cible décrit si un stagiaire est considéré comme risquant de ne pas atteindre la note minimale pour passer la séquence.';
$string['target:noaccesssincecoursestart'] = 'Stagiaires qui n\'ont pas encore accédé à la séquence';
$string['target:noaccesssincecoursestart_help'] = 'Cette cible décrit les stagiaires qui n\'ont pas encore accédé à une séquence auxquels ils sont inscrits.';
$string['target:noaccesssincecoursestartinfo'] = 'Les stagiaires suivants sont inscrits dans une séquence qui a commencé, mais ils n\'ont jamais accédé à la séquence.';
$string['target:norecentaccesses'] = 'Stagiaires qui n\'ont pas accédé récemment à la séquence';
$string['target:norecentaccesses_help'] = 'Cette cible identifie les stagiaires qui n\'ont pas accédé à une séquence auxquels ils sont inscrits durant l\'intervalle fixé pour l\'analyse (par défaut, le mois passé).';
$string['target:norecentaccessesinfo'] = 'Les stagiaires suivants n\'ont pas accédé aux séquences auxquels ils sont inscrits dans l\'intervalle d\'analyse fixé (par défaut le mois dernier).';
$string['target:noteachingactivity'] = 'Séquences risquant de ne pas avoir lieu';
$string['target:noteachingactivity_help'] = 'Cette cible décrit si les séquences devant commencer durant la semaine à venir ont des activités d\'enseignement.';
$string['target:noteachingactivityinfo'] = 'Les séquences suivantes devant commencer les jours prochains risquent de ne pas pouvoir commencer parce qu\'elles n\'ont pas de formateur ou de stagiaire inscrits.';
$string['targetlabelstudentcompetenciesno'] = 'Stagiaire qui atteindra probablement les compétences attribuées à une séquence';
$string['targetlabelstudentcompetenciesyes'] = 'Stagiaire qui n\'atteindra probablement pas les compétences attribuées à une séquence';
$string['targetlabelstudentcompletionno'] = 'Stagiaire qui remplira probablement les conditions d\'achèvement de la séquence';
$string['targetlabelstudentcompletionyes'] = 'Stagiaire qui risque de ne pas remplir les conditions d\'achèvement de la séquence';
$string['targetlabelstudentdropoutyes'] = 'Stagiaire en risque de décrochage';
$string['targetlabelstudentgradetopassno'] = 'Stagiaire qui atteindra probablement la note minimale pour passer la séquence.';
$string['targetlabelstudentgradetopassyes'] = 'Stagiaire risquant de ne pas atteindre la note minimale pour passer la séquence.';
$string['targetlabelteachingno'] = 'Séquences risquant de ne pas avoir lieu';
$string['targetlabelteachingyes'] = 'Utilisateurs avec capacités d\'enseignement qui ont accès à la séquence';
