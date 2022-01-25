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
 * @subpackage manual
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enrolledincourserole'] = 'Inscrit à la séquence « {$a->course} » avec le rôle « {$a->role} »';
$string['expiredaction_help'] = 'Sélectionner une action à effectuer à l\'échéance de l\'inscription des utilisateurs. Veuillez noter que des données utilisateur et des réglages sont effacés de la séquence lors de la désinscription de la séquence.';
$string['expirymessageenrolledbody'] = 'Cher-ère {$a->user}, Ce message pour vous informer que votre inscription à la séquence « {$a->course} » arrivera à échéance le {$a->timeend}. Si vous avez besoin d\'aide, veuillez contacter {$a->enroller}.';
$string['expirymessageenrollerbody'] = 'Des inscriptions à la séquence « {$a->course} » arriveront à échéance durant les {$a->threshold} prochains pour les utilisateurs suivants : {$a->users} Pour prolonger leur inscription, veuillez visiter {$a->extendurl}';
$string['manual:unenrol'] = 'Désinscrire des utilisateurs de la séquence';
$string['manual:unenrolself'] = 'Se désinscrire de la séquence';
$string['pluginname_desc'] = 'Le plugin Inscriptions manuelles permet à un utilisateur disposant des permissions requises, par exemple un formateur, d\'inscrire manuellement des utilisateurs au moyen d\'un lien dans l\'administration de la séquence. Ce plugin devrait en principe rester activé, car d\'autres plugins, comme l\'auto-inscription, peuvent en avoir besoin.';
$string['status_desc'] = 'Permettre l\'accès à la séquence des utilisateurs inscrits manuellement. Ce réglage devrait rester activé dans la plupart des cas.';
$string['status_help'] = 'Ce réglage détermine si des utilisateurs peuvent être inscrits manuellement par un utilisateur disposant des permissions requises, par exemple un formateur, via un lien dans l\'administration de la séquence.';
$string['unenrolselfconfirm'] = 'Voulez-vous vraiment vous désinscrire de la séquence « {$a} » ?';
$string['unenroluser'] = 'Voulez-vous vraiment désinscrire « {$a->user} » de la séquence « {$a->course} » ?';
$string['wscannotenrol'] = 'L\'instance de plugin ne peut pas inscrire manuellement un utilisateur dans la séquence d\'identifiant {$a->courseid}';
$string['wsnoinstance'] = 'L\'instance du plugin Inscriptions manuelles n\'existe pas ou est désactivée pour cette séquence (identifiant {$a->courseid})';
$string['wsusercannotassign'] = 'Vous n\'avez pas les permissions requises pour attribuer ce rôle ({$a->roleid}) à cet utilisateur ({$a->userid}) dans cette séquence ({$a->courseid}).';
