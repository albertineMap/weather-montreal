$(async function(){

    let forecast=[];

    var moment = require('moment');
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


     //get weather_api_data
     async function get_weather_data() {
        try{
          let response = await fetch('https://api.openweathermap.org/data/2.5/onecall?lat=54.0501&lon=-105.7677&exclude={part}&units=metric&appid=5bcc4fc2b21f3340ba834fd5afb86265')
          return await response.json();
        }catch(err){
          console.error(err);
        }
    }
    let weather_data = await get_weather_data();


    //initialize data for request
    function create_forecast_object(value){
         return {
            name:value.weather[0].main,
            description:value.weather[0].description,
            icon:value.weather[0].icon ,
            degree:value.wind_deg,
            speed:Math.round(value.wind_speed),
            tempeture:Math.round(value.temp),
            feel_like:Math.round(value.feels_like),
            time:moment(new Date(value.dt *1000)).format("hh:mm a"),
        }
    }

   // get array for forecast for the next 4 hours
   let hourly = weather_data.hourly ;
   for(let i=0; i<5;i++){
        let value = hourly[i];
        forecast.push(create_forecast_object(value));
    }

    // delete the old and store weather in database


    function store_weather(){
        fetch('delete')
        .then(()=>{
            console.log('here')
            $.ajax({
                url: '/forecast',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify(forecast),
            });
        })
        .then(()=>{
            $.get('/')
        });
    }


    //calling the first time
    // store_weather();


    //call every 30 min
    setInterval(function() {
        console.log('starting 30 ...');
        // store_weather();
    },5*1000);



})

