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

$string['assign:editothersubmission'] = 'Modifier le travail d\'un autre stagiaire';
$string['assign:revealidentities'] = 'Révéler l’identité des stagiaires';
$string['assign:viewblinddetails'] = 'Voir les identités des stagiaires quand les remises anonymes sont activées';
$string['attemptreopenmethod_help'] = 'Ce réglage détermine si un stagiaire peut effectuer de nouvelles tentatives pour le devoir. Pour chaque tentative, la note et le feedback sont enregistrés et peuvent être consultées par le formateur et le stagiaire. Les options disponibles sont : * Jamais - Une seule tentative est possible. * Manuellement - Des tentatives supplémentaires peuvent être autorisées par un enseignant. * Automatiquement jusqu\'à réussite - Des tentatives supplémentaires sont automatiquement autorisées jusqu\'à ce que le stagiaire atteigne la note nécessaire pour réussir le devoir, indiquée dans le carnet de notes.';
$string['blindmarking_help'] = 'Les remises anonymes cachent aux évaluateurs l\'identité des stagiaires. Les réglages des remises anonymes seront verrouillés dès qu\'un travail aura été remis ou une note donnée pour ce devoir.';
$string['blindmarkingenabledwarning'] = 'Les remises anonymes sont activées pour cette activité. Les notes ne seront pas ajoutées au carnet de notes jusqu\'à ce que les identités des stagiaires soient révélées dans le menu d\'évaluation.';
$string['confirmbatchgradingoperation'] = 'Voulez-vous vraiment {$a->operation} pour {$a->count} stagiaires ?';
$string['couldnotcreatecoursemodule'] = 'Impossible de créer le module de séquence.';
$string['downloadasfolders_help'] = 'Les travaux remis peuvent être téléchargés dans des dossiers. Les fichiers de chaque stagiaire sont placés dans un dossier séparé, avec les éventuels sous-dossiers, et ne sont pas renommés.';
$string['gradeoutofhelp_help'] = 'Saisir ici la note pour le travail du stagiaire. On peut indiquer des décimales.';
$string['gradestudent'] = 'Évaluer le stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['gradingduedate_help'] = 'Le délai pour l\'évaluation des devoirs par le formateur. Cette date est utilisée afin de prioriser les notifications du tableau de bord des formateurs.';
$string['gradingstudent'] = 'Évaluation de stagiaire';
$string['grantextensionforusers'] = 'Octroyer une prolongation à {$a} stagiaires';
$string['hidegrader'] = 'Cacher l\'identité des évaluateurs pour les stagiaires';
$string['hidegrader_help'] = 'Si ce réglage est activé, l\'identité de tout utilisateur qui évalue un travail remis dans un devoir ne sera pas affichée, afin que les stagiaires ne voient pas qui a évalué leur travail. Remarque : ce réglage n\'a pas d\'effet sur le champ de commentaires sur la page d\'évaluation.';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur se base sur le niveau cognitif atteint par le stagiaire dans une activité devoir.';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l\'interaction sociale atteinte par le stagiaire dans une activité devoir.';
$string['locksubmissionforstudent'] = 'Empêcher la remise d\'autres travaux par le stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['maxattempts_help'] = 'Le nombre maximal de tentatives de remise pouvant être effectuées par un stagiaire. Une fois ce nombre atteint, le travail remis ne pourra plus être rouvert.';
$string['modulename_help'] = 'Le module d\'activité devoir permet à un formateur de communiquer aux participants des tâches, de récolter des travaux et de leur fournir feedbacks et notes. Les stagiaires peuvent remettre des travaux sous forme numérique (fichiers), par exemple des documents traitement de texte, feuilles de calcul, images, sons ou séquences vidéo. En complément ou en plus, le devoir peut demander aux stagiaires de saisir directement un texte. Un devoir peut aussi être utilisé pour indiquer aux stagiaires des tâches à effectuer dans le monde réel et ne nécessitant pas la remise de fichiers numériques. Les stagiaires peuvent remettre un devoir individuellement ou comme membres d\'un groupe. Lors de l\'évaluation des devoirs, les formateurs peuvent donner aux stagiaires des feedbacks, leur envoyer des fichiers : travaux annotés, documents avec commentaires ou feedbacks audio. Les devoirs peuvent être évalués au moyen d\'une note numérique, d\'un barème spécifique ou d\'une méthode avancée comme une grille d\'évaluation. Les notes définitives sont enregistrées dans le carnet de notes.';
$string['multipleteams_desc'] = 'Ce devoir nécessite la remise des travaux en groupes. Vous faites partie de plusieurs groupes. Pour pouvoir remettre un travail, vous devez ne faire partie que d\'un seul groupe. Veuillez contacter votre formateur pour qu\'il change votre appartenance aux groupes.';
$string['noteam_desc'] = 'Ce devoir nécessite la remise des travaux en groupes. Vous ne faites partie d\'aucun groupe, et ne pouvez donc pas remettre de travail. Veuillez contacter votre formateur pour qu\'il vous ajoute à un groupe.';
$string['privacy:metadata:assignmessageexplanation'] = 'Les messages sont envoyés aux stagiaires par le système de messagerie.';
$string['privacy:studentpath'] = 'Devoirs des stagiaires';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} après le début de la séquence';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} avant le début de la séquence';
$string['relativedatessubmissiontimeleft'] = 'Calculé pour chaque stagiaire';
$string['removesubmissionconfirmforstudent'] = 'Voulez-vous vraiment supprimer les données remises par le stagiaire {$a} ?';
$string['removesubmissionforstudent'] = 'Supprimer le travail remis par le stagiaire : id={$a->id}, nom complet={$a->fullname}.';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'L\'option de réouverture « Automatiquement jusqu\'à réussite » n\'est pas compatible avec les remises anonymes, car les notes ne sont transmises au carnet de notes qu\'après que le nom du stagiaire est révélé.';
$string['requiresubmissionstatement'] = 'Demander aux stagiaires d\'accepter la déclaration de remise pour tous les devoirs';
$string['requiresubmissionstatement_help'] = 'Lorsque ce réglage est activé, les stagiaires doivent accepter une déclaration pour tous les devoirs de cette plateforme. Le texte de cette déclaration peut être modifié par l\'administrateur. Par défaut, sa teneur est : « Ce document est le fruit de mon propre travail, excepté les extraits dûment cités de travaux d\'autres personnes.»';
$string['revealidentities'] = 'Révéler les identités des stagiaires';
$string['revealidentitiesconfirm'] = 'Voulez-vous vraiment révéler les identités des stagiaires pour ce devoir ? Cette opération ne peut pas être annulée. Une fois les identités révélées, les notes seront transmises au carnet de notes.';
$string['reverttodraftforstudent'] = 'Remettre à l\'état de brouillon le travail du stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['sendlatenotifications_help'] = 'Si ce réglage est activé, les évaluateurs (normalement les formateurs) recevront un message lorsque les stagiaires remettent un travail en retard. La façon dont le message est délivré est configurable.';
$string['sendnotifications_help'] = 'Si ce réglage est activé, les évaluateurs (en principe les formateurs) recevront un message chaque fois qu\'un stagiaire remet un travail pour ce devoir, qu\'il soit en avance, à temps ou en retard. La méthode d\'envoi des messages est configurable.';
$string['sendstudentnotifications'] = 'Notifier les stagiaires';
$string['sendstudentnotifications_help'] = 'Si ce réglage est activé, les stagiaires reçoivent un message lors de la modification d\'une note ou d\'un feedback. Si un flux d\'évaluation est activé pour ce devoir, les notifications ne seront pas envoyés avant que la note ne soit « Publiée ».';
$string['sendstudentnotificationsdefault'] = 'Réglages par défaut pour « Notifier les stagiaires »';
$string['sendstudentnotificationsdefault_help'] = 'Définit la valeur par défaut de la case à cocher « Notifier les stagiaires » sur le formulaire d\'évaluation.';
$string['sendsubmissionreceipts'] = 'Envoyer aux stagiaires un accusé de réception';
$string['sendsubmissionreceipts_help'] = 'Ce réglage active les accusés de réception pour les stagiaires. Les stagiaires recevront alors une notification chaque fois qu\'ils remettent un travail pour un devoir.';
$string['studentnotificationworkflowstateerror'] = 'Le statut de l\'évaluation doit être « Publiée » pour en informer les stagiaires.';
$string['submissiondrafts'] = 'Exiger que les stagiaires cliquent sur le bouton envoyer';
$string['submissiondrafts_help'] = 'Si ce réglage est activé, les stagiaires devront explicitement cliquer sur un bouton de remise pour confirmer que leur devoir est terminé. Cela permet aux stagiaires de conserver dans le système une version brouillon de leur travail avant de l\'envoyer. Si le réglage est activé après que des stagiaires ont déjà remis leur travaux, ceux-ci seront considérés comme définitifs.';
$string['submissioneditable'] = 'Le stagiaire peut modifier ce travail remis';
$string['submissionlog'] = 'Stagiaire : {$a->fullname}, statut : {$a->status}';
$string['submissionnoteditable'] = 'Le stagiaire ne peut pas modifier ce travail remis';
$string['submissionstatement_help'] = 'Énoncé que chaque stagiaire doit accepter avant de remettre son travail';
$string['submissionstatementteamsubmission_help'] = 'Énoncé que chaque stagiaire doit accepter avant de remettre le travail de leur groupe';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Énoncé que chaque stagiaire doit accepter avant de remettre un travail en tant que membre d\'un groupe.';
$string['teamsubmission'] = 'Les stagiaires remettent leur travail en groupe';
$string['teamsubmission_help'] = 'Si ce réglage est activé, les stagiaires seront répartis en groupes, sur la base du jeu de groupes par défaut ou d\'un groupement choisi. Un travail remis en groupe sera partagé par tous les membres du groupe et tous les membres du groupe verront les modifications du devoir effectuées par les autres membres.';
$string['teamsubmissiongroupingid'] = 'Groupement pour les groupes de stagiaires';
$string['teamsubmissiongroupingid_help'] = 'Les groupes de ce groupement seront utilisés pour former les groupes de stagiaires de ce devoir. Si non renseigné, le jeu de groupes par défaut sera utilisé.';
$string['ungroupedusersoptional'] = 'Le réglage « Les stagiaires remettent leur travail en groupe » est activé et certains utilisateurs ne font partie d\'aucun groupe ou sont membres de plusieurs groupes. Veuillez prendre note que ces stagiaires remettront leur travail en tant que membre du « Groupe par défaut ».';
$string['unlocksubmissionforstudent'] = 'Permettre la remise de travaux pour le stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['usersnone'] = 'Aucun stagiaire n\'a accès à ce devoir.';
$string['viewgradingformforstudent'] = 'Afficher la page d\'évaluation du stagiaire : (id={$a->id}, fullname={$a->fullname}).';
$string['viewrevealidentitiesconfirm'] = 'Afficher la page de confirmation pour révéler les identités des stagiaires';
$string['viewsubmissionforuser'] = 'Afficher le travail remis du stagiaire {$a}';
