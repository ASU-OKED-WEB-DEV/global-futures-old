import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();    
$("ul.dropdown.menu.desktop-menu li.home-icon a").replaceWith("<a href='#'><i class='fa fa-home fa-lg'></i></a>");