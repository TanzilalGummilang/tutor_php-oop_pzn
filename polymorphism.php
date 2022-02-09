<?php
require_once 'data/Programmer.php';

$company = new Company();

$company->programmer = new Programmer("aing");
var_dump($company);

$company->programmer = new FrontendProgrammer("aing2");
var_dump($company);

$company->programmer = new BackendProgrammer("aing3");
var_dump($company);

sayHelloProgrammer(new Programmer("urg"));
sayHelloProgrammer(new FrontendProgrammer("urg2"));
sayHelloProgrammer(new BackendProgrammer("urg3"));