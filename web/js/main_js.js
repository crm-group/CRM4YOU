
jQuery(function ($) {

    var chart3 = $('#geoChart').chartinator({
        tableSel: '.geoChart',

        columns: [{role: 'tooltip', type: 'string'}],

        colIndexes: [2],

        rows: [
            ['China - 2015'],
            ['Colombia - 2015'],
            ['France - 2015'],
            ['Italy - 2015'],
            ['Japan - 2015'],
            ['Kazakhstan - 2015'],
            ['Mexico - 2015'],
            ['Poland - 2015'],
            ['Russia - 2015'],
            ['Spain - 2015'],
            ['Tanzania - 2015'],
            ['Turkey - 2015']],

        ignoreCol: [2],

        chartType: 'GeoChart',

        chartAspectRatio: 1.5,

        chartZoom: 1.75,

        chartOffset: [-12,0],

        chartOptions: {

            width: null,

            backgroundColor: '#fff',

            datalessRegionColor: '#F5F5F5',

            region: 'world',

            resolution: 'countries',

            legend: 'none',

            colorAxis: {

                colors: ['#679CCA', '#337AB7']
            },
            tooltip: {

                trigger: 'focus',

                isHtml: true
            }
        }


    });
});


addEventListener("load", function()
{
    setTimeout(hideURLbar, 0);
    }, false); function hideURLbar(){ window.scrollTo(0,1); }