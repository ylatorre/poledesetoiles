require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import 'tw-elements';
// $(document).ready(function() {
//
//     var planetarium = $.virtualsky({
//         'id': 'starmapgnomic',
//         'projection': 'gnomic',
//         'ra': 83.8220833,
//         'dec': -5.3911111,
//         'ground': false,
//         'constellations': true,
//         'constellationlabels': true,
//         'meteorshowers': true,
//         'live':true,
//         'fov': 15
//     });
//
// });
