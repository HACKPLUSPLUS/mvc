function displayMessage(msg) {
    $('#flight-data').append('<div>' + msg + '</div>');
}

function displayLoader() {
    html = '<div class="show">';
    html += '<div class="progress" role="progressbar" data-goal="100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="13">';
    html += '<div class="progress__bar" style="width: 13%;"></div>';
    html += '</div>';
    html += '<div id="wachtmelding" class="textcenter">Wij maken nu verbinding</div>';
    html += '</div>';

    $('#flight-data').html(html);

    var meldingcount = 0;
    var melding = [];
    melding[1] = 'Wij halen nu alle beschikbare vluchten op';
    melding[2] = 'Lorum IPsum version 6.0';
    melding[3] = 'Beschikbaarheid wordt live gecontroleerd';
    melding[4] = 'De meest actuele prijzen worden nu ingeladen';

    $('.progress').asProgress({
        'namespace': 'progress',
        'speed': 80,
        onUpdate: function(n){
            var percentage = this.getPercentage(n);
            if(percentage == 100) {
                meldingcount++;
                $('#wachtmelding').html(melding[meldingcount]);
                $('.progress').asProgress('reset');
            }
        },
        onReset: function(){
            setTimeout(function() { $('.progress').asProgress('start'); }, 300);
        }
    });
}

function displaySegment(wayName, segment) {
    className = (wayName === 'Terugreis') ? ' gly-rotate-90' : ''; //rotate plane icon for return flight
    html = '<div class="textleft width100">';
    html += '<div class="floatleft width10 margintop20 marginright10"><i class="fa fa-plane fa-2x vertical-align-middle margin-right-15' + className + '"></i></div>';
    html += '<div class="floatleft width80">';
    html += '<span class="bold">' + wayName + ' ' + changeDateFormat(segment.departureDate) + '</span>';
    html += '<span class="width100">' + segment.departureTime.substring(0, 5) + '  ' + segment.departure + ' <span class="' + segment.carrierFullName.toLowerCase() + '-logo floatright"></span></span>';
    html += '<span class="width100">' + segment.arrivalTime.substring(0, 5) + '  ' + segment.arrival + '</span>';
    html += '</div>';
    html += '</div>';

    return html;
}

function displayFlight(key, flight) {
    style = (key === 1) ? 'borderblue1' : 'bordergrey1';
    style2 = (key === 1) ? 'borderbottomwhite1 ' : 'borderbottomgrey1 ';

    html = '<div id="' + key + '" data-flight="" class="width45 marginright10 height250 textcenter flightprice_choice flight_result ' + style + ' marginbottom10">';
    html += '<div class="padding10">';
    html += displaySegment('Heenreis', flight.outbound);
    html += '<div class="' + style2 + 'height1 width100 margintop10 marginbottom10 hrdiv"></div>';
    html += displaySegment('Terugreis', flight.inbound);
    html += '<div class="' + style2 + 'height1 width100 margintop10 marginbottom10 hrdiv"></div>';
    html += '<div class="prijsb font14">+ &euro; ' + Math.ceil(flight.price/2) + ' p.p.</div>';
    selected = (key === 1) ? ' checked="checked"' : '';
    html += '<input name="flights" type="radio" class="marginright5"' + selected + ' data-flight="">';
    html += '</div>';
    html += '</div>';

    $('#flight-data').append(html);

    $('#'+key).attr('data-flight', JSON.stringify(flight));
}

function displayRemoveFlightsButton() {
    html = '<div class="regelpadding overflow-auto clear-both">';
    html += '<a id="remove-flights" class="button midblauwbg font16 width100 rounded">Vluchten verwijderen > cruise only</a>';
    html += '</div>';
    
    $('#flight-data').append(html);
    
    $('#remove-flights').on("click", function() {
        $('#search-flights').show();
        $('#flight-data').empty();
        $('.prijsoverzicht_segmenten').addClass('displaynone');
        $('#offerte_checkbox_vluchten').prop('checked', false);
        $("#cruisepagina_vervoer").html("Cruise Only");
        
        calculatePrice();
    });
}

