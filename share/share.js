//var shareWindowTitle='';
$(function() {
    $('#share').find('a').on('click', function(e) {
        e.preventDefault();
        window.open(this.href, $(this).parent().data('title'), "toolbar=0,resizable=1,status=0,width=640,height=528");
    })
})