export default {
    mounted () {
        $('[data-toggle="popover"]').popover({
            html: true
        })
        $('[data-toggle="popover"]').on('shown.bs.popover', function () {
            $(this).append( "<div id='projects-popover-bg' class='w-100 h-100' style='position:fixed;left:0;top:0;background-color:#00000099;'>&nbsp;</div>" )
        })
        $('[data-toggle="popover"]').on('hidden.bs.popover', function () {
            $('#projects-popover-bg').remove()
        })
    }
}