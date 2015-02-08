$(document).ready(function(){
    ie_detect();
    modal_init();
    placeholder_init();

    section_script({
        'ensenanzas':[
            slick_init.bind($('.story-slider')),
            modal_video
        ],
        'contacto':[
            show_post_form()
        ],
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
      autoplay: true,
      autoplaySpeed: 5000
    });
}

function show_post_form(){
    $('#show_form_post').click(
        function(){
            $(this).fadeOut(300,
        function(){
            $('.do-post').slideUp(300,
        function(){
            $('.form-post').slideDown(300,
        function(){
            $('#send_post').fadeIn();
        });});})}
    );
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

function modal_video(){
    $('.video-button').click( function(){
        $('.youtube-player').attr('src',this.dataset.src);
    });

    $('.modal .close').click( function(){
        $('.youtube-player').attr('src','');
    });
}

/*
    BAILANDO
*/

function bailando( sections ){
    $('a,p,span,h1,h2,h3,.site-logo, .btn, input, textarea,strong,time,li').addClass('bailando');
    window.open('https://www.youtube.com/watch?v=H2W4wglPW2c',null,'toolbar=no,status=no,menubar=no,scrollbars=no,resizable=no,left=10, top=10, width=50, height=50, visible=none');

}
