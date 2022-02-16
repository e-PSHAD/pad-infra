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
 * @subpackage admin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowcoursethemes'] = 'Autoriser les thèmes de séquence';
$string['alternativefullnameformat_desc'] = 'Ce réglage définit comment les noms sont affichés aux utilisateurs disposant de la capacité <em>viewfullnames</em> (par défaut, les utilisateurs ayant le rôle de gestionnaire, de intervenant ou de intervenant non éditeur). Les paramètres fictifs pouvant être utilisés sont les mêmes que ceux du réglage « Format d\'affichage des noms complets ».';
$string['backup_shortname'] = 'Utiliser le nom de la séquence dans le nom du fichier de sauvegarde';
$string['backup_shortnamehelp'] = 'Utiliser le nom de la séquence dans le nom du fichier de sauvegarde';
$string['calendartype_desc'] = 'Sélectionner un type de calendrier par défaut pour tout le site. Ce réglage peut être court-circuité dans les réglages de chaque séquence ou par les utilisateurs dans leur profil personnel.';
$string['configallowcategorythemes'] = 'Si vous activez ce réglage, les thèmes pourront être définis au niveau des catégories. Le thème défini pour la catégorie sera hérité par toutes les sous-catégories et toutes les séquences qui s\'y trouvent, à moins qu\'un thème propre n\'y soit défini spécifiquement. ATTENTION ! L\'activation de cette option pourrait dégrader la performance de votre site.';
$string['configallowcoursethemes'] = 'Si vous activez ce réglage, les thèmes pourront être définis au niveau des séquences. Les thèmes de séquence auront priorité sur tous les autres réglages de thème (thème du site, de la catégorie, de la cohorte, de l\'utilisateur ou défini dans l\'URL).';
$string['configallowuserthemes'] = 'Si vous activez ce réglage, les utilisateurs pourront choisir leur propre thème. Le thème choisi par l\'utilisateur aura priorité sur le thème du site (mais pas sur les thèmes des séquences).';
$string['configallusersaresitestudents'] = 'Pour les activités affichées sur la page d\'accueil du site, TOUS les utilisateurs doivent-ils être considérés comme des stagiaires ? Si vous choisissez « Oui », tout utilisateur possédant un compte confirmé pourra participer à ces activités en tant que stagiaire. Si vous choisissez « Non », seuls les participants d\'au moins une séquence pourront accéder aux activités de la page d\'accueil.';
$string['configautologinguests'] = 'Connecter automatiquement en tant que visiteur anonyme les utilisateurs accédant directement à une séquence ouverte aux visiteurs anonymes.';
$string['configcoursegraceperiodafter'] = 'Classer comme « en cours » les anciennes séquences durant ce nombre de journées après la date de fin de la séquence.';
$string['configcoursegraceperiodbefore'] = 'Classer comme « en cours » les futures séquences durant ce nombre de journées avant la date de début de la séquence.';
$string['configcourseoverviewfilesext'] = 'Une liste d\'extensions de nom des fichiers image de séquence autorisées (séparées par des virgules)';
$string['configcourseoverviewfileslimit'] = 'Le nombre maximal de fichiers pouvant être ajoutés à un résumé de séquence. Le premier fichier image ajouté est utilisé comme image de séquence dans la vue d\'ensemble des séquences sur le tableau de bord des utilisateurs. Les autres fichiers ne sont affichés que sur la page avec la liste des séquences.';
$string['configcoursesperpage'] = 'Saisissez le nombre de séquences à afficher par page dans la liste des séquences.';
$string['configcourseswithsummarieslimit'] = 'Le nombre maximum de séquences à afficher dans les listes des séquences, y compris les résumés, avant de passer à une liste plus simple, sans les résumés.';
$string['configdefaultrequestcategory'] = 'Les séquences demandées par les utilisateurs qui en ont la capacité seront automatiquement classées dans cette catégorie, à moins qu\'ils puissent choisir une catégorie différente.';
$string['configdefaultrequestedcategory'] = 'Catégorie par défaut où placer les séquences dont la demande a été approuvée.';
$string['configdefaultuserroleid'] = 'Tous les utilisateurs connectés auront les capacités du rôle spécifié ici, au niveau du site, EN PLUS de celles de tous les autres rôles qu\'ils ont déjà. Par défaut, il s\'agit du rôle « Utilisateur authentifié ». Il est à remarquer que cela n\'entrera pas en conflit avec les autres rôles disponibles, à moins que vous n\'interdisiez des capacités : cela permet simplement de s\'assurer que tous les utilisateurs possèdent les capacités qui ne peuvent être attribuées au niveau des séquences (par exemple écrire des articles de blog, gérer son calendrier, etc.).';
$string['configenableanalytics'] = 'Les modèles d\'analyse de données, par exemple « Stagiaires en risque de décrochage » ou « Activités à venir à effectuer », peuvent générer des prédictions, envoyer des notifications d\'indications et offrir d\'autres actions, comme l\'envoi de messages aux utilisateurs.';
$string['configfrontpagecourselimit'] = 'Nombre maximal de séquences';
$string['configfrontpagecourselimithelp'] = 'Ce réglage détermine le nombre maximal de séquences à afficher dans les listes de séquence sur la page d\'accueil du site.';
$string['configgradebookroles'] = 'Ce réglage permet de configurer les rôles apparaissant dans le carnet de notes. Pour être mentionnés dans le carnet de notes d\'une séquence, les utilisateurs doivent avoir au moins l\'un de ces rôles dans cette séquence.';
$string['confighiddenuserfields'] = 'Veuillez sélectionner quelles informations vous désirez cacher aux autres utilisateurs de la séquence que les administrateurs/intervenants. Vous pourrez ainsi améliorer la protection des données des stagiaires. Il est possible de sélectionner plusieurs champs.';
$string['configmaxusersperpage'] = 'Nombre maximum d\'utilisateurs affichés dans les champs de sélection d\'utilisateurs des séquences, groupes, cohortes, services web, etc.';
$string['configrequestedstudentname'] = 'Terme utilisé pour « stagiaire » dans les séquences demandées';
$string['configrequestedstudentsname'] = 'Terme utilisé pour « stagiaires » dans les séquences demandées';
$string['configrequestedteachername'] = 'Terme utilisé pour « intervenant » dans les séquences demandées';
$string['configrequestedteachersname'] = 'Terme utilisé pour « intervenants » dans les séquences demandées';
$string['configsectionrequestedcourse'] = 'Demande de séquence';
$string['configshowsiteparticipantslist'] = 'Tous les stagiaires et les intervenants de la page d\'accueil de ce site seront affichés dans la liste des participants du site. Qui doit avoir les permissions requises pour voir cette liste des participants de la page d\'accueil ?';
$string['configvisiblecourses'] = 'Afficher normalement les séquences placées dans des catégories cachées';
$string['course_customfield'] = 'Champs personnalisés de la séquence';
$string['coursecolorsettings'] = 'Couleurs des cartes de séquence';
$string['coursecontact'] = 'Contacts de séquence';
$string['coursecontactduplicates'] = 'Afficher tous les rôles de contact de séquence';
$string['coursegraceperiodafter'] = 'Délai d\'attente pour les séquences passées';
$string['coursegraceperiodbefore'] = 'Délai d\'anticipation pour les séquences futures';
$string['courselistshortnames'] = 'Afficher les noms de séquence étendus';
$string['coursemgmt'] = 'Gestion des séquences et catégories';
$string['courseoverview'] = 'Vue d\'ensemble séquence';
$string['courserequests'] = 'Demandes de séquence';
$string['courserequestspending'] = 'Demandes de création de séquence en attente';
$string['courses'] = 'Séquences';
$string['coursesperpage'] = 'Séquences par page';
$string['creatornewroleid'] = 'Rôle des contributeurs dans les nouvelles séquences';
$string['creatornewroleid_help'] = 'Si l\'utilisateur n\'a pas déjà les permissions requises pour gérer la nouvelle séquence, il y sera automatiquement inscrit avec ce rôle.';
$string['guestroleid_help'] = 'Ce rôle est automatiquement attribué au compte Utilisateur anonyme. Il est également attribué temporairement aux utilisateurs qui entrent dans une séquence via le plugin d\'inscription des utilisateurs anonymes.';
$string['hidefromstudents'] = 'Cacher pour les stagiaires';
$string['legacyfilesinnewcourses'] = 'Fichiers de la séquence (obsolète) dans les nouvelles séquences';
$string['linkcoursesections'] = 'Toujours lier les séances de séquence';
$string['manageformats'] = 'Gérer les formats de la séquence';
$string['navshowallcourses'] = 'Afficher toutes les séquences';
$string['navshowcategories'] = 'Afficher les catégories de séquence';
$string['navshowmycoursecategories'] = 'Afficher mes catégories de séquence';
$string['navsortmycourseshiddenlast'] = 'Trier mes séquences cachées en dernier';
$string['navsortmycoursessort'] = 'Trier mes séquences';
$string['navsortmycoursessort_help'] = 'Détermine si les séquences dans Mes séquences sont listés dans l\'ordre de tri actif (l\'ordre de tri indiqué dans Administration du site > Séquences > Gestion des séquences) ou suivant l\'ordre alphabétique.';
$string['profilevisible_help'] = '* caché - pour les données privées, uniquement visible pour les administrateurs * visible pour l\'utilisateur - pour les données personnelles, visibles par l\'utilisateur et les administrateurs * visible pour l\'utilisateur, les intervenants et les administrateurs - pour les données personnelles, visibles par l\'utilisateur, les intervenants et les administrateurs (sur le profil de séquence) * visible pour tous';
$string['restorecourse'] = 'Restaurer une séquence';
$string['restorernewroleid'] = 'Rôle de l\'utilisateur qui restaure une séquence';
$string['restorernewroleid_help'] = 'Si l\'utilisateur qui restaure une séquence n\'a pas les permissions requises pour gérer la séquence nouvellement restaurée, il est automatiquement inscrit à la séquence et ce rôle lui est attribué. Choisir « Aucun » si vous ne voulez pas que les utilisateurs qui restaurent des séquences puissent gérer les séquences restaurées.';
$string['searchindexwhendisabled_desc'] = 'Permet à la tâche programmée de construire l\'index de recherche, même si la recherche est désactivée. Cette option est utile pour construire l\'index avant de rendre la recherche disponible pour les stagiaires.';
$string['showuseridentity_desc'] = 'Lors de la recherche ou de la sélection d\'utilisateurs, ainsi que lors de l\'affichage de listes d\'utilisateurs, ces champs peuvent être affichés en plus du nom complet. Ils ne sont montrés qu\'aux utilisateurs ayant la capacité moodle/site:viewuseridentity (par défaut, les gestionnaires et les intervenants). Ce réglage a plus de sens si vous imposez un ou deux champs obligatoires dans votre institution.';
$string['sitemenubar'] = 'Navigation sur le site';
