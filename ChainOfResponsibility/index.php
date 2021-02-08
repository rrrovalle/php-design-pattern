<?php

/* Start chain ring */
$locks  = new Locks();
$lights = new Lights();
$alarm  = new Alarm();

/** Hooked together */
$locks->successor($lights);
$lights->successor($alarm);

$locks->check(new Home());