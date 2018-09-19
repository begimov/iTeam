export default {
    data () {
        return {
            projects: [
                {
                    id: 1, 
                    title: 'Компания &laquo;АСТ&raquo; г. Краснодар', 
                    description: 'Дистрибуция сельскохозяйственной и&nbsp;дорожно-строительной техники',
                    details: "<ul class='mb-1'><li>Разработка Положения об организационной структуре</li><li>Разработка показателей KPI</li></ul>",
                    url: 'https://act.su'
                }
            ]
        }
    },
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