function autoUpdatingCopyright(Start) {
    // given start year (e.g. 2004)
    var startYear = Start;

    // current year (e.g. 2007)
    var currentYear = now.getFullYear();

    // is the current year greater than the
    // given start year?
    if (currentYear > startYear) {
        $(".copyright").html(startYear + '-' + currentYear + ' James Hood. All Rights Reserved. Site By<a href="http://www.jameshood118.net" class="menuLink"> Hood Studios</a>');
    } else {
        $(".copyright").html(startYear + ' James Hood. All Rights Reserved. Site By<a href="http://www.jameshood118.net" class="menuLink"> Hood Studios</a>');
    }
