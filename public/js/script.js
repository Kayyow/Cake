$(function() {
    $('body').scrollNav({
        showHeadline: false,
        showTopLink: false,
        speed: 700,
        insertTarget: '.nav-container',
        insertLocation: 'appendTo',
        fixedMargin: 0,
        scrollOffset: 60
    })

    $('#logo').click(function() {
        $(document).scrollTo('body', 700, 60, true)
    })

    var skills = [
        {
            name: "Administration Windows",
            percentage: 60
        },
        {
            name: "Administration Linux",
            percentage: 30
        },
        {
            name: "Base de données SQL Server",
            percentage: 50
        },
        {
            name: "Base de données Oracle",
            percentage: 80
        },
        {
            name: "Réseaux et télécommunications",
            percentage: 40
        }
    ]

    for (var i = 0; i < skills.length; i++) {
        var s = skills[i]
        var dom = '<div class="skill"><p>'+s.name+'</p><div class="bar"><div class="progress" style="width:'+s.percentage+'%"></div></div></div>'
        $('.reseau_skill').append(dom)
    }
});