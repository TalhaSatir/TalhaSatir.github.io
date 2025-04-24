$(document).ready(function() {
    // preload images
    $("#image_list a").each(function() {
        var swappedImage = new Image();
        swappedImage.src = $(this).attr("href");
    });
    
    // set up event handlers for links    
    $("#image_list a").click(function(evt) {
        // cancel the default action of the link *first* so URL doesn’t change
        evt.preventDefault();

        var imageURL = $(this).attr("href");
        var caption  = $(this).attr("title");
        $("#caption").text(caption);
      
        $("#image")
            .fadeOut(1100)
            .promise()            
            .done(function() {
                $("#image").attr("src", imageURL);
                $("#image").fadeIn(1300);
            });
    }); // end click
    
    // move focus to first thumbnail
    $("li:first-child a").focus();
}); // end ready
