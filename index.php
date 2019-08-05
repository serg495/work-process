<?php

use App\HRManager;
use App\ProjectManager;
use App\State;
use App\TeamLead;

require __DIR__ . '/vendor/autoload.php';


$t70 = new TeamLead(new State(3));
$t1000 = new HRManager;
$t1001 = new ProjectManager;

$t70->subscribe($t1000, $t1001);

$t70->checkingWork(1);

echo 'HR' . $t1000->getAmountOfRebuke();
echo 'PM' . $t1001->getAmountOfPraise();
