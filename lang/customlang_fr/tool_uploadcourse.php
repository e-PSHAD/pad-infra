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
 * @package    tool
 * @subpackage uploadcourse
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotdeletecoursenotexist'] = 'Impossible de supprimer une séquence qui n\'existe pas';
$string['cannotforcelang'] = 'Pas les permissions requises pour imposer la langue dans cette séquence.';
$string['cannotrenamecoursenotexist'] = 'Impossible de renommer une séquence qui n\'existe pas';
$string['cannotrenameidnumberconflict'] = 'Impossible de renommer le cours, l\'identifiant est en conflit avec celui d\'une séquence existante';
$string['cannotrenameshortnamealreadyinuse'] = 'Impossible de renommer la séquence, car le nom abrégé est déjà utilisé';
$string['coursecreated'] = 'Séquence créée';
$string['coursedeleted'] = 'Séquence supprimée';
$string['coursedeletionnotallowed'] = 'La suppression de séquence n\'est pas autorisée';
$string['coursedoesnotexistandcreatenotallowed'] = 'La séquence n\'existe pas et la création de séquence n\'est pas autorisée';
$string['courseexistsanduploadnotallowed'] = 'La séquence existe et la modification n\'est pas autorisée';
$string['courseidnumberincremented'] = 'Numéro d\'identification de la séquence incrémenté de {$a->from} à {$a->to}';
$string['courseprocess'] = 'Traitement de la séquence';
$string['courserenamed'] = 'Séquence renommée';
$string['courserenamingnotallowed'] = 'Le renommage des séquences n\'est pas autorisé';
$string['coursereset'] = 'Séquence réinitialisée';
$string['courseresetnotallowed'] = 'La réinitialisation de séquence n\'est pas autorisée';
$string['courserestored'] = 'Séquence restaurée';
$string['coursescreated'] = 'Séquences créées : {$a}';
$string['coursesdeleted'] = 'Séquences supprimées : {$a}';
$string['courseserrors'] = 'Erreurs dans les séquences : {$a}';
$string['courseshortnamegenerated'] = 'Noms abrégés de séquences générés : {$a}';
$string['courseshortnameincremented'] = 'Noms abrégés de séquences incrémentés de {$a->from} à {$a->to}';
$string['coursestotal'] = 'Total des séquences du fichier déposé : {$a}';
$string['coursesupdated'] = 'Séquences modifiées : {$a}';
$string['coursetemplatename'] = 'Séquence existante modèle';
$string['coursetemplatename_help'] = 'Indiquez ici le nom abrégé d\'une séquence existante à utiliser comme modèle pour toutes les séquences créées.';
$string['coursetorestorefromdoesnotexist'] = 'La séquence indiquée pour servir de modèle n\'existe pas';
$string['courseupdated'] = 'Séquence modifiée';
$string['createnew'] = 'Créer uniquement les nouvelles séquences et passer les séquences existantes';
$string['createorupdate'] = 'Créer de nouvelles séquences ou modifier les séquences existantes';
$string['defaultvalues'] = 'Réglages par défaut pour les séquences';
$string['errorwhiledeletingcourse'] = 'Erreur lors de la suppression de la séquence';
$string['errorwhilerestoringcourse'] = 'Erreur lors de la restauration de la séquence';
$string['idnumberalreadyinuse'] = 'Cet identifiant est déjà utilisé par une séquence';
$string['invalidcourseformat'] = 'Format de séquence non valide';
$string['mode_help'] = 'Ce réglage permet de spécifier si les séquences peuvent être créées et/ou modifiées.';
$string['pluginname'] = 'Déposer des séquences';
$string['privacy:metadata'] = 'Le plugin Déposer des séquences n\'enregistre aucune donnée personnelle.';
$string['reset'] = 'Réinitialiser la séquence';
$string['reset_help'] = 'Détermine s\'il faut réinitialiser la séquence après sa création ou modification.';
$string['shortnametemplate_help'] = 'Le nom abrégé de la séquence est affiché dans la navigation. Vous pouvez indiquer ici un modèle pour ces noms abrégés avec des variables (%f = nom complet, %i = identifiant) ou saisir une valeur initiale qui sera incrémentée';
$string['templatefile'] = 'Fichier de sauvegarde de séquence modèle';
$string['templatefile_help'] = 'Le fichier de séquence sélectionné sera utilisé comme modèle pour toutes les séquences créées.';
$string['updatemode_help'] = 'Si vous autorisez la modification des séquences, vous devez aussi indiquer comment les modifier.';
$string['updateonly'] = 'Ne modifier que les séquences existantes';
$string['uploadcourses'] = 'Modifier des séquences en lots';
$string['uploadcourses_help'] = 'Des séquences peuvent être créése ou modifiées en déposant un fichier texte. Le format du fichier doit être le suivant : * chaque ligne du fichier contient un seul enregistrement ; * chaque enregistrement consiste en une série de données séparées par des virgules (ou d\'autres séparateurs) ; * le premier enregistrement contient une liste des champs (en anglais), définissant ainsi le format du reste du fichier ; * les champs requis sont le nom abrégé (shortname), le nom complet (fullname) et la catégorie de la séquence(category).';
$string['uploadcoursespreview'] = 'Prévisualisation du fichier de séquence déposé';
$string['uploadcoursesresult'] = 'Résultats du traitement du fichier de séquence';
