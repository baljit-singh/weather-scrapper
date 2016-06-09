$("#findWeather").click(function(event){

    event.preventDefault();

    if($('#city').val()!=""){

    $.get("scrapper.php?city="+$('#city').val(), function(data){

      if(data==""){
        $("#success").hide();
        $("danger").fadeIn();
      }else{
        $("danger").hide();
        $("#success").html(data).fadeIn();
      }

    });

  }else{

    alert("please enter a city!");
  }


  });