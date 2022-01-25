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
 * @subpackage backup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncrestorecompletedetail'] = 'Le processus de restauration s\'est terminé correctement. Après avoir cliqué sur « Continuer », vous serez dirigé vers la <a href="{$a}">séquence de l\'élément restauré</a>.';
$string['asyncrestoreinprogress_help'] = 'Les restaurations de séquence asynchrones en cours sont affichées ici.';
$string['asyncreturn'] = 'Retourner à la séquence';
$string['automatedmaxkepthelp'] = 'Ce réglage spécifie le nombre maximal de sauvegardes automatiques récentes à conserver pour chaque séquence. Les sauvegardes plus anciennes sont supprimées automatiquement.';
$string['automatedminkepthelp'] = 'Si des sauvegardes plus anciennes qu\'un nombre spécifié de jours sont supprimées, il peut arriver qu\'une séquence inactive n\'ait plus de sauvegarde. Afin d\'éviter ceci, un nombre minimal de sauvegardes conservées doit être spécifié.';
$string['backupcourse'] = 'Sauvegarde séquence : {$a}';
$string['backupcoursedetails'] = 'Détails de la séquence';
$string['backupcoursesections'] = 'Séances de la séquence';
$string['backupsection'] = 'Sauvegarde séance de séquence : {$a}';
$string['backuptypecourse'] = 'Séquence';
$string['choosefilefromcoursebackup'] = 'Zone de sauvegarde de séquence';
$string['choosefilefromcoursebackup_help'] = 'Les sauvegardes de séquence effectuées avec les réglages par défaut sont enregistrées ici.';
$string['config_overwrite_conf'] = 'Permet à l\'utilisateur d\'écraser la configuration de la séquence actuelle.';
$string['config_overwrite_course_fullname'] = 'Par défaut, remplacer le nom complet de la séquence avec celui indiqué dans le fichier de sauvegarde. Ce réglage requiert l\'activation de « Écraser la configuration de la séquence ». L\'utilisateur doit avoir en outre la capacité de modifier le nom complet de la séquence (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Par défaut, remplacer le nom abrégé de la séquence avec celui indiqué dans le fichier de sauvegarde. Ce réglage requiert l\'activation de « Écraser la configuration de la séquence ». L\'utilisateur doit avoir en outre la capacité de modifier le nom abrégé de la séquence (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Par défaut, remplacer la date de début de la séquence avec celle indiquée dans le fichier de sauvegarde. Ce réglage requiert l\'activation de « Écraser la configuration de la séquence ». L\'utilisateur doit avoir en outre la capacité de décaler les dates de la séquence (moodle/restore:rolldates)';
$string['configlegacyfiles'] = 'Ce réglage détermine s\'il faut inclure les fichiers de séquence obsolètes dans les sauvegardes. Les fichiers de séquence obsolètes proviennent de versions de Moodle antérieures à la version 2.0.';
$string['confirmnewcoursecontinue'] = 'Avertissement de nouvelle séquence';
$string['confirmnewcoursecontinuequestion'] = 'Une séquence temporaire (cachée) va être créée lors du processus de restauration de la séquence. Pour annuler la restauration, cliquer sur Annuler. Ne pas fermer la fenêtre du navigateur durant la restauration.';
$string['copiesinprogress'] = 'Cette séquence a des copies en cours. <a href="{$a}">Consulter les copies en cours.</a>';
$string['copycoursedesc'] = 'Cette séquence sera dupliquée et placée dans la catégorie sélectionnée.';
$string['copycourseheading'] = 'Copier une séquence';
$string['copycoursetitle'] = 'Copier la séquence : {$a}';
$string['copyformfail'] = 'L\'envoi du formulaire de copie de séquence a échoué.';
$string['copyingcourse'] = 'Copie de séquence en cours';
$string['copyprogressheading'] = 'Copies de séquence en cours';
$string['copyprogressheading_help'] = 'Cette table indique le statut de toutes vos copies de séquence non terminées';
$string['copyprogresstitle'] = 'Progression de la copie de séquence';
$string['coursecategory'] = 'Catégorie où la séquence sera restaurée';
$string['coursesettings'] = 'Réglages de la séquence';
$string['error_block_for_module_not_found'] = 'Instance de bloc orpheline (id : {$a->bid}) trouvée dans un module de séquence (id : {$a->mid}). Ce bloc ne sera pas sauvegardé.';
$string['error_course_module_not_found'] = 'Module de séquence orphelin (id : {$a}) détecté. Ce module ne sera pas sauvegardé.';
$string['generallegacyfiles'] = 'Inclure les fichiers de séquence obsolètes';
$string['importcurrentstage0'] = 'Sélection de séquence';
$string['importgeneralmaxresults'] = 'Nombre maximal de séquences listées pour importation';
$string['importgeneralmaxresults_desc'] = 'Ce réglage détermine le nombre de séquences qui sont listées lors de la première étape du processus d\'importation';
$string['importsuccess'] = 'Importation terminée. Cliquer sur continuer pour revenir à la séquence.';
$string['keptroles_help'] = 'Les utilisateurs ayant les rôles sélectionnés seront inscrits avec ce ces rôles dans la nouvelle séquence. Aucune donnée utilisateur ne sera copiée, à moins que l\'option « Inclure les données utilisateur » soit activée.';
$string['mergerestoredefaults'] = 'Restaurer les réglages par défaut lors de la fusion dans une autre séquence';
$string['morecoursesearchresults'] = 'Plus de {$a} séquences trouvées, affichage des {$a} premières';
$string['nomatchingcourses'] = 'Aucune séquence à afficher';
$string['norestoreoptions'] = 'Il n\'y a pas de catégorie, ni de séquence où effectuer la restauration.';
$string['pendingasyncdeletedetail'] = 'Cette séquence a une sauvegarde asynchrone en attente.<br/>Les séquences ne peuvent pas être supprimées avant que cette sauvegarde soit terminée.';
$string['pendingasyncedit'] = 'Une sauvegarde asynchrone de cette séquence est en attente. Veuillez ne pas modifier cette séquence avant la fin de la sauvegarde.';
$string['privacy:metadata:backup_controllers:itemid'] = 'L\'identifiant de la séquence';
$string['privacy:metadata:backup:detailsofarchive'] = 'Cette archive contient diverses données en lien avec une séquence, telles que notes, inscriptions d\'utilisateurs et données d\'activités.';
$string['privacy:metadata:backup:externalpurpose'] = 'La finalité de cette archive est d\'enregistrer des informations en lien avec une séquence, qui pourra être restaurée ultérieurement.';
$string['qcategory2coursefallback'] = 'La catégorie de questions « {$a->name} », située dans le contexte de catégorie system/course dans le fichier de sauvegarde, sera créée dans le contexte de la séquence durant la restauration';
$string['question2coursefallback'] = 'La catégorie de questions « {$a->name} », située dans le contexte de catégorie system/course dans le fichier de sauvegarde, sera créée dans le contexte de la séquence durant la restauration';
$string['replacerestoredefaults'] = 'Restaurer les réglages par défaut lors de la restauration vers une autre séquence en supprimant son contenu';
$string['restorecourse'] = 'Restaurer la séquence';
$string['restorecoursesettings'] = 'Réglages de la séquence';
$string['restoredcourseid'] = 'ID de la séquence restaurée : {$a}';
$string['restoreexecutionsuccess'] = 'La séquence a été restaurée avec succès. En cliquant sur le bouton Continuer, vous serez dirigé vers la page d\'accueil de la séquence.';
$string['restorenewcoursefullname'] = 'Nouveau nom de la séquence';
$string['restorenewcourseshortname'] = 'Nouveau nom abrégé de la séquence';
$string['restoresection'] = 'Restaurer la séance';
$string['restoretocourse'] = 'Restaurer vers la séquence';
$string['restoretocurrentcourse'] = 'Restaurer dans cette séquence';
$string['restoretocurrentcourseadding'] = 'Fusionner la séquence sauvegardée avec cette séquence';
$string['restoretocurrentcoursedeleting'] = 'Supprimer le contenu de cette séquence, puis restaurer';
$string['restoretoexistingcourse'] = 'Restaurer dans une séquence existante';
$string['restoretoexistingcourseadding'] = 'Fusionner la séquence sauvegardée dans la séquence existante';
$string['restoretoexistingcoursedeleting'] = 'Supprimer le contenu de la séquence existante, puis restaurer';
$string['restoretonewcourse'] = 'Restaurer comme nouvelle séquence';
$string['restoringcourse'] = 'Restauration de la séquence en cours';
$string['rootsettinglegacyfiles'] = 'Inclure les fichiers de séquence obsolètes';
$string['rootsettinglogs'] = 'Inclure les journaux de la séquence';
$string['selectacourse'] = 'Sélectionner une séquence';
$string['setting_course_fullname'] = 'Nom de la séquence';
$string['setting_course_shortname'] = 'Nom abrégé de la séquence';
$string['setting_course_startdate'] = 'Date de début de la séquence';
$string['setting_overwrite_conf'] = 'Écraser la configuration de la séquence';
$string['setting_overwrite_course_fullname'] = 'Écraser le nom complet de la séquence';
$string['setting_overwrite_course_shortname'] = 'Écraser le nom abrégé de la séquence';
$string['setting_overwrite_course_startdate'] = 'Écraser la date de début de la séquence';
$string['skiphidden'] = 'Omettre les séquences cachées';
$string['skiphiddenhelp'] = 'Choisir s\'il faut ou non omettre les séquences cachées';
$string['skipmodifdays'] = 'Omettre les séquences non modifiées depuis';
$string['skipmodifdayshelp'] = 'Choisir s\'il faut ou non omettre les séquences non modifiées depuis un certain nombre de jours';
$string['skipmodifprev'] = 'Omettre les séquences non modifiées depuis la dernière sauvegarde';
$string['skipmodifprevhelp'] = 'Choisir s\'il faut ou non omettre les séquences n\'ayant pas été modifiées depuis la dernière sauvegarde. Requiert l\'activation des journaux.';
$string['storagecourseandexternal'] = 'Zone de sauvegarde de séquence et dossier spécifié';
$string['storagecourseonly'] = 'Zone de sauvegarde de séquence';
$string['totalcoursesearchresults'] = 'Nombre de séquences : {$a}';
$string['unnamedsection'] = 'Séance sans nom';
$string['userdata_help'] = 'Si ce réglage est activé, les données telles que les messages de forums, travaux remis, etc. seront copiées dans la nouvelle séquence pour tous les utilisateurs ayant un rôle sélectionné dans « Inclure les inscriptions de rôle »';
