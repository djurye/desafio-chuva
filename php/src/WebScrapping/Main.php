<?php

namespace Chuva\Php\WebScrapping;

require_once 'Scrapper.php';
require_once 'Spouter.php';

/**
 * Runner for the Webscrapping exercice.
 */
class Main {

  /**
   * Main runner, instantiates a Scrapper and runs.
   */
  public static function run(): void {
    $dom = new \DOMDocument('1.0', 'utf-8');
    $dom->loadHTMLFile(__DIR__ . '/../../assets/origin.html');

    $data = (new Scrapper())->scrap($dom);

    // Write your logic to save the output file bellow.
    $data = (new Spouter())->spouter($data);
    print_r($data);
  }
}
Main::run();
