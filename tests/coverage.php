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

defined('MOODLE_INTERNAL') || die();

/**
 * Code coverage.
 *
 * @package    repository_s3bucket
 * @copyright  2018 iplusacademy.org
 * @author     Renaat Debleu <info@eWallah.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Phpunit coverage info.
 *
 * @copyright  2018 iplusacademy.org
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
return new class extends phpunit_coverage_info {
    /** @var array The list of folders relative to the plugin root to whitelist in coverage generation. */
    protected $whitelistfolders = [
        'classes/privacy',
        'lib.php',
    ];

    /** @var array The list of files relative to the plugin root to whitelist in coverage generation. */
    protected $whitelistfiles = [];

    /** @var array The list of folders relative to the plugin root to excludelist in coverage generation. */
    protected $excludelistfolders = [];

    /** @var array The list of files relative to the plugin root to excludelist in coverage generation. */
    protected $excludelistfiles = [];
};