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
 * @package    mnetservice
 * @subpackage enrol
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablecourseson'] = 'Séquences disponibles sur {$a}';
$string['availablecoursesonnone'] = 'Le serveur <a href="{$a->hosturl}">{$a->hostname}</a> n\'offre aucune séquence à nos utilisateurs.';
$string['clientname_help'] = 'Inscription et désinscription d\'utilisateurs de votre plateformes à des séquences d\'autres plateformes.';
$string['noroamingusers'] = 'Pour s\'inscrire dans des séquences distantes, les utilisateurs doivent avoir la capacité « {$a} » dans le contexte système. Or il n\'y a actuellement aucun utilisateur avec cette capacité. Cliquer le bouton Continuer pour attribuer la capacité requise à l\'un ou plusieurs rôles de votre site.';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'Le type d\'inscription sur le serveur distant, qui a été utilisé pour inscrire l\'utilisateur dans sa séquence';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'L\'identifiant de la séquence sur le serveur distant';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Le Service d\'inscription à distance enregistre les informations sur les inscriptions d\'utilisateurs locaux dans des séquences sur des serveurs distants.';
