<?php
/**
 * Contains a helper class that should simplify using the templates
 */

namespace ACDH\FcsXmlTemplates;

/**
 * This class is meant as a central "regsitry" for XML template files
 * so they can be easyly referenced like
 * FCSTemplates::getPath(FCSTemplates::$some_template)
 */
class FCSTemplates {
    public static $diagnostics_template = "diagnostics_template.xml";
    public static $explain = "explain.xml";
    public static $scan_collections = "scan_collections.xml";
    public static $scan_diagnostics_template = "scan_diagnostics_template.xml";
    public static $sru_diagnostics_template = "sru_diagnostics_template.xml";
    public static $sru_response_template = "sru_response_template.xml";
    public static $sru_scan_collections_template = "sru_scan_collections_template.xml";
    public static $sru_scan_template = "sru_scan_template.xml";
    public static $switch_explain = "switch_explain.xml";
    /**
     * 
     * @param string $file A file that can be found in the templates dir of this project
     * @return string A full
     */
    public static function getPath($file) {
        return __DIR__ . "/../templates/" . $file;
    }
}