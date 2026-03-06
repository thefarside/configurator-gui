# Configurator-GUI
### Introduction
This is a module for the WordPress Configurator plugin that provides a graphical user interface for viewing module header data and load status. I made it as a way to easily verify modules for sites with large or complex configurations such as multisites. I also think it's a handy way to provide a visual context for an otherwise hidden layer of site complexity.

If nothing else it showcases using an MVP project as a Configurator module and can potentially serve as a skeleton for anyone interested in such a thing.

Anyway...
## Requirements
 + PHP 8.5.1
 + Wordpress 6.9.1
 + [wp-list-table 1.0](https://github.com/thefarside/wp-list-table/tree/main/)
 + [Configurator 2.0](https://github.com/thefarside/configurator/tree/main/) 

## Installation
All you have to do is unzip this project as "gui" into the Configurator plugin base and add the wp-list-table assets to it.

The end result should look like this:
```
wp-content\mu-plugins\configurator\gui\assets\scripts\carousel.js
wp-content\mu-plugins\configurator\gui\assets\scripts\csv.js
wp-content\mu-plugins\configurator\gui\assets\scripts\custom.js
wp-content\mu-plugins\configurator\gui\assets\scripts\filter.js
wp-content\mu-plugins\configurator\gui\assets\scripts\sort.js

wp-content\mu-plugins\configurator\gui\assets\styles\carousel.css
wp-content\mu-plugins\configurator\gui\assets\styles\custom.css
wp-content\mu-plugins\configurator\gui\assets\styles\filter.css
wp-content\mu-plugins\configurator\gui\assets\styles\sort.css
wp-content\mu-plugins\configurator\gui\assets\styles\tooltip.css

wp-content\mu-plugins\configurator\gui\models\class-page.php

wp-content\mu-plugins\configurator\gui\presenters\class-page.php

wp-content\mu-plugins\configurator\gui\views\templates\page.phtml
wp-content\mu-plugins\configurator\gui\views\class-page.php

wp-content\mu-plugins\configurator\gui\class-router.php
```
Now just login with an administrator account and you should see an item on the admin side menu in the backend.
## Demo/Screenshots
[Demo](https://thefarside.github.io/wp-list-table)

Sort:

![](https://thefarside.github.io/wp-list-table/screenshots/sort.png)

Filter:

![](https://thefarside.github.io/wp-list-table/screenshots/filter.png)

CSV:

![](https://thefarside.github.io/wp-list-table/screenshots/csv.png)

Carousel:

![](https://thefarside.github.io/wp-list-table/screenshots/carousel.png)

Tooltip:

![](https://thefarside.github.io/wp-list-table/screenshots/tooltip.png)

## License: GPLv2
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

> This is the minimum license that's inherited from WordPress.