import { sort } from './sort.js';
import { filter } from './filter.js';
import { csv } from './csv.js';
import { carousel } from './carousel.js';

const config = {};

config.sort = {};	
config.sort.tableID = 'configurator';
config.sort.rowsSelector = 'tbody > tr:not( .no-results )';
sort( config.sort );

config.filter = {};	
config.filter.tableID = 'configurator';
config.filter.filterID = 'filter';
config.filter.noResultsClass = 'no-results';
filter( config.filter );

config.csv = {};
config.csv.tableID = 'configurator';
config.csv.downloadID = 'download';
config.csv.filename = 'configurator-modules';
config.csv.rowsSelector = 'tr:not( .hidden ):not( .no-results ), tbody:has( .flex ):not( :has( .filtered ) ) tr:not( .no-results ), tr.filtered:not( .no-results )';
csv( config.csv );

config.carousel = {};
config.carousel.mediaRule = '( width <= 960px )';
config.carousel.tableID = 'configurator';
config.carousel.filterID = 'filter';
config.carousel.previousClass = 'previous';
config.carousel.nextClass = 'next';
config.carousel.rowsSelector = 'tbody > tr:not( .no-results )';
carousel( config.carousel );