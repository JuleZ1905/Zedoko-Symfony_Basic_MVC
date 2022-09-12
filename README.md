# CMS-VT | CORE | Symfony - Basic MVC

## Overview

The Paper Plane Pro Tournament Foundation (PPPTF) has tasked your agency with creating a web application for tracking the results of a paper plane tournaments which are held worldwide.
Because many standard functionalities are needed, your agency suggests to use the Symfony PHP framework for this task.
In order to showcase the basic advantages of a PHP framework for separation of concerns you are to build a demo application without a persistence layer.

## User Story 1
*As a WEB DEVELOPER I want Symfony (PHP Framework) installed on a local webserver (on my personal laptop), so that I can develop projects locally.*

### Acceptance Criteria
- The most current version (stable) of Symfony is ready to use locally
- Setup has been performed according to https://symfony.com/doc/current/setup.html 
- A Demo Website is available, featuring the customers logo and company name

## User Story 2
*As a PARTICIPANT of the paper plane tournament, I want to be able to see the results of the current round of the tournament, so that I can see how I fared in comparison to the other participants.*

### Acceptance Criteria
- A single page rendering a static ranking for a single round of the tournament is available
- TWIG is used for the View
- The route name is /results/1 (later to be the variable round number)
- A results entry consists of the following: paper plane model, travelled distance, flight duration, participant name, date
- Presentation takes the form of a simple table without special CSS
- The detail view serves mock data defined in the controller

## User Story 3
*As a PARTICIPANT of the paper plane tournament, I want to be able to see of all rounds of a tournament, so that I can get a comprehensive overview.*

### Acceptance Criteria
- A route for showing all tournament rounds exists
- The user can navigate to the detail view for an entry and back to the overview
- The detail view serves mock data defined in the controller
- The mock data includes the round id which is passed via the route

#### Links
https://my.skilldisplay.eu/en/skillset/113
