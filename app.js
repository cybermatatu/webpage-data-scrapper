$(document).ready(function(){
    setInterval(function() {
       $.ajax({
         url: 'http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%20in%20%28%22USDKES%22,%20%22EURKES%22,%20%22GBPKES%22,%20%22JPYKES%22%29&format=json&env=store://datatables.org/alltableswithkeys',
         dataType: 'json',
         cache: true,
         timeout: 30000,
         success: function(data) {    
            
            $('#output ul').empty();
            $('#output ul').append(data);

            $.each(data.query.results.rate, function(i,data){ 

                 $('#output ul').append('<li>' + data.Name + ' : ' + data.Rate + ' : ' + data.Time  + ' : ' + data.Ask + ' : ' + data.Bid + '</li>');

             });

           },
            error: function(){
               $('#output ul').append('<li>Error');
           }
        });
    }, 1000 * 5);
 });