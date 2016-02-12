<?php
/**
 * Created by PhpStorm.
 * User: Stepan
 * Date: 10.02.2016
 * Time: 22:23
 */

require 'config.php';
require 'menu.php';

use StepanSib\AlmClient\AlmClient;
use StepanSib\AlmClient\AlmQuery;

$almClient = new AlmClient($connectionParams);
$query = $almClient->getManager()->createQuery();

// Create query and get result URL
$plainQuery = $query->select(AlmQuery::ENTITY_DEFECT)
    ->where('id', '>=5000')
    ->where('status', 'Open')
    ->where('owner', 'syudin')
    ->getQueryUrl();

// Execute query and iterate result
var_dump($query->execute());