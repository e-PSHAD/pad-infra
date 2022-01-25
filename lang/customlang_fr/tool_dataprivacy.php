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
 * @subpackage dataprivacy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_help'] = 'Une catégorie du registre des données décrit un type de données Une nouvelle catégorie peut être ajoutée, ou, si Hériter est sélectionné, la catégorie d\'un contexte supérieure est attribuée. Les contextes sont (du bas vers le haut) : Blocs > Modules d\'activité > Séquences > Catégories de séquence > Utilisateur > Site.';
$string['categorydefault_help'] = 'La catégorie par défaut est la catégorie de données attribuée à toute nouvelle instance. Si Hériter est sélectionné, la catégorie de données du contexte supérieur est attribuée. Les contextes sont (du bas vers le haut) : Blocs > Modules d\'activité > Séquences > Catégories de séquence > Utilisateur > Site.';
$string['contextlevelname40'] = 'Catégories de séquence';
$string['contextlevelname50'] = 'Séquences';
$string['effectiveretentionperiodcourse'] = '{$a} (après la date de fin de la séquence)';
$string['frontpagecourse'] = 'Séquence page d\'accueil';
$string['purpose_help'] = 'La finalité décrit la raison du traitement des données. Une nouvelle finalité peut être ajoutée, ou, si Hériter est sélectionné, la finalité d\'un contexte supérieur est attribuée. Les contextes sont (du bas vers le haut) : Blocs > Modules d\'activité > Séquences > Catégories de séquence > Utilisateur > Site.';
$string['purposedefault_help'] = 'La finalité par défaut est la finalité qui est attribuée à toute nouvelle instance. Si Hériter est choisi, la finalité du contexte supérieur est attribuée. Les contextes sont (du bas vers le haut) : Blocs > Modules d\'activité > Séquences > Catégories de séquence > Utilisateur > Site.';
$string['requireallenddatesforuserdeletion'] = 'Considérer les séquences sans date de fin comme actives';
$string['requireallenddatesforuserdeletion_desc'] = 'Lors du calcul de l\'échéance d\'un utilisateur, plusieurs facteurs sont considérés : * la date de la dernière connexion de l\'utilisateur est comparée à la date de conservation des données des utilisateurs, et * l\'inscription active de l\'utilisateur dans des séquences. Lors de la vérification d\'une inscription active dans une séquence, si la séquence n\'a pas de date de fin, ce réglage est utilisé pour déterminer si la séquence doit être considérée comme active. Si ce réglage est activé et que la séquence n\'a pas de date de fin, l\'utilisateur ne peut pas être supprimé.';
