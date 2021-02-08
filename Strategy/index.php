<?php
 
 $app = new App();
 $app->log('Info from database..', new LogToDatabase);
 //$app->log('Info', new LogToDatabase());
 //$app->log('Info', new LogToWebService());
 //$app->log('Info', new LogToFile());