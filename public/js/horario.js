$("#lunes").slider({min  : 1, max  : 6, value: [3, 6], orientation: 'vertical', tooltip_position:'top'});
$("#martes").slider({min  : 1, max  : 6, value: [1,5], orientation: 'vertical', tooltip_position:'left'});
$("#miercoles").slider({min  : 1, max  : 6, value: [1,5], orientation: 'vertical', tooltip_position:'right'});
$("#jueves").slider({min  : 1, max  : 6, value: [3,5], orientation: 'vertical', tooltip_position:'left'});
$("#viernes").slider({min  : 1, max  : 6, value: [2,4], orientation: 'vertical', tooltip_position:'botton'});
$("#ex13").slider({
    ticks: [0, 100, 200, 300, 400],
    ticks_labels: ['$0', '$100', '$200', '$300', '$400'],
    ticks_snap_bounds: 30
});