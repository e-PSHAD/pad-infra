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
 * @subpackage self
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customwelcomemessage_help'] = 'Un message d\'accueil personnalisé peut être ajouté en texte pur ou en format Moodle, avec des balises HTML et la syntaxe multilingue. Les paramètres suivants peuvent être inclus dans le message : * nom de la séquence {$a->coursename} * lien vers le profil de l\'utilisateur {$a->profileurl} * adresse de courriel de l\'utilisateur {$a->email} * nom complet de l\'utilisateur {$a->fullname}';
$string['expiredaction_help'] = 'Sélectionner une action à effectuer à l\'échéance de l\'inscription des utilisateurs. Veuillez noter que des données utilisateur et des réglages sont effacés de la séquence lors de la désinscription de la séquence.';
$string['expirymessageenrolledbody'] = 'Cher {$a->user}, Ce message est une notification de la prochaine échéance le {$a->timeend} de votre inscription à la séquence « {$a->course} ». Si vous avez besoin d\'aide, veuillez contacter {$a->enroller}.';
$string['expirymessageenrollerbody'] = 'L\'auto-inscription dans la séquence « {$a->course} » arrivera à échéance dans {$a->threshold} pour les utilisateurs suivants : {$a->users} Pour prolonger leur inscription, visitez {$a->extendurl}';
$string['groupkey_help'] = 'En plus de restreindre l\'accès à la séquence aux seuls utilisateurs qui connaissent la clef, l\'utilisation d\'une clef d\'inscription de groupe permet d\'ajouter automatiquement les utilisateurs à un groupe lors de leur inscription à la séquence. Pour utiliser une clef d\'inscription de groupe, une clef d\'inscription doit être indiquée dans les réglages de la séquence, ainsi qu\'une clef d\'inscription de groupe dans les réglages du groupe.';
$string['longtimenosee_help'] = 'Si un participant ne visite pas une séquence durant ce laps de temps, il est automatiquement désinscrit de cette séquence.';
$string['newenrols_desc'] = 'Permettre par défaut à des utilisateurs de s\'inscrire eux-mêmes à de nouvelles séquences.';
$string['newenrols_help'] = 'Ce réglage détermine si un utilisateur peut s\'inscrire lui-même à cette séquence.';
$string['password_help'] = 'Une clef d\'inscription permet de restreindre l\'accès à la séquence aux seuls utilisateurs qui connaissent la clef. Si le champ n\'est pas renseigné, n\'importe quel utilisateur peut s\'inscrire à la séquence. Si une clef d\'inscription est spécifiée, les utilisateurs tentant de s\'inscrire à la séquence devront saisir cette clef, uniquement lors de leur premier accès à la séquence.';
$string['pluginname_desc'] = 'Le plugin d\'auto-inscription permet aux utilisateurs de choisir les séquences qu\'ils veulent suivre. Les séquences peuvent être protégées par une clef d\'inscription. À l\'interne, l\'inscription est effectuée au moyen du plugin Inscription manuelles, qui doit être activé pour la même séquence.';
$string['requirepassword_desc'] = 'Exiger la clef d\'inscription dans les nouvelles séquences et empêcher la suppression de la clef d\'inscription des séquences existantes.';
$string['self:enrolself'] = 'S\'inscrire dans une séquence';
$string['self:unenrol'] = 'Désinscrire de la séquence les utilisateurs';
$string['self:unenrolself'] = 'Se désinscrire de la séquence';
$string['sendcoursewelcomemessage_help'] = 'Après qu\'ils se sont inscrits dans une séquence, les utilisateurs recevront un message de bienvenue par courriel. Si ce message est envoyé avec comme expéditeur le contact de la séquence (par défaut le intervenant) et que plus d\'un utilisateur possède ce rôle, l\'expéditeur est le premier utilisateur à qui ce rôle a été attribué.';
$string['status_desc'] = 'Activer la méthode d\'auto-inscription dans les nouvelles séquences.';
$string['unenrolselfconfirm'] = 'Voulez-vous vraiment vous désinscrire de la séquence « {$a} » ?';
$string['unenroluser'] = 'Voulez vous vraiment désinscrire « {$a->user} » de la séquence « {$a->course} » ?';
$string['welcometocoursetext'] = 'Bienvenue à la séquence « {$a->coursename} » ! Si vous ne l\'avez pas encore fait, veuillez modifier et compléter votre profil : {$a->profileurl} Bon travail dans cette séquence !';
