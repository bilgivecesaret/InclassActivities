$(document).ready(function () {  
    $("#nav_list li a").click(function() {    
        var jsonFile = "json_files/"+$(this).attr("title") + ".json";
        
        $.getJSON(jsonFile, function(data) {
           var speaker = data.speakers[0];
           
           $("main h1").text(speaker.title);
           $("main img").attr("src", speaker.image);
           $("main h2").html(speaker.month + "<br>" + speaker.speaker);
           $("main p").text(speaker.text);
        })
     });
});

