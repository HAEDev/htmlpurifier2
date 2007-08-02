<?php

require_once 'HTMLPurifier/URIParser.php';

class HTMLPurifier_URIHarness extends HTMLPurifier_Harness
{
    
    /**
     * Prepares two URIs into object form
     * @param &$uri Reference to string input URI
     * @param &$expect_uri Reference to string expectation URI
     * @note If $expect_uri is false, it will stay false
     */
    function prepareURI(&$uri, &$expect_uri) {
        $parser = new HTMLPurifier_URIParser();
        if ($expect_uri === true) $uri = $expect_uri;
        $uri = $parser->parse($uri);
        if ($expect_uri !== false) {
            $expect_uri = $parser->parse($expect_uri);
        }
    }
    
    /**
     * Generates a URI object from the corresponding string
     */
    function createURI($uri) {
        $parser = new HTMLPurifier_URIParser();
        return $parser->parse($uri);
    }
    
}