function persistFlightData(flight) {
    $('.flightprice_choice').removeClass('lichtblauwbg');
    $('.flightprice_choice').removeClass('borderblue1');
    $('.flightprice_choice').addClass('bordergrey1');
    $('.hrdiv').removeClass('borderbottomwhite1');
    $('.hrdiv').addClass('borderbottomgrey1');

    withoutFlight = JSON.parse($('#jsonString').val());

    if (typeof withoutFlight.grandTotalWithoutFlight === 'undefined') {
        withoutFlight.grandTotalWithoutFlight = withoutFlight.totaalPrijs;
    }

    if (typeof withoutFlight.pricePerPersonWithoutFlight === 'undefined') {
        withoutFlight.pricePerPersonWithoutFlight = withoutFlight.prijsPP;
    }

    flight.price = Math.ceil(flight.price);
    totalPerPerson = (flight.price/2)+Math.floor(withoutFlight.pricePerPersonWithoutFlight);
    grandTotal = flight.price+withoutFlight.grandTotalWithoutFlight;

    withoutFlight.totaalPrijs = grandTotal;
    withoutFlight.prijsPP = totalPerPerson;

    withoutFlight[1].flightAdult = flight.price/2;
    withoutFlight[1].flightChild = flight.price/2;
    withoutFlight[1].flightInfant = flight.price/2;
    withoutFlight.vluchtmaatschappij = flight.outbound.carrierFullName;
    withoutFlight.transfers = 'Y';
    withoutFlight.vlucht_heen_datum = "di " + flight.outbound.departureDate;
    withoutFlight.vlucht_heen_steden = flight.outbound.departure + " - " + flight.outbound.arrival;
    withoutFlight.vlucht_heen_tijd_vertrek = "di " + flight.outbound.departureTime;
    withoutFlight.vlucht_heen_tijd_aankomst = "di " + flight.outbound.arrivalTime;
    withoutFlight.vlucht_heen_duur = flight.outbound.totalFlyTime;
    withoutFlight.vlucht_heen_vluchtnummer = flight.outbound.flightCode;
    withoutFlight.vlucht_heen_overstap = flight.outbound.stops;
    withoutFlight.vlucht_terug_datum = "zo " + flight.inbound.departureDate;
    withoutFlight.vlucht_terug_steden = flight.inbound.departure + " - " + flight.inbound.arrival;
    withoutFlight.vlucht_terug_tijd_vertrek = "zo " + flight.inbound.departureTime;
    withoutFlight.vlucht_terug_tijd_aankomst = "zo " + flight.inbound.arrivalTime;
    withoutFlight.vlucht_terug_duur = flight.inbound.totalFlyTime;
    withoutFlight.vlucht_terug_vluchtnummer = flight.inbound.flightCode;
    withoutFlight.vlucht_terug_overstap = flight.inbound.stops;
    withoutFlight.vlucht_prijs = flight.price/2;
    withoutFlight.cruisefly = "dynamic";

    $('#jsonString').val(JSON.stringify(withoutFlight));

    html = '<span class="width58 floatleft">' + flight.adults + 'x heenvlucht</span><span class="variabel width38 textright floatright">&euro; ' + flight.price/2 + ',-</span>';
    html += '<span class="width58 floatleft">' + flight.adults + 'x terugvlucht</span><span class="variabel width38 textright floatright">&euro; ' + flight.price/2 + ',-</span>';

    $("#prijsoverzicht_vluchten").html(html);
    $("#cruisepagina_vervoer").html("Cruise + Vluchten");

    $("#boekingsoverzicht_totaalprijs").html('&euro; ' + grandTotal + ',-');
    $("#boekingsoverzicht_pp").html('&euro; ' + totalPerPerson + ',-');

    $('.prijsoverzicht_segmenten').removeClass('displaynone');
    $('.prijsoverzicht_segment_titel_transfers').remove();
}

