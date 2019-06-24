<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*
* Config file for storing fixed variables
*
*/

/*
|--------------------------------------------------------------------------
| Show time on dashboard and QSO-details if not logged in
|--------------------------------------------------------------------------
| 
| If you want to show QSO-times (additional to the date) on the dashboard
| and on QSO-detail-view, set this to TRUE, otherwise set it to FALSE
|
*/
$config['show_time'] = FALSE;

/*
|--------------------------------------------------------------------------
| Configure the measurement base distance is measured in
|--------------------------------------------------------------------------
| 
| Here you can configure different measurement bases to be used on
| distance caculations. Valid values are:
| M: miles
| K: kilometers
| N: nautic miles
| 
| Default is: M
|
*/
$config['measurement_base'] = 'M';