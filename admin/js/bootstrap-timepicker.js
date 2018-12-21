jQuery(document).ready(function() {
    BootstrapTimepicker.init()
}

);

var BootstrapTimepicker= {
    init:function() {

      //loop through days from 1 to 7 "saturday to friday" and fetch its data
      for (var i = 1; i <= 7; i++) {
        (function (i) {
          $.ajax({
              type:'POST',
              dataType: 'json',
              url: 'fetchDayTime.php',
              data: {id: i}
          })
          .done(function(response){

            //disabe the fields if it's closed
            if(response.from == "Closed" || response.to == "Closed") {

              //disable the from and to fields
              $("#m_timepicker_" + i + "_from, #m_timepicker_" + i + "_from_modal").attr("disabled", "true");
              $("#m_timepicker_" + i + "_to, #m_timepicker_" + i + "_to_modal").attr("disabled", "true");

              //let their value as default
              $("#m_timepicker_" + i + "_from, #m_timepicker_" + i + "_from_modal").timepicker( {
                  defaultTime: "", minuteStep: 1, showSeconds: !0, showMeridian: !0
              });
              $("#m_timepicker_" + i + "_to, #m_timepicker_" + i + "_to_modal").timepicker( {
                  defaultTime: "", minuteStep: 1, showSeconds: !0, showMeridian: !0
              });

              //make the switch Closed
              $('input[name="' + i + '_status"]').bootstrapSwitch('toggleState', true, true);

            } else { 
              $("#m_timepicker_" + i + "_from, #m_timepicker_" + i + "_from_modal").timepicker( {
                  defaultTime: response.from, minuteStep: 1, showSeconds: !0, showMeridian: !0
              });

              $("#m_timepicker_" + i + "_to, #m_timepicker_" + i + "_to_modal").timepicker( {
                  defaultTime: response.to, minuteStep: 1, showSeconds: !0, showMeridian: !0
              });
            }



          })
          .fail(function(response) {
            console.log(response);
          });
        })(i);
      }



    }
}

;