departureDate = $('#boekingsoverzicht_vertrekdatum2').text();
departureDate = departureDate.trim();

formattedDepatureDate = departureDate.substr(6,4) + '-' + departureDate.substr(3,2) + '-' + departureDate.substr(0,2);

var weekDays = new Array();
weekDays[0] = 'zondag';
weekDays[1] = 'maandag';
weekDays[2] = 'dinsdag';
weekDays[3] = 'woensdag';
weekDays[4] = 'donderdag';
weekDays[5] = 'vrijdag';
weekDays[6] = 'zaterdag';

var months = new Array();
months[0] = 'januarie';
months[1] = 'februarie';
months[2] = 'maart';
months[3] = 'april';
months[4] = 'mei';
months[5] = 'juni';
months[6] = 'juli';
months[7] = 'augustus';
months[8] = 'september';
months[9] = 'oktober';
months[10] = 'november';
months[11] = 'december';

function changeDateFormat(date) {
    var d = new Date(date);

    return weekDays[d.getDay()] + ' ' + d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
}

$('#search-flights').on('click', function() {
    $('#search-flights').hide();

    departureDate = $('#boekingsoverzicht_vertrekdatum2').text();
    departureDate = departureDate.trim(); //problem with encoding

    returnDate = $('#boekingsoverzicht_terugkeerdatum2').text();
    returnDate = returnDate.trim(); //problem with encoding

    formattedDepatureDate = departureDate.substr(6,4) + '-' + departureDate.substr(3,2) + '-' + departureDate.substr(0,2);

    displayLoader();

    $.ajax({
        url: "/api/boemm/index.php",
        method: "post",
        data: {
            departureDate: formattedDepatureDate,
            returnDate: returnDate,
            destinationAirport: destinationAirport,
            departureAirport: 'AMS',
            preferredCarrier: [],
            filters: filters,
            transferMargin: transferMargin
        },
        success: function(data){
            $('#flight-data').empty();

            if ('failure' === data.result || typeof(data['data']) !== 'object') { //webservice returned error
                displayMessage('De zoek vluchten webservice antwoorde met een failure code. Probeer het opnieuw.');
                $('#search-flights').show();

                return;
            }

            if (data['data'].filtered.length === 0) { //empty results or data is a string
                displayMessage('Er zijn geen vluchten gevonden, probeer het opnieuw');
                $('#search-flights').show();

                return;
            }

            $('#offerte_checkbox_vluchten').prop('checked', true);

            $.each(data['data'].filtered, function(key, value) {
                if (key < 2) {
                    displayFlight(key+1, value);
                }
                if (key === 0) {
                    persistFlightData(value);
                }
            });
            
            displayRemoveFlightsButton();

            $('.flightprice_choice:first').addClass('lichtblauwbg');
            $('.flightprice_choice:first').find('.hrdiv').removeClass('borderbottomgrey1');
            $('.flightprice_choice:first').find('.hrdiv').addClass('borderbottomwhite1');

            $(".inclusief_vluchten").removeClass("displaynone");
            $(".extra_optioneel_cruisefly").addClass("displaynone");

            //newKey = data['data'].filtered.length; // pass on the counter from

            //$.each(data['data'].unfiltered, function(key, value) {
                //displayFlight(key+1+newKey, value);
            //});

            $('.flight_result').on("click", function() {
                persistFlightData($(this).data('flight'));
                $(this).addClass('border');
                $(this).addClass('lichtblauwbg');
                $(this).removeClass('bordergrey1');
                $(this).addClass('borderblue1');
                $(this).find('input:radio').prop('checked', true);
                $(this).find('.hrdiv').removeClass('borderbottomgrey1');
                $(this).find('.hrdiv').addClass('borderbottomwhite1');
            });
        }
    }).fail(function() {
        $('#flight-data').empty();
        displayMessage('Er ging iets mis. Probeer het opnieuw.');
        $('#search-flights').show();
    }).always(function() {
        //console.log('this is always done');
    });
});