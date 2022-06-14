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
 * @subpackage grades
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateextracreditmean'] = 'Moyenne des évaluations (avec bonus)';
$string['aggregatemax'] = 'Évaluation la plus haute';
$string['aggregatemean'] = 'Moyenne des évaluations';
$string['aggregatemedian'] = 'Médiane des évaluations';
$string['aggregatemin'] = 'Évaluation la plus basse';
$string['aggregatemode'] = 'Mode des évaluations';
$string['aggregatenotonlygraded'] = 'Inclure les évaluations vides';
$string['aggregateonlygraded'] = 'Exclure les évaluations vides';
$string['aggregateonlygraded_help'] = 'Une évaluation vide est une évaluation manquante dans le livret des évaluations. Elle peut provenir d\'un travail qui n\'a pas encore été évalué, d\'un test qui n\'a pas encore été tenté, etc. Ce réglage détermine si les évaluations vides sont exclues du calcul des tendances centrales ou si elles sont traitées comme évaluations minimales (par exemple 0 dans un travail évalué de 0 à 20).';
$string['aggregatesubcatsupgradedgrades'] = 'Remarque : le réglage « Inclure les sous-catégories dans les tendances centrales » a été supprimé au cours de la mise à jour du site. Puisque ce réglage était utilisé antérieurement dans cette séquence, il vous est conseillé de vérifier le résultat de cette modification dans le livret des évaluations.';
$string['aggregateweightedmean'] = 'Moyenne pondérée des évaluations';
$string['aggregateweightedmean2'] = 'Simple moyenne pondérée des évaluations';
$string['aggregation_help'] = 'La tendance centrale détermine comment les évaluations d\'une catégorie sont combinées. * Moyenne des évaluations : la somme de toutes les évaluations divisée par le nombre total d\'évaluations. * Médiane des évaluations : l\'évaluation du milieu de la liste, lorsque les évaluations sont classées par ordre de grandeur. * Évaluation la plus basse. * Évaluation la plus haute. * Mode des évaluations : l\'évaluation qui revient le plus souvent dans la liste. * Naturelle : la somme de toutes les évaluations pondérées.';
$string['aggregationcoefextra_help'] = 'Lorsque la tendance centrale choisie est la « Naturelle » ou « Moyenne simple pondérée » et que la case « Bonus » est cochée, l\'évaluation maximale de l\'élément d\'évaluation n\'est pas comptée dans le maximum du total des évaluations. Cela a pour conséquence qu\'il est possible d\'obtenir l\'évaluation maximale (ou une évaluation dépassant l\'évaluation maximale, si l\'administrateur du site a activé cette possibilité) dans la catégorie sans obtenir l\'évaluation maximale dans tous les éléments d\'évaluation. Si la tendance centrale choisie est « Moyenne des évaluations (avec points supplémentaires) » et que les points supplémentaires indiqués sont plus grands que 0, les points supplémentaires constituent le facteur qui multiplie l\'évaluation avant de l\'ajouter au total, après le calcul de la moyenne.';
$string['aggregationcoefextraweight_help'] = 'Si la pondération pour le bonus est plus grande que 0, l\'évaluation est traitée comme bonus lors du calcul de la tendance centrale. Ce nombre est le facteur par lequel l\'évaluation  est multipliée avant d\'être ajoutée au total des évaluations pour le calcul de la moyenne.';
$string['aggregationposition_help'] = 'Ce réglage détermine si les colonnes des tendances centrales de la catégorie et de la séquences sont affichées en premier ou en dernier dans les rapports du livret des évaluations.';
$string['allgrades'] = 'Toutes les évaluations par catégorie';
$string['allstudents'] = 'Tous les stagiaires';
$string['backupwithoutgradebook'] = 'La sauvegarde ne contient pas la configuration du livret des évaluations';
$string['cannotaccessgroup'] = 'Impossible d\'accéder aux évaluations du groupe sélectionné.';
$string['contributiontocoursetotal'] = 'Contribution au total de la séquence';
$string['courseavg'] = 'Moyenne de la séquence';
$string['coursegradecategory'] = 'Catégorie des évaluations de la séquence';
$string['coursegradedisplaytype'] = 'Type d\'affichage des évaluations de la séquence';
$string['coursegradedisplayupdated'] = 'Le type d\'affichage des évaluations de la séquence a été modifié.';
$string['coursegradesettings'] = 'Réglages des évaluations de la séquence';
$string['coursename'] = 'Nom de la séquence';
$string['coursescales'] = 'Barèmes de la séquence';
$string['coursesettings'] = 'Réglages de la séquence';
$string['coursesettingsexplanation'] = 'Les réglages d\'évaluation de la séquence déterminent la présentation du livret des évaluations pour tous les participants de la séquence.';
$string['coursesiamtaking'] = 'Les séquences que je suis';
$string['coursesiamteaching'] = 'Les séquences que je donne';
$string['coursetotal'] = 'Total de la séquence';
$string['creatinggradebooksettings'] = 'Création des réglages du livret des évaluations';
$string['decimalpoints_help'] = 'Ce réglage détermine le nombre de décimales à afficher pour chaque évaluation. Il n\'a pas d\'effet sur le résultat des calculs des évaluations, qui sont effectués dans tous les cas avec une précision de 5 décimales.';
$string['disablegradehistory'] = 'Désactiver l\'historique des évaluations';
$string['disablegradehistory_help'] = 'Désactiver le suivi des modifications des tables concernant les évaluations. Ce réglage peut améliorer la vitesse de votre serveur et conserve plus d\'espace disque dans votre base de données.';
$string['displaylettergrade'] = 'Afficher les évaluations avec des lettres';
$string['displayweighted'] = 'Afficher les évaluations pondérées';
$string['droplow_help'] = 'Ce réglage permet d\'indiquer le nombre d\'évaluations les plus basses à ignorer lors du calcul de la tendance centrale.';
$string['dropxlowestwarning'] = 'Remarque : si vous utilisez l\'option « ignorer les n évaluations les plus basses »,<br />tous les éléments de la catégorie seront considérés comme valant<br />le même nombre de points. Si ces valeurs varient, les résultats seront imprévisibles !';
$string['editgrade'] = 'Modifier l\'évaluation';
$string['errornocourse'] = 'Impossible d\'obtenir les informations de la séquence';
$string['errorsavegrade'] = 'Impossible d\'enregistrer l\'évaluation.';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Erreur lors de la modification du réglage « Tendance centrale pour évaluations non vides » de la catégorie d\'évaluation d\'identifiant {$a->id}';
$string['eventgradedeleted'] = 'Évaluation supprimée';
$string['eventgradeviewed'] = 'Évaluations consultées dans le livret des évaluations';
$string['externalurl_desc'] = 'Si un livret des évaluations externe est utilisé, veuillez indiquer son URL ici.';
$string['feedback_help'] = 'Ce champ permet à l\'intervenant d\'ajouter des remarques sur l\'évaluation donnée.';
$string['finalgrade'] = 'Évaluation finale';
$string['finalgrade_help'] = 'Si ce réglage est activé, des évaluations peuvent être ajoutées ou modifiées.';
$string['fixedstudents'] = 'Colonne stagiaires statique';
$string['fixedstudents_help'] = 'Permet aux évaluations de défiler horizontalement sans perdre de vue la colonne des stagiaires, en rendant statique cette dernière.';
$string['forstudents'] = 'Pour les stagiaires';
$string['grade'] = 'Évaluation';
$string['grade_help'] = 'L\'évaluation à donner au stagiaire pour son travail.';
$string['gradeadministration'] = 'Administration des évaluations';
$string['gradebook'] = 'Livret des évaluations';
$string['gradebookcalculationsuptodate'] = 'Les calculs du livret des évaluations sont à jour. Veuillez recharger cette page pour voir les modifications.';
$string['gradebookcalculationswarning'] = 'Des erreurs ont été détectées dans le calcul des évaluations affichées dans le livret des évaluations. Si votre séquence n\'a pas commencé ou est en cours, il vous est recommandé de corriger ces erreurs en cliquant sur le bouton ci-dessous. Cette opération aura pour résultat de modifier certaines évaluations. Si votre séquence est terminée et que les évaluations ont été données, il n\'est probablement pas judicieux de corriger ce problème. La nouvelle version du livret des évaluations est {$a->currentversion} ; vous utilisez la version {$a->gradebookversion}. Vous pouvez consulter les changements entre les versions {$a->gradebookversion} et {$a->currentversion}, sur la page <a href="{$a->url}">Modifications du calcul du livret des évaluations</a>.';
$string['gradebookhiddenerror'] = 'Le livret des évaluations est configuré de façon à cacher toutes ses données aux stagiaires.';
$string['gradebooksetup'] = 'Configuration du livret des évaluations';
$string['gradecategories'] = 'Catégories d\'évaluation';
$string['gradecategory'] = 'Catégorie d\'évaluation';
$string['gradecategoryonmodform'] = 'Catégorie d\'évaluation';
$string['gradecategoryonmodform_help'] = 'Ce réglage définit la catégorie du livret des évaluations dans laquelle les évaluations de cette activité sont placées.';
$string['gradedisplay'] = 'Affichage des évaluations';
$string['gradedisplaytype'] = 'Type d\'affichage des évaluations';
$string['gradedisplaytype_help'] = 'Ce réglage détermine comment les évaluations sont affichées dans les rapports de l\'évaluateur et du participant. * Réel – Évaluation elle-même ou valeur dans le barème * Pourcentage – Pourcentage relativement aux évaluations maximale et minimale * Lettre – Lettre (ou mot) représentant un intervalle d\'évaluations, spécifié dans l\'onglet Lettres de la configuration du livret des évaluations';
$string['gradeexport'] = 'Exportation d\'évaluations';
$string['gradeexportcustomprofilefields'] = 'Champs de profil personnalisés pour exportation des évaluations';
$string['gradeexportcustomprofilefields_desc'] = 'Inclure ces champs de profil personnalisés dans l\'exportation des évaluations, séparés par des virgules.';
$string['gradeexportdecimalpoints'] = 'Nombre de décimales des évaluations exportées';
$string['gradeexportdisplaytype'] = 'Type d\'affichage des évaluations exportées';
$string['gradeexportdisplaytype_desc'] = 'Lors de l\'exportation, les évaluations peuvent être affichées comme évaluations brutes, comme pourcentages (relativement aux évaluations maximale et minimale) ou comme lettres (A, B, C, etc.). Ce réglage peut être modifié lors de chaque exportation.';
$string['gradeexportdisplaytypes'] = 'Type d\'affichage de l\'exportation des évaluations';
$string['gradeexportuserprofilefields'] = 'Champs de profil pour exportation des évaluations';
$string['gradeexportuserprofilefields_desc'] = 'Inclure ces champs de profil dans l\'exportation des évaluations, séparés par des virgules.';
$string['gradehelp'] = 'Aide sur les évaluations';
$string['gradehistorylifetime'] = 'Durée de l\'historique des évaluations';
$string['gradehistorylifetime_help'] = 'Ce réglage permet d\'indiquer la durée pendant laquelle vous voulez conserver le suivi des modifications des tables concernant les évaluations. Il est recommandé de les conserver le plus longtemps possible. Si vous avez des problèmes de performance ou un espace disque limité pour votre base de données, essayez d\'indiquer une durée plus basse.';
$string['gradeimport'] = 'Importation d\'évaluations';
$string['gradeitemislocked'] = 'L\'évaluation de cette activité est verrouillée dans le livret des évaluations. Les modifications des évaluations de cette activité ne seront pas répercutées dans le livret des évaluations tant qu\'il n\'est pas déverrouillé.';
$string['gradeitemminmax'] = 'Évaluations minimale et maximale telles que définies dans les réglages de l\'élément d\'évaluation';
$string['gradelocked'] = 'L\'évaluation est verrouillée';
$string['grademax'] = 'Évaluation maximale';
$string['grademin'] = 'Évaluation minimale';
$string['grademin_help'] = 'Ce réglage détermine l\'évaluation minimale lorsque le type d\'évaluation est une valeur.';
$string['gradeoutcomescourses'] = 'Objectifs de la séquence';
$string['gradepass'] = 'Points minimum pour valider';
$string['gradepass_help'] = 'Ce réglage détermine l\'évaluation minimale pour passer. La valeur est utilisée dans l\'achèvement d\'activités et de séquences, ainsi que dans le livret des évaluations, où les évaluations supérieures sont en vert et les évaluations inférieures en rouge.';
$string['gradepointdefault_help'] = 'Ce réglage détermine le nombre de points par défaut pour la valeur d\'un élément d\'évaluation.';
$string['gradepointmax_help'] = 'Ce réglage détermine le nombre maximum de points pour l\'évaluation d\'une activité.';
$string['gradepublishing_help'] = 'La publication des évaluations permet d\'importer et d\'exporter des évaluations au moyen d\'une URL, sans être connecté à la PAD. Si elle est activée, les administrateurs et utilisateurs au bénéfice des permissions requises pour publier les évaluations (par défaut, uniquement les utilisateurs ayant le rôle de gestionnaire) peuvent avoir accès aux réglages de publications des évaluations dans le livret des évaluations de chaque séquence.';
$string['grades'] = 'Évaluations';
$string['gradesforuser'] = 'Évaluations de {$a->user}';
$string['gradessettings'] = 'Réglages des évaluations';
$string['gradetype'] = 'Type d\'évaluation';
$string['hidden_help'] = 'Si cette case est cochée, les évaluations sont cachées aux stagiaires. Un délai peut être fixé au besoin, afin d\'afficher les évaluations une fois terminées.';
$string['hiddenasdate'] = 'Afficher la date de remise pour les évaluations cachées';
$string['hiddenasdate_help'] = 'Si le participant n\'a pas les permissions requises pour voir les évaluations cachées, afficher la date de remise au lieu d\'un tiret.';
$string['hidetotalifhiddenitems_help'] = 'Ce réglage détermine si les totaux contenant un ou plusieurs éléments d\'évaluation cachés seront affichés pour les participants ou remplacés par un tiret (-). S\'ils sont affichés, les totaux seront calculés soit en incluant, soit en excluant les éléments d\'évaluation cachés. Si les éléments cachés sont exclus, le total vu par les participants sera différent de celui vu dans le rapport d\'évaluation par l\'intervenant, puisque celui-ci voit toujours les totaux calculés à partir de tous les éléments, qu\'ils soient cachés ou non. Si les éléments cachés sont inclus, les participants seront potentiellement en mesure de déduire par le calcul la valeur des éléments cachés.';
$string['importcustom'] = 'Importer comme objectifs de cette séquence';
$string['includescalesinaggregation_help'] = 'Vous pouvez indiquer si les barèmes doivent être inclus en tant que nombres dans toutes les tendances centrales des évaluations de tous les livrets de toutes les séquences. ATTENTION : la modification de ce réglage entraînera le re-calcul de toutes les tendances centrales.';
$string['incorrectcourseid'] = 'Le No de séquence est incorrect';
$string['keephigh_help'] = 'Cette option permet de ne considérer que les <em>n</em> évaluations les plus élevées, le nombre <em>n</em> étant sélectionné dans le menu déroulant.';
$string['maxgrade'] = 'Évaluation maximale';
$string['meanall'] = 'Toutes les évaluations';
$string['meangraded'] = 'Évaluations non vides';
$string['meanselection'] = 'Évaluations sélectionnées pour moyennes de colonnes';
$string['meanselection_help'] = 'Indique si les cellules sans évaluation doivent être incluses dans le calcul des moyennes de chaque colonne.';
$string['minimum_show'] = 'Afficher l\'évaluation minimale';
$string['minimum_show_help'] = 'L\'évaluation minimale est utilisée dans le calcul des évaluations et pondérations. Si elle n\'est pas affichée, l\'évaluation minimale est fixée à 0 et ne peut pas être modifiée.';
$string['minmaxtouse'] = 'Évaluations minimale et maximale utilisées dans les calculs';
$string['minmaxtouse_desc'] = 'Ce réglage détermine si, pour le calcul de l\'évaluation affichée dans le livret des évaluations, les évaluations maximale et minimale initiales (lorsque l\'évaluation a été donnée) ou plutôt celles définies dans les réglages de l\'élément d\'évaluation seront utilisées. Il recommandé de modifier ce réglage en dehors des heures de pointe, car toutes les évaluations seront recalculées, ce qui chargera le serveur de manière importante.';
$string['minmaxtouse_help'] = 'Ce réglage détermine si, pour le calcul de l\'évaluation affichée dans le livret des évaluations, les évaluations maximale et minimale initiales (lorsque l\'évaluation a été donnée) ou plutôt celles définies dans les réglages de l\'élément d\'évaluation seront utilisées.';
$string['minmaxupgradedgrades'] = 'Certaines évaluations ont été modifiées afin de résoudre une incohérence dans le livret des évaluations, causée par une modification des évaluations minimale et maximale utilisées lors du calcul de l\'évaluation affichée. Il est recommandé de passer en revue ces changements et de les confirmer.';
$string['minmaxupgradewarning'] = 'Une incohérence a été détectée pour certaines évaluations, causée par une modification des évaluations minimale et maximale utilisées lors du calcul de l\'évaluation affichée dans le livret des évaluations. Il est recommandé de lever cette incohérence en cliquant sur le bouton ci-dessus. Certaines évaluations seront alors modifiées.';
$string['modgrademaxgrade'] = 'Évaluation maximale';
$string['mygrades'] = 'Lien évaluations du menu utilisateur';
$string['mygrades_desc'] = 'Ce réglage permet de spécifier dans le menu utilisateur un lien vers un livret des évaluations externe.';
$string['nocategories'] = 'Les catégories d\'évaluation ne peuvent être ajoutées ou trouvées dans cette séquence';
$string['nocourses'] = 'Il n\'y a pas encore de séquence';
$string['nooutcomes'] = 'Les éléments d\'objectif doivent être liés à un objectif de séquence. Il n\'y a cependant aucun objectif défini dans cette séquence. Voulez-vous en définir un ?';
$string['noreports'] = 'Vous n\'êtes inscrit à aucune séquence, et n\'enseignez dans aucune séquence sur cette plateforme.';
$string['noscales'] = 'Les éléments d\'objectif doivent être liés à un barème de séquence ou un barème global. Il n\'y a cependant aucun barème. Voulez-vous en définir un ?';
$string['notenrolled'] = 'Vous n\'êtes inscrit à aucune séquence sur cette plateforme.';
$string['notteachererror'] = 'Vous devez être intervenant pour utiliser cette fonctionnalité.';
$string['outcome_help'] = 'Spécifie l\'objectif représenté par cet élément d\'évaluation dans le livret des évaluations. Seuls les objectifs associés à cette séquence et les objectifs globaux du site sont disponibles';
$string['outcomeassigntocourse'] = 'Attribuer un autre objectif à cette séquence';
$string['outcomescourse'] = 'Objectifs utilisés dans la séquence';
$string['outcomestandard_help'] = 'Un objectif standard est disponible dans tout le site, pour toutes les séquences.';
$string['overridecat'] = 'Autoriser la modification manuelle des évaluations de catégorie';
$string['overridecat_help'] = 'Si ce réglage est activé, les évaluations de catégorie peuvent être modifiées manuellement.';
$string['overridesitedefaultgradedisplaytype_help'] = 'Si ce réglage est activé, les évaluations lettres et les valeurs limites des évaluations peuvent être configurées par séquence, au lieu d\'utiliser les valeurs par défaut de la plateforme.';
$string['privacy:metadata:filepurpose'] = 'Les fichiers de feedback enregistrés dans le livret des évaluations pour un utilisateur.';
$string['quickgrading_help'] = 'Si ce réglage est activé, lorsque le mode de modification est actif, un champ de texte est affiché à côté des évaluations du rapport de l\'évaluateur, permettant de modifier de nombreuses évaluations à la fois. Les modifications sont enregistrées et surlignées quand le bouton Modifier est cliqué. Quand une évaluation est modifiée dans le rapport de l\'évaluateur, elle ne peut plus être modifiée par le résultat de l\'activité d\'où elle provient.';
$string['rangesdisplaytype_help'] = 'Ce réglage spécifie comment afficher les valeurs possibles : comme évaluations réelles, pourcentages ou lettres, ou si l\'affichage défini au niveau de la catégorie ou de l\'élément d\'évaluation est utilisé (par héritage).';
$string['recovergradesdefault'] = 'Récupérer par défaut les évaluations';
$string['recovergradesdefault_help'] = 'Par défaut, récupérer les anciennes évaluations lors de la ré-inscription d\'un participant à une séquence.';
$string['seeallcoursegrades'] = 'Voir toutes les évaluations de la séquence';
$string['setcategorieserror'] = 'Les catégories doivent être mises en place dans votre séquence avant de pouvoir leur attribuer des coefficients.';
$string['showallstudents'] = 'Afficher tous les stagiaires';
$string['showaverage_help'] = 'Si ce réglage est activé, la colonne avec la moyenne sera affichée. Les stagiaires pourraient alors être en mesure d\'estimer les évaluations d\'autres stagiaires, si la moyenne est calculée à partir de peu d\'évaluations. Pour des raisons de performance, la moyenne est une estimation lorsqu\'elle dépend d\'éléments cachés.';
$string['showcontributiontocoursetotal'] = 'Afficher la contribution au total de la séquence';
$string['showcontributiontocoursetotal_help'] = 'Ce réglage détermine si une colonne doit être affichée, comprenant la contribution en % de chaque élément d\'évaluation au pourcentage total de l\'utilisateur dans cette séquence, après pondération.';
$string['showeyecons_help'] = 'Afficher une icône afficher/cacher pour chaque évaluation (cette icône permet de masquer ou d\'afficher l\'évaluation pour les participants) ?';
$string['showgrade'] = 'Afficher les évaluations';
$string['showgrade_help'] = 'Si ce réglage est activé, la colonne des évaluations sera affichée.';
$string['showhiddenitems_help'] = 'Spécifie si les éléments d\'évaluations cachés sont totalement invisibles ou si les noms des éléments d\'évaluations cachés sont visibles pour les stagiaires. * Afficher les éléments cachés : les noms des éléments d\'évaluations cachés sont affichés, mais les évaluations sont cachées * Cacher les éléments jusqu\'au : les éléments d\'évaluation et les évaluations sont totalement invisibles, jusqu\'à l\'échéance de la date fixée, s\'il y en a une. Une fois le date passée, l\'élément et les évaluations sont affichées * Cacher les éléments : les éléments d\'évaluation et les évaluations sont totalement invisibles';
$string['showlettergrade'] = 'Afficher les évaluations lettres';
$string['showlettergrade_help'] = 'Si ce réglage est activé, la colonne des évaluations lettres sera affichée.';
$string['showlocks_help'] = 'Afficher une icône de verrouillage/déverrouillage pour chaque évaluation ?';
$string['shownumberofgrades'] = 'Afficher le nombre d\'évaluations dans les moyennes';
$string['shownumberofgrades_help'] = 'Spécifie si le nombre des évaluations utilisées pour calculer la moyenne doit être affiché entre parenthèses, à côté de chaque moyenne. Exemple : 45 (34).';
$string['showonlyactiveenrol_help'] = 'Ce réglage détermine si les seuls utilisateurs visibles dans le livret des évaluations sont ceux dont l\'inscription est active. Si le réglage est actif, les utilisateurs suspendus ne seront pas affichés dans le livret des évaluations.';
$string['showquickfeedback_help'] = 'Le feedback rapide ajoute un champ de texte à chaque cellule d\'évaluation du rapport de l\'évaluateur, vous permettant de modifier de nombreux feedbacks à la fois. Vous pouvez alors cliquer sur le bouton Modifier pour effectuer d\'un coup toutes les modifications, au lieu de les faire une à la fois.';
$string['showranges_help'] = 'Si ce réglage est activé, le rapport de l\'évaluateur contiendra une rangée supplémentaire affichant pour chaque catégorie et chaque élément d\'évaluation les valeurs possibles des évaluations.';
$string['sumofgradesupgradedgrades'] = 'Remarque : la méthode de calcul de la tendance centrale « Somme des évaluations » a été changé à « Naturelle » à la séquence de la mise à jour du site. Puisque la méthode « Somme des évaluations » était utilisée dans cette séquence, il vous est conseillé de vérifier le résultat de cette modification dans le livret des évaluations.';
$string['unenrolledusersinimport'] = 'Ce fichier d\'importation contenait les évaluations suivantes d\'utilisateurs n\'étant actuellement pas inscrits dans cette séquence : {$a}';
$string['unlimitedgrades'] = 'Évaluations illimitées';
$string['unlimitedgrades_help'] = 'Par défaut, les évaluations sont limitées par les valeurs maximales et minimales de l\'élément d\'évaluation. L\'activation de ce réglage retire cette limite et permet de saisir directement des évaluations dépassant 100% dans le livret des évaluations.';
$string['uploadgrades'] = 'Déposer des évaluations';
$string['usedcourses'] = 'Séquences utilisées';
$string['viewgrades'] = 'Affichage des évaluations';
$string['weight_help'] = 'Valeur utilisée pour déterminer l\'importance relative des éléments d\'évaluation dans une catégorie ou une séquence.';
$string['weightcourse'] = 'Utiliser les coefficients pour la séquence';
$string['writinggradebookinfo'] = 'Écriture des réglages du livret des évaluations';
