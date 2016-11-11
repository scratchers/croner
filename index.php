<?php

require __DIR__.'/vendor/autoload.php';

use Crontab\Crontab;
use Crontab\Job;

// $cmd = 'echo "hello world" >> /tmp/asdfasdf.log 2>&1';
$log = '/tmp/asdfasdf.log';
$cmd = 'echo "hello world"';

$job = new Job();
$job
    ->setMinute('*')
    ->setHour('*')
    ->setDayOfMonth('*')
    ->setMonth('*')
    ->setDayOfWeek('*')
    ->setCommand($cmd)
    ->setLogFile($log)
;

$crontab = new Crontab();

// $crontab->addJob($job);

// $crontab->removeJob($crontab->getJobs()['ceb23a60f1e703e35d515fa381e3d0a4']);
// 
// $crontab->write();

// echo $crontab->render();


print_r($crontab->getJobs());
