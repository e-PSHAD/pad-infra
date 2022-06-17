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
 * @package    assignsubmission
 * @subpackage onlinetext
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['default_help'] = 'Si ce réglage est activé, cette méthode de remise de travaux sera activée par défaut pour tous les nouveaux travaux.';
$string['nosubmission'] = 'Aucun travail n\'a encore été remis pour ce travail';
$string['numwordsforlog'] = 'Nombre de mot du travail : {$a} mots';
$string['privacy:metadata:assignmentid'] = 'Identifiant du travail';
$string['privacy:metadata:textpurpose'] = 'Le texte remis pour cette remise du travail.';
$string['wordlimit_help'] = 'Si les travaux en format texte sont activés, ce réglage indique le nombre maximal de mots que les stagiaires peuvent remettre.';
$string['wordlimitexceeded'] = 'Le nombre maximal de mots pour ce travail est de {$a->limit} mots, alors que vous essayez de remettre un travail de {$a->count} mots. Veuillez retravailler votre travail et essayer à nouveau.';
