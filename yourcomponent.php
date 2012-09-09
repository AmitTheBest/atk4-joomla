<?php

/* PUT THIS FILE OUT OF THE FOLDER IN ROOT OF YOUR COMPONENT */
$component=JRequest::getVar('option');
require "components/$component/index.php";