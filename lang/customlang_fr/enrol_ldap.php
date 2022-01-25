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
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Attribuer le rôle « {$a->role_shortname} » à l\'utilisateur « {$a->user_username} » dans la séquence « {$a->course_shortname} » (identifiant {$a->course_id})';
$string['assignrolefailed'] = 'Échec de l\'attribution du rôle « {$a->role_shortname} » à l\'utilisateur « {$a->user_username} » dans la séquence « {$a->course_shortname} » (identifiant {$a->course_id})';
$string['autocreate'] = 'Des séquences peuvent être créées automatiquement si des inscriptions existent pour une séquence qui n\'existe pas encore dans la PAD.';
$string['autocreation_settings'] = 'Réglages de la création automatique de séquence';
$string['autoupdate_settings'] = 'Réglages de mise à jour automatique des séquences';
$string['cannotcreatecourse'] = 'Impossible de créer la séquence : données requises manquantes dans l\'enregistrement LDAP !';
$string['cannotupdatecourse'] = 'Impossible de mettre à jour la séquence : données requises manquantes dans l\'enregistrement LDAP ! Identifiant de la séquence : « {$a->idnumber} »';
$string['cannotupdatecourse_duplicateshortname'] = 'Impossible de mettre à jour la séquence : nom abrégé déjà existant. La séquence d\'identifiant « {$a->idnumber} » a été sautée…';
$string['category'] = 'Catégorie des séquences créées automatiquement';
$string['course_fullname'] = 'Facultatif : champ LDAP d\'où tirer le nom complet de la séquence.';
$string['course_idnumber_key'] = 'Identifiant de la séquence';
$string['course_settings'] = 'Réglages de l\'inscription aux séquences';
$string['course_shortname'] = 'Facultatif : champ LDAP d\'où tirer le nom abrégé de la séquence.';
$string['course_summary'] = 'Facultatif : champ LDAP d\'où tirer le résumé de la séquence.';
$string['coursenotexistskip'] = 'La séquence « {$a} » n\'existe pas et l\'auto-création des séquences est désactivée, ignoré';
$string['courseupdated'] = 'La séquence d\'identifiant « {$a->idnumber} » a été correctement mise à jour.';
$string['courseupdateskipped'] = 'La séquence d\'identifiant « {$a->idnumber} » ne nécessite pas de mise à jour. Elle a été sautée.';
$string['createcourseextid'] = 'CREATE Utilisateur inscrit dans une séquence inexistante « {$a->courseextid} »';
$string['createnotcourseextid'] = 'Utilisateur inscrit dans une séquence inexistante « {$a->courseextid} »';
$string['creatingcourse'] = 'Création de la séquence « {$a} »';
$string['duplicateshortname'] = 'La création de la séquence a échoué, car le nom abrégé de la séquence existe déjà. La séquence d\'identifiant « {$a->idnumber} » a été ignorée…';
$string['emptyenrolment'] = 'Inscription vide pour le rôle « {$a->role_shortname} » dans la séquence « {$a->course_shortname} »';
$string['enroluser'] = 'Inscrire l\'utilisateur « {$a->user_username} » dans la séquence « {$a->course_shortname} » (id {$a->course_id})';
$string['enroluserenable'] = 'Inscription activée pour l\'utilisateur « {$a->user_username} » dans la séquence « {$a->course_shortname} » (id {$a->course_id})';
$string['extcourseidinvalid'] = 'L\'identifiant de la séquence externe n\'est pas valide !';
$string['extremovedsuspend'] = 'Inscription désactivée pour l\'utilisateur « {$a->user_username} » dans la séquence « {$a->course_shortname} » (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Inscription désactivée et rôles retirés pour l\'utilisateur « {$a->user_username} » dans la séquence « {$a->course_shortname} » (id {$a->course_id})';
$string['extremovedunenrol'] = 'Désinscrire l\'utilisateur « {$a->user_username} » de la séquence « {$a->course_shortname} » (id {$a->course_id})';
$string['objectclass'] = 'Classe objectClass utilisée pour la recherche de séquence. D\'habitude « posixGroup ».';
$string['role_mapping'] = '<p>Pour chaque rôle, vous devez spécifier tous les contextes LDAP où les groupes qui représentent les séquences sont situés. Séparez les différents contextes avec un point-virgule (;).</p><p> Vous devez également spécifier l\'attribut que votre serveur LDAP utilise pour les membres d\'un groupe, qui est habituellement « member » ou « memberUid ».</p>';
$string['synccourserole'] = '== synchronisation de la séquence « {$a->idnumber} » pour le rôle « {$a->role_shortname} »';
$string['template'] = 'Facultatif : les séquences créées automatiquement peuvent copier leurs réglages sur une séquence modèle.';
$string['unassignrole'] = 'Retrait de l\'attribution du rôle « {$a->role_shortname} » de l\'utilisateur « {$a->user_username} » de la séquence « {$a->course_shortname} » (id {$a->course_id})';
$string['unassignrolefailed'] = 'Échec du retrait de l\'attribution du rôle « {$a->role_shortname} » de l\'utilisateur « {$a->user_username} » de la séquence « {$a->course_shortname} » (id {$a->course_id})';
