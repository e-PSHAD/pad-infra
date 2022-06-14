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
 * @subpackage lesson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completionendreached_desc'] = 'Si ce réglage est activé, les stagiaires doivent atteindre la page de fin de la leçon pour terminer cette activité';
$string['completiontimespent'] = 'Les stagiaires doivent faire cette activité au moins durant';
$string['completiontimespentdesc'] = 'Le stagiaire doit travailler sur cette activité durant au moins {$a}';
$string['defaultessayresponse'] = 'Votre composition sera évaluée par votre intervenant.';
$string['dependencyon_help'] = 'Grâce à ce réglage, l\'accès à cette leçon peut dépendre des résultats du stagiaire à d\'autres leçons dans la même séquence. Il est possible de combiner les critères « durée utilisée », « terminé » ou « évaluation plus haute que ».';
$string['displayleftif'] = 'Évaluation minimale pour afficher le menu';
$string['displayleftif_help'] = 'Ce réglage détermine si un participant doit obtenir une évaluation minimale pour que le menu de la leçon soit affiché. Ceci impose au participant de parcourir la totalité de la leçon lors de sa première tentative, puis lui permet d\'utiliser le menu pour sa relecture, s\'il a obtenu l\'évaluation requise.';
$string['displayofgrade'] = 'Affichage de l\'évaluation (pour le stagiaire)';
$string['handlingofretakes_help'] = 'Lorsque les stagiaires ont la permission de répéter la leçon, ce réglage spécifie si l\'évaluation de la leçon est la moyenne ou l\'évaluation de la meilleure tentative.';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par le stagiaire dans une activité Leçon.';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l\'interaction sociale atteinte par le stagiaire dans une activité Leçon.';
$string['lowscore'] = 'Évaluation la plus basse';
$string['maxgrade'] = 'Évaluation maximale';
$string['maximumnumberofanswersbranches_help'] = 'Cette valeur détermine le nombre maximal de réponses utilisables dans la leçon. Si une leçon n\'utilise que des questions vrai/faux, elle peut être fixée à 2. Ce paramètre peut être modifié à tout moment, car il n\'a d\'effet que sur ce que voit l\'intervenant, pas sur les données.';
$string['maximumnumberofattempts_help'] = 'Ce réglage fixe le nombre maximal de tentatives à disposition des stagiaires pour répondre à chaque question. Si une réponse incorrecte est répétée, lorsque cette valeur est atteinte, la page suivante de la leçon est affichée.';
$string['minimumnumberofquestions_help'] = 'Ce réglage détermine le nombre minimum de questions qui seront utilisées pour calculer l\'évaluation de l\'activité.';
$string['modattempts'] = 'Permettre la relecture par les stagiaires';
$string['modattempts_help'] = 'Si ce réglage est activé, les stagiaires peuvent reprendre la leçon depuis le début.';
$string['modattemptsnoteacher'] = 'La critique par les stagiaires ne fonctionne que pour les stagiaires.';
$string['modulename_help'] = 'Le module d\'activité leçon permet à l\'intervenant de proposer des contenus et/ou des activités d\'exercice d\'une façon intéressante et flexible. L\'intervenant peut utiliser la leçon pour créer un plusieurs pages qui se suivent linéairement ou qui offrent plusieurs chemins au stagiaire. L\'intervenant peut augmenter l\'engagement et s\'assurer de la compréhension en incluant divers types de questions : à choix multiple, d\'appariement et à réponse courte. Selon la réponse du stagiaire et la créativité de la personne qui crée la leçon, les stagiaires poursuivent vers la page suivante, reviennent à une page précédente ou sont redirigé vers un tout autre chemin. Une leçon peut être sanctionnée par une évaluation. L\'évaluation est alors enregistrée dans le livret des évaluations. Les leçons peuvent être utilisées par exemple : * pour l\'apprentissage autonome d\'un nouveau sujet * pour des simulations ou des jeux de rôles exerçant la prise de décision * comme un moyen de combiner plusieurs canaux différents, permettant ainsi de renforcer l\'apprentissage * pour des supports de révision différenciés, avec plusieurs jeux de questions de révision suivant les réponses précédemment données';
$string['ongoing_help'] = 'Si ce réglage est activé, le stagiaire verra sur chaque page, le nombre des points qu\'il a obtenu par rapport au total possible jusqu\'ici.';
$string['practice_help'] = 'Le résultat d\'une leçon d\'entraînement n\'apparaîtra pas dans le livret des évaluations.';
$string['privacy:metadata:overrides:available'] = 'La date et l\'heure à laquelle les stagiaires peuvent commencer la leçon.';
$string['retakesallowed_help'] = 'Si ce réglage est activé, les stagiaires peuvent effectuer la leçon à plusieurs reprises.';
$string['studentname'] = 'Nom du stagiaire';
$string['teacherjumpwarning'] = 'Un lien {$a->cluster} ou un lien {$a->unseen} est utilisé dans cette leçon. Un lien « Page suivante » sera utilisé à sa place. Veuillez vous connecter en tant que stagiaire pour tester ces liens.';
$string['teacherongoingwarning'] = 'Le score actuel n\'est affiché que pour les stagiaires. Veuillez vous connecter en tant que stagiaire pour tester le score actuel.';
$string['teachertimerwarning'] = 'Le chronomètre ne fonctionne que pour les stagiaires. Veuillez vous connecter en tant que stagiaire pour tester le chronomètre.';
$string['usersnone'] = 'Aucun stagiaire n\'a accès à cette leçon';
$string['viewgrades'] = 'Afficher les évaluations';
