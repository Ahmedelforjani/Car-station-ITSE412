$(document).ready(function(){
    $('#advancedSearchForm').submit(function(e){
        e.preventDefault();

        var minMileage = $('#minMilage').val();
        var maxMileage = $('#maxMilage').val();
        var minPirce = $('#minPrice').val();
        var maxPrice = $('#maxPrice').val();

        if(minPirce != '' && maxPrice != ''){
            if(minPirce >= maxPrice){
                swal("This isn't valied !", "The max price must be greater then min price", "warning");
                return;
            }
        }

        if(minMileage != '' && maxMileage != ''){
            if(minMileage >= maxMileage){
                swal("This isn't valied !", "The max mileage must be greater then min mileage", "warning");
                return;
            }
        }

        $(this).unbind('submit').submit();
    });
});