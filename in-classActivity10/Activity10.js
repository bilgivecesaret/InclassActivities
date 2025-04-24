$(document).ready(function() {
    $("#birthday").datepicker();

    planguage = [
        "JAVA",
        "CSS",
        "HTML",
        "PYTHON",
        "C++",
        "C",
        "C#",
        "JAVASCRIPT",
        "PHP",
        "PERL"
    ];
    
    $("#PLanguage").autocomplete({
        source: planguage
    });
}); // end ready
