$(document).ready(function(){
    ie_detect();
    modal_init();
    placeholder_init();

    section_script({
        'ensenanzas':[
            slick_init.bind($('.story-slider'))
        ]
    })

})


function ie_detect(){
    var ieRegexp = /MSIE\s(:?\d\d?([\.][\d])?)/;
    ie_version =
        navigator.userAgent.match(ieRegexp) ?
        parseInt(navigator.userAgent.match(ieRegexp)[1]) :
        undefined;

    if(ie_version){ $(document.body).addClass('ie')}
}


function modal_init(){
    if($(document.body).hasClass('ie') == false){
        $(document.body).perfectScrollbar({
            wheelSpeed:1,
            wheelPropagation: true,
            minScrollbarLength: 1
        });

        if($(".modal")[0]){

            $(document)
            .on( 'hidden.bs.modal', '.modal', function() {
                $(document.body).perfectScrollbar('destroy');
                $(document.body).perfectScrollbar({
                    wheelSpeed: 1,
                    wheelPropagation: true,
                    minScrollbarLength: 1
                });

            })
            .on( 'show.bs.modal', '.modal', function() {
                $(document.body).perfectScrollbar('destroy');
                $(document.body).perfectScrollbar({
                    wheelSpeed: 	0,
                    wheelPropagation: true,
                    minScrollbarLength: 1
                });

            });

        }
    }
}

function placeholder_init(){
    if($('form')[0]){
        $('input, textarea').placeholder();
    }
}

function slick_init(){
    $(this).slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 5000
    });
}



/*
    DETECTA SECCION Y CARGA SCRIPTS
*/

function section_script( sections ){
    var functions;
    var actual_section = $(document.body).data('section');
    for( var s in sections ){
        if ( s != actual_section) { continue; }
        functions = sections[s];
        for( var f in functions ){
            functions[f]();
        }
    }
}
