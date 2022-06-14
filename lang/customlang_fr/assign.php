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
 * @subpackage assign
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Vous avez des travaux qui requièrent votre attention';
$string['allowsubmissions'] = 'Autoriser l\'utilisateur à ajouter ou modifier ses travaux pour ce travail.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Les détails du travail et le formulaire de remise de document seront disponibles dès le <strong>{$a}</strong>';
$string['allowsubmissionsfromdatesummary'] = 'Ce travail acceptera la remise de documents dès le <strong>{$a}</strong>';
$string['alwaysshowdescription_help'] = 'Si ce réglage est désactivé, la description du travail ci-dessus ne sera visible qu\'à partir de la date d\'ouverture du formulaire de remise.';
$string['assign:addinstance'] = 'Ajouter un travail';
$string['assign:editothersubmission'] = 'Modifier le travail d\'un autre stagiaire';
$string['assign:exportownsubmission'] = 'Exporter ses propres travaux remis';
$string['assign:grade'] = 'Évaluer un travail';
$string['assign:manageoverrides'] = 'Gérer les dérogations de travail';
$string['assign:revealidentities'] = 'Révéler l’identité des stagiaires';
$string['assign:submit'] = 'Envoyer un travail';
$string['assign:view'] = 'Consulter un travail';
$string['assign:viewblinddetails'] = 'Voir les identités des stagiaires quand les remises anonymes sont activées';
$string['assignmentisdue'] = 'Travail à effectuer';
$string['assignmentname'] = 'Nom du travail';
$string['assignmentplugins'] = 'Plugins de travail';
$string['assignmentsperpage'] = 'Travaux par page';
$string['attemptreopenmethod_help'] = 'Ce réglage détermine si un stagiaire peut effectuer de nouvelles tentatives pour le travail. Pour chaque tentative, l\'évaluation et le feedback sont enregistrés et peuvent être consultées par l\'intervenant et le stagiaire. Les options disponibles sont : * Jamais - Une seule tentative est possible. * Manuellement - Des tentatives supplémentaires peuvent être autorisées par un intervenant. * Automatiquement jusqu\'à réussite - Des tentatives supplémentaires sont automatiquement autorisées jusqu\'à ce que le stagiaire atteigne l\'évaluation nécessaire pour réussir le travail, indiquée dans le livret des évaluations.';
$string['backtoassignment'] = 'Retour au travail';
$string['batchoperationconfirmsetmarkingallocation'] = 'Définir l\'attribution de l\'évaluation pour tous les travaux remis sélectionnés ?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Définir le statut de l\'évaluation pour tous les travaux remis sélectionnés ?';
$string['blindmarking_help'] = 'Les remises anonymes cachent aux évaluateurs l\'identité des stagiaires. Les réglages des remises anonymes seront verrouillés dès qu\'un travail aura été remis ou une évaluation donnée pour ce travail.';
$string['blindmarkingenabledwarning'] = 'Les remises anonymes sont activées pour cette activité. Les évaluations ne seront pas ajoutées au livret des évaluations jusqu\'à ce que les identités des stagiaires soient révélées dans le menu d\'évaluation.';
$string['confirmbatchgradingoperation'] = 'Voulez-vous vraiment {$a->operation} pour {$a->count} stagiaires ?';
$string['conversionexception'] = 'Impossible de convertir le travail. Exception retournée : {$a}.';
$string['couldnotconvertgrade'] = 'Impossible de convertir l\'évaluation du travail de l\'utilisateur {$a}';
$string['couldnotcreatecoursemodule'] = 'Impossible de créer le module de séquence.';
$string['couldnotcreatenewassignmentinstance'] = 'Impossible de créer l\'instance du nouveau travail.';
$string['couldnotfindassignmenttoupgrade'] = 'Impossible de trouver l\'instance de l\'ancien travail à mettre à jour.';
$string['crontask'] = 'Traitement en tâche de fond du module travail';
$string['currentassigngrade'] = 'Évaluation actuelle dans le travail';
$string['currentgrade'] = 'Évaluation actuelle dans le livret des évaluations';
$string['cutoffdate_help'] = 'Si cette date est indiquée, le travail n\'autorisera aucune remise après ce délai, sauf octroi d\'une prolongation.';
$string['cutoffdatefromdatevalidation'] = 'La date limite ne doit pas être antérieure à la date après laquelle la remise des travaux est permise.';
$string['defaultsettings'] = 'Réglages par défaut des travaux';
$string['defaultsettings_help'] = 'Ces réglages définissent les réglages par défaut de tous les nouveaux travaux.';
$string['downloadasfolders_help'] = 'Les travaux remis peuvent être téléchargés dans des dossiers. Les fichiers de chaque stagiaire sont placés dans un dossier séparé, avec les éventuels sous-dossiers, et ne sont pas renommés.';
$string['duedate_help'] = 'Cette date est celle du délai de remise du travail. La remise des travaux sera permise après cette date, mais les travaux remis après cette date seront marqués en retard. Pour empêcher la remise après une certaine date, veuillez indiquer une date limite de remise.';
$string['duedatereached'] = 'La date de remise de ce travail est passée';
$string['errornosubmissions'] = 'Il n\'y a pas de travail remis à télécharger';
$string['errorquickgradingvsadvancedgrading'] = 'Les évaluations n\'ont pas été enregistrées, car ce travail utilise actuellement l\'évaluation avancée';
$string['eventassessablesubmitted'] = 'Travail remis';
$string['eventoverridecreated'] = 'Dérogation de travail créée';
$string['eventoverridedeleted'] = 'Dérogation de travail supprimée';
$string['eventoverrideupdated'] = 'Dérogation de travail modifiée';
$string['eventsubmissioncreated'] = 'Travail créé';
$string['eventsubmissiongraded'] = 'Travail évalué';
$string['eventsubmissionupdated'] = 'Travail modifié';
$string['extensionnotafterfromdate'] = 'La date de prolongation doit être ultérieure à la date après laquelle la remise des travaux est permise.';
$string['feedbackavailableanonsmall'] = 'Nouveau feedback pour le travail {$a->assignment}';
$string['feedbackavailablesmall'] = '{$a->username} a donné un feedback pour le travail {$a->assignment}';
$string['feedbackpluginforgradebook'] = 'Le plugin feedback qui transmettra des commentaires au livret des évaluations';
$string['fixrescalednullgrades'] = 'Ce travail comporte des évaluations erronées. Vous pouvez <a href="{$a->link}">corriger automatiquement ces évaluations</a>. Ceci pourrait avoir une influence sur les totaux de la séquence.';
$string['gradelocked'] = 'Cette évaluation est verrouillée ou modifiée dans le livret des évaluations';
$string['gradeoutofhelp_help'] = 'Saisir ici l\'évaluation pour le travail du stagiaire. On peut indiquer des décimales.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} a modifié son travail remis pour « <em>{$a->assignment}</em> » le {$a->timeupdated}.<br /><br />Le travail remis est <a href="{$a->url}">disponible sur la plateforme</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} a modifié son travail remis pour {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} a modifié son travail remis pour « {$a->assignment} » le {$a->timeupdated}. Ce travail est disponible ici : {$a->url}';
$string['gradestudent'] = 'Évaluer le stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['gradingduedate_help'] = 'Le délai pour l\'évaluation des travaux par l\'intervenant. Cette date est utilisée afin de prioriser les notifications du tableau de bord des intervenants.';
$string['gradingstudent'] = 'Évaluation de stagiaire';
$string['grantextensionforusers'] = 'Octroyer une prolongation à {$a} stagiaires';
$string['hidegrader'] = 'Cacher l\'identité des évaluateurs pour les stagiaires';
$string['hidegrader_help'] = 'Si ce réglage est activé, l\'identité de tout utilisateur qui évalue un travail remis dans un travail ne sera pas affichée, afin que les stagiaires ne voient pas qui a évalué leur travail. Remarque : ce réglage n\'a pas d\'effet sur le champ de commentaires sur la page d\'évaluation.';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur se base sur le niveau cognitif atteint par le stagiaire dans une activité travail.';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l\'interaction sociale atteinte par le stagiaire dans une activité travail.';
$string['introattachments_help'] = 'Des fichiers supplémentaires à utiliser dans le travail peuvent être ajoutés, par exemple des modèles de réponse. Les liens de téléchargement de ces fichiers seront affichés sur la page du travail, sous la description.';
$string['latesubmissions'] = 'Travaux en retard';
$string['locksubmissionforstudent'] = 'Empêcher la remise d\'autres travaux par le stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['manageassignfeedbackplugins'] = 'Gérer les plugins de feedback des travaux';
$string['manageassignsubmissionplugins'] = 'Gérer les plugins de remise de travaux';
$string['maxattempts_help'] = 'Le nombre maximal de tentatives de remise pouvant être effectuées par un stagiaire. Une fois ce nombre atteint, le travail remis ne pourra plus être rouvert.';
$string['maxgrade'] = 'Évaluation maximale';
$string['maxperpage'] = 'Nombre de travaux par page';
$string['maxperpage_help'] = 'Le nombre maximum de travaux qu\'un évaluateur peut voir dans la page d\'évaluation des travaux. Ce réglage est utile pour éviter des lenteurs d\'affichage dans les séquences où il y a de très nombreux participants.';
$string['messageprovider:assign_notification'] = 'Notifications de travaux';
$string['modulename'] = 'Travail';
$string['modulename_help'] = 'Le module d\'activité travail permet à un intervenant de communiquer aux participants des tâches, de récolter des travaux et de leur fournir feedbacks et évaluations. Les stagiaires peuvent remettre des travaux sous forme numérique (fichiers), par exemple des documents traitement de texte, feuilles de calcul, images, sons ou séquences vidéo. En complément ou en plus, le travail peut demander aux stagiaires de saisir directement un texte. Un travail peut aussi être utilisé pour indiquer aux stagiaires des tâches à effectuer dans le monde réel et ne nécessitant pas la remise de fichiers numériques. Les stagiaires peuvent remettre un travail individuellement ou comme membres d\'un groupe. Lors de l\'évaluation des travaux, les intervenants peuvent donner aux stagiaires des feedbacks, leur envoyer des fichiers : travaux annotés, documents avec commentaires ou feedbacks audio. Les travaux peuvent être évalués au moyen d\'une évaluation numérique, d\'un barème spécifique ou d\'une méthode avancée comme une grille d\'évaluation. Les évaluations définitives sont enregistrées dans le livret des évaluations.';
$string['modulenameplural'] = 'Travaux';
$string['multipleteams_desc'] = 'Ce travail nécessite la remise des travaux en groupes. Vous faites partie de plusieurs groupes. Pour pouvoir remettre un travail, vous devez ne faire partie que d\'un seul groupe. Veuillez contacter votre intervenant pour qu\'il change votre appartenance aux groupes.';
$string['nolatesubmissions'] = 'Aucun travail en retard accepté';
$string['noonlinesubmissions'] = 'Ce travail ne requiert pas de fichier à remettre de votre part';
$string['nooverridedata'] = 'Vous devez indiquer une dérogation pour au moins un des réglages du travail.';
$string['nosubmission'] = 'Rien n\'a été déposé pour ce travail';
$string['nosubmissionsacceptedafter'] = 'Aucun travail accepté après';
$string['noteam_desc'] = 'Ce travail nécessite la remise des travaux en groupes. Vous ne faites partie d\'aucun groupe, et ne pouvez donc pas remettre de travail. Veuillez contacter votre intervenant pour qu\'il vous ajoute à un groupe.';
$string['overdue'] = 'Le travail est en retard de {$a}';
$string['page-mod-assign-view'] = 'Page principale du module travail';
$string['page-mod-assign-x'] = 'Toute page du module travail';
$string['pluginadministration'] = 'Administration du travail';
$string['pluginname'] = 'Travail';
$string['preventsubmissionnotingroup'] = 'Requiert un groupe pour remettre un travail';
$string['preventsubmissionnotingroup_help'] = 'Si ce réglage est activé, les utilisateurs qui ne sont pas membres d\'un groupe ne pourront pas remettre de travail.';
$string['preventsubmissions'] = 'Empêcher l\'utilisateur de déposer ou de modifier des travaux.';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Données de feedback du travail.';
$string['privacy:metadata:assigngrades'] = 'Enregistre les évaluations de l\'utilisateur pour le travail';
$string['privacy:metadata:assignmentid'] = 'Identifiant du travail';
$string['privacy:metadata:assignmessageexplanation'] = 'Les messages sont envoyés aux stagiaires par le système de messagerie.';
$string['privacy:metadata:assignoverrides'] = 'Enregistre les informations des dérogations du travail';
$string['privacy:metadata:assignperpage'] = 'Nombre de travaux affichés par page.';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Données des remises du travail.';
$string['privacy:metadata:grade'] = 'L\'évaluation numérique pour ce travail remis. Peut être déterminée par un barème, mais est toujours convertie en nombre à virgule.';
$string['privacy:studentpath'] = 'Travaux des stagiaires';
$string['privacy:submissionpath'] = 'Travail remis';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} après le début de la séquence';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} avant le début de la séquence';
$string['relativedatessubmissiontimeleft'] = 'Calculé pour chaque stagiaire';
$string['removesubmissionconfirmforstudent'] = 'Voulez-vous vraiment supprimer les données remises par le stagiaire {$a} ?';
$string['removesubmissionforstudent'] = 'Supprimer le travail remis par le stagiaire : id={$a->id}, nom complet={$a->fullname}.';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'L\'option de réouverture « Automatiquement jusqu\'à réussite » n\'est pas compatible avec les remises anonymes, car les évaluations ne sont transmises au livret des évaluations qu\'après que le nom du stagiaire est révélé.';
$string['requireallteammemberssubmit_help'] = 'Si ce réglage est activé, tous les membres du groupe doivent cliquer sur le bouton de remise du travail pour qu\'il soit considéré comme remis. Dans le cas contraire, le travail du groupe sera considéré comme remis dès que l\'un de ses membres clique sur le bouton de remise.';
$string['requiresubmissionstatement'] = 'Demander aux stagiaires d\'accepter la déclaration de remise pour tous les travaux';
$string['requiresubmissionstatement_help'] = 'Lorsque ce réglage est activé, les stagiaires doivent accepter une déclaration pour tous les travaux de cette plateforme. Le texte de cette déclaration peut être modifié par l\'administrateur. Par défaut, sa teneur est : « Ce document est le fruit de mon propre travail, excepté les extraits dûment cités de travaux d\'autres personnes.»';
$string['revealidentities'] = 'Révéler les identités des stagiaires';
$string['revealidentitiesconfirm'] = 'Voulez-vous vraiment révéler les identités des stagiaires pour ce travail ? Cette opération ne peut pas être annulée. Une fois les identités révélées, les évaluations seront transmises au livret des évaluations.';
$string['reverttodefaults'] = 'Revenir aux réglages par défaut du travail';
$string['reverttodraftforstudent'] = 'Remettre à l\'état de brouillon le travail du stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['search:activity'] = 'Travail – information sur l\'activité';
$string['sendlatenotifications_help'] = 'Si ce réglage est activé, les évaluateurs (normalement les intervenants) recevront un message lorsque les stagiaires remettent un travail en retard. La façon dont le message est délivré est configurable.';
$string['sendnotifications_help'] = 'Si ce réglage est activé, les évaluateurs (en principe les intervenants) recevront un message chaque fois qu\'un stagiaire remet un travail, qu\'il soit en avance, à temps ou en retard. La méthode d\'envoi des messages est configurable.';
$string['sendstudentnotifications'] = 'Notifier les stagiaires';
$string['sendstudentnotifications_help'] = 'Si ce réglage est activé, les stagiaires reçoivent un message lors de la modification d\'une évaluation ou d\'un feedback. Si un flux d\'évaluation est activé pour ce travail, les notifications ne seront pas envoyées avant que l\'évaluation ne soit « Publiée ».';
$string['sendstudentnotificationsdefault'] = 'Réglages par défaut pour « Notifier les stagiaires »';
$string['sendstudentnotificationsdefault_help'] = 'Définit la valeur par défaut de la case à cocher « Notifier les stagiaires » sur le formulaire d\'évaluation.';
$string['sendsubmissionreceipts'] = 'Envoyer aux stagiaires un accusé de réception';
$string['sendsubmissionreceipts_help'] = 'Ce réglage active les accusés de réception pour les stagiaires. Les stagiaires recevront alors une notification chaque fois qu\'ils remettent un travail.';
$string['settings'] = 'Réglages du travail';
$string['studentnotificationworkflowstateerror'] = 'Le statut de l\'évaluation doit être « Publiée » pour en informer les stagiaires.';
$string['submissiondrafts'] = 'Exiger que les stagiaires cliquent sur le bouton envoyer';
$string['submissiondrafts_help'] = 'Si ce réglage est activé, les stagiaires devront explicitement cliquer sur un bouton de remise pour confirmer que leur travail est terminé. Cela permet aux stagiaires de conserver dans le système une version brouillon de leur travail avant de l\'envoyer. Si le réglage est activé après que des stagiaires ont déjà remis leur travaux, ceux-ci seront considérés comme définitifs.';
$string['submissioneditable'] = 'Le stagiaire peut modifier ce travail remis';
$string['submissionlog'] = 'Stagiaire : {$a->fullname}, statut : {$a->status}';
$string['submissionnoteditable'] = 'Le stagiaire ne peut pas modifier ce travail remis';
$string['submissionreceipthtml'] = '<p>Vous avez remis un travail pour « <em>{$a->assignment}</em> »</p> <p>Vous pouvez consulter l\'état de votre <a href="{$a->url}">travail</a>.</p>';
$string['submissionreceiptsmall'] = 'Vous avez remis votre travail pour {$a->assignment}';
$string['submissionreceipttext'] = 'Vous avez remis un travail pour « {$a->assignment} ». Vous pouvez consulter l\'état de votre travail : {$a->url}';
$string['submissionslockedshort'] = 'Travail verrouillé';
$string['submissionstatement_help'] = 'Énoncé que chaque stagiaire doit accepter avant de remettre son travail';
$string['submissionstatementteamsubmission_help'] = 'Énoncé que chaque stagiaire doit accepter avant de remettre le travail de leur groupe';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Énoncé que chaque stagiaire doit accepter avant de remettre un travail en tant que membre d\'un groupe.';
$string['submitassignment'] = 'Envoyer le travail';
$string['submitassignment_help'] = 'Une fois ce travail envoyé, vous ne pourrez plus y effectuer de modification.';
$string['teamsubmission'] = 'Les stagiaires remettent leur travail en groupe';
$string['teamsubmission_help'] = 'Si ce réglage est activé, les stagiaires seront répartis en groupes, sur la base du jeu de groupes par défaut ou d\'un groupement choisi. Un travail remis en groupe sera partagé par tous les membres du groupe et tous les membres du groupe verront les modifications du travail effectuées par les autres membres.';
$string['teamsubmissiongroupingid'] = 'Groupement pour les groupes de stagiaires';
$string['teamsubmissiongroupingid_help'] = 'Les groupes de ce groupement seront utilisés pour former les groupes de stagiaires de ce travail. Si non renseigné, le jeu de groupes par défaut sera utilisé.';
$string['textinstructions'] = 'Instructions pour le travail';
$string['ungroupedusers'] = 'Le réglage « Requiert un groupe pour remettre un travail » est activé et certains utilisateurs ne sont membres d\'aucun groupe ou membres de plusieurs groupes. Cette situation les empêchera de remettre un travail.';
$string['ungroupedusersoptional'] = 'Le réglage « Les stagiaires remettent leur travail en groupe » est activé et certains utilisateurs ne font partie d\'aucun groupe ou sont membres de plusieurs groupes. Veuillez prendre note que ces stagiaires remettront leur travail en tant que membre du « Groupe par défaut ».';
$string['unlocksubmissionforstudent'] = 'Permettre la remise de travaux pour le stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['userassignmentdefaults'] = 'Réglages par défaut du travail pour l\'utilisateur';
$string['usersnone'] = 'Aucun stagiaire n\'a accès à ce travail.';
$string['userswhoneedtosubmit'] = 'Utilisateurs devant valider l\'envoi du travail : {$a}';
$string['viewgradebook'] = 'Afficher le livret des évaluations';
$string['viewgradingformforstudent'] = 'Afficher la page d\'évaluation du stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['viewrevealidentitiesconfirm'] = 'Afficher la page de confirmation pour révéler les identités des stagiaires';
$string['viewsubmissionforuser'] = 'Afficher le travail remis du stagiaire {$a}';
$string['viewsubmissiongradingtable'] = 'Afficher le tableau d\'évaluation du travail';
