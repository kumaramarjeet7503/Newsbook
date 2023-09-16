$(document).ready(function () {
    console.log("loaded........");
    getNews();
});


mobiscroll.settings = {
    lang: 'en',      // Specify language like: lang: 'pl' or omit setting to use default
    theme: 'ios',              // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light' 
}

//  Get news from the news API
 function getNews()
{   
    $.ajax({
        url:"/news/getnews",
        headers: {'Accept': 'application/json'},
        method : "POST",
        success:function(response){
           
            var jsonObject = JSON.parse(response);
            if(jsonObject['status'] == 'ok')
            {
                var count = 1 ;
                var articles = jsonObject['articles'] ;  
                console.log(articles[0]);
                articles.forEach(function (article) {
                    
                    createNewsCard(article,count);
                    count++;
                });                
                 
            }
          
        },
        error : function(response)
        {
            console.log(response) ;
            alert("error");
        }
    });

}

// Create news card for the article
function createNewsCard(article,count)
{
    var linkPost = $('<a>').attr('href',article.url).attr('target', '_blank');
    var linkPost1 = $('<a>').attr('href',article.url).attr('target', '_blank');
    // Create a new div element with the mbsc-card class
    var cardDiv = $('<div>').addClass('mbsc-card');

    // Create the card header
    var cardHeader = $('<div>').addClass('mbsc-card-header pt-1');
    var avatarImg = $('<img>').attr('src', 'https://source.unsplash.com/random/200x200?sig='+count).addClass('mbsc-avatar mb-2');
    var title = $('<h5>').addClass('mbsc-card-title mbsc-bold').text(article.author == null ? 'Anonymous' : article.author );
    var subtitle = $('<div>').addClass('mbsc-card-subtitle').text(' at '+getDateFormatted(article.publishedAt));
    cardHeader.append(avatarImg, title, subtitle);
    

    // Create the card image
    var cardImage = $('<img>').attr('src',article.urlToImage);

    // Create the card content
    var cardContent = $('<div>').addClass('mbsc-card-content pb-2').text(article.title);

    linkPost.append(cardImage) ;
    linkPost1.append(cardContent);

    var cardDesc = $('<div>').addClass('mbsc-card-content pt-1').text(article.content == null ? "" : article.content.split('[')[0] );
    var hr = $('<hr>').attr('style','border-color : white; height : 3px') ;

    // Append the card header, image, and content to the card div
    cardDiv.append(cardHeader, linkPost, linkPost1,cardDesc);
    // linkPost.append(cardDiv); 
    // Append the card div to a container element (e.g., a div with the id "container")
    $('#news-card').append(cardDiv,hr);


}

// Format the date and time in a specific format (e.g., "dd-mm-yyyy HH:MM")
function getDateFormatted(dateTime)
{
    // Create a Date object representing a specific date and time
        var currentDate = new Date(dateTime);

        var formattedDate =
        ('0' + (currentDate.getMonth() + 1)).slice(-2) + '-' +
        ('0' + currentDate.getDate()).slice(-2) + '-' +
        currentDate.getFullYear() + ' ' +

        ('0' + currentDate.getHours()).slice(-2) + ':' +
        ('0' + currentDate.getMinutes()).slice(-2) ;
        return formattedDate ;
}