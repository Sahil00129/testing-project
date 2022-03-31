$(document).ready(function () {
//alert('hello');
$('#first_form').submit(function(e){
    //alert('hii');return false;
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "/first-added", 
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST',  
        data:new FormData(this),
        processData: false,
        contentType: false,
        beforeSend: function(){
            
             },
            success: (data) => {
                $('#first_form').trigger('reset');
                if(data.success === true) { 
                    alert("Data has been Submitted successfully");
                    
                  }
                    else{
                alert("Error!", data.messages, "error");
                
                }
            }

    });
});
});