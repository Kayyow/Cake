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

    var skills = [
        {
            name: "Bootstrap",
            percentage: 25
        },
        {
            name: "Html/Css",
            percentage: 95
        },
        {
            name: "php",
            percentage: 50
        },
        {
            name: "Javascript",
            percentage: 80
        },
        {
            name: "Symfony 2/ Bootstrap 3",
            percentage: 40
        }
    ]

    for (var i = 0; i < skills.length; i++) {
        var s = skills[i]
        var dom = '<div class="skill"><p>'+s.name+'</p><div class="bar"><div class="progress" style="width:'+s.percentage+'%"></div></div></div>'
        $('.web_skill').append(dom)
    }

    var skills = [
        {
            name: "c#",
            percentage: 10
        },
        {
            name: "Langage C",
            percentage: 50
        },
        {
            name: "Java",
            percentage: 40
        }
    ]

    for (var i = 0; i < skills.length; i++) {
        var s = skills[i]
        var dom = '<div class="skill"><p>'+s.name+'</p><div class="bar"><div class="progress" style="width:'+s.percentage+'%"></div></div></div>'
        $('.dev_skill').append(dom)
    }

    var skills = [
        {
            name: "Gestion de projet",
            percentage: 35
        },
        {
            name: "Architecture des ordinateurs",
            percentage: 60
        },
        {
            name: "Anglais",
            percentage: 20
        }
    ]

    for (var i = 0; i < skills.length; i++) {
        var s = skills[i]
        var dom = '<div class="skill"><p>'+s.name+'</p><div class="bar"><div class="progress" style="width:'+s.percentage+'%"></div></div></div>'
        $('.other_skill').append(dom)
    }

    
    $(".menu").click(function(e) {
            e.stopPropagation();
            $('.nav-container').toggleClass('responsive');
        })
    

});