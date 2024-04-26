//For getting Daily Quote - start
$(document).ready(function() {
    // Fetch server date and time
    updateServerDateTime();

    // Fetch daily quote
    updateDailyQuote();
});

function updateDailyQuote() {
    $.ajax({
        url: 'get_quote.php',
        dataType: 'json',
        success: function (quote) {
            $('#dailyQuote').html('<em>Today\'s ' + quote.adjective + ' quote, from ' + quote.author  +  ': ' + quote.text + '</em>');
        },
        error: function (error) {
            console.error('Error fetching daily quote:', error);
        }
    });
}
//for getting daily quote - end