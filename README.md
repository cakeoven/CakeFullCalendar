### This is a CakePHP plugin to work with FullCalendar

## Thanks

This plugin is forked from https://github.com/silasmontgomery/CakePHP-Full-Calendar-Plugin

## Description

The CakePHP Full Calendar Plugin allows you to easily integrate
the jQuery based Full Calendar application with your CakePHP 
application for a slick ajax event calendar.

The plugin brings the following MIT licensed software (see
LICENCE) together to create a simple and sleek experience:

## Todo

Write a better README

Notice: The readme file is incomplete.

# Requirements
 - CakePHP (http://cakephp.org) Required by this plugin
 - Full Calendar (http://arshaw.com/fullcalendar) The jQuery based Calendar
 - jQuery (http://jquery.com) Required by Full Calendar
 - jQuery UI (http://jqueryui.com) Required for draggable and resizable events
 - qTip2 (http://craigsworks.com/projects/qtip) A jQuery plugin for hover details

## Installing

NOTE: These instructions assume you already have a working copy
of CakePHP with a database connection on your web server.

You can read up on CakePHP installation and DB config here:
http://book.cakephp.org/#!/view/913/Development AND
http://book.cakephp.org/#!/view/922/Database-Configuration


INSTALLED IN 4 SIMPLE STEPS

1. Download or fork the CakePHP Full Calendar Plugin at:
   https://github.com/silasmontgomery/CakePHP-Full-Calendar-Plugin

2. Create the folder "FullCalendar" in your "app/Plugin" directory 
   and copy the Config, Controller, Model, View, and webroot 
   folders into it.

3. Create an "events" and "event_types" table by importing the
   "FullCalendar.sql" file found in the "FullCalendar/Config" 
   directory (Using PHPMyAdmin, command-line, etc).

4. In your Cake installation, edit "app/Config/bootstrap.php" 
   and add the line "CakePlugin::load('FullCalendar');" at the 
   bottom.

THAT'S IT!

You should now be able to access the Full Calendar Plugin at:
http://yoursite.com/full_calendar

You should add some Event Types first. Then you can start
scheduling some Events!
