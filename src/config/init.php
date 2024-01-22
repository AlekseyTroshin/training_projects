<?php

define("ROOT", dirname(__DIR__));

const APP_STRING = "/app";
const CONTROLLER_STRING = "/controller";

const CONFIG = ROOT . "/config";
const WWW = ROOT . "/public";
const APP = ROOT . APP_STRING;
const CONTROLLER = APP . CONTROLLER_STRING;


const APP_LOCAL = ".." . APP_STRING;
const CONTROLLER_LOCAL = APP_LOCAL . CONTROLLER_STRING;

require_once ROOT . '/vendor/autoload.php';