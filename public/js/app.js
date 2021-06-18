IMask(document.getElementById('telnumOc'), {mask: '+{7}(000)000-00-00'});
// $.ajax({
//     type: 'POST',
//     data: new FormData(this),
//     dataType: 'Json',
//     contentType: false,
//     processData: false,
//     cache: false,
//     beforeSend: function(){
//         $('.loader').show();
//     },
//     complete: function() {
//         $('.loader').hide();
//     },
//     success: function() {
      
//     },
// });


$('#file').change(function () {
    let inputFile = $(this)[0].files;

    
    if (inputFile.length > 0) {
        console.log(new FileReader)
        if (typeof (FileReader) != "undefined") {
            var image_holder = $("#file-upload-image-block");
            image_holder.empty();
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "width": "100%",    
                }).appendTo(image_holder);
                // var img = new Image();
                // img.src = reader.result;
                image_holder.prepend('<span class="fa fa-times" id="remove-img" style="cursor:pointer; color:red; float:right; margin-right:3px;"></span>');
                image_holder.fadeIn('slow');
            }
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            console.log("This browser does not support FileReader");
        }
    }
});

$("#order-call").submit(function(e) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: "{{url('/order_call')}}",
        dataType: 'json',
        data: //new FormData(this),
        {
            name: jQuery('#nameOc').val(),
            telnum: jQuery('#telnumOc').val(),
        },
        contentType: false,
        processData: false,
        cache: false,
        success: function(data) {
            jQuery('.alert').show();
            jQuery('.alert').html(data.success);
        }
    });
})

$("#contract-request").submit(function(e) {
    e.preventDefault();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        type: 'POST',
        url: "/create_contract",
        dataType: 'json',
        data: new FormData(this),
        // {
        //     lastname: jQuery('#lastname').val(),
        //     firstName: jQuery('#firstName').val(),
        //     middleName: jQuery('#middleName').val(),
        //     IIN: jQuery('#IIN').val(),
        //     passportNo: jQuery('#passportNo').val(),
        //     given: jQuery('#given').val(),
        //     period: jQuery('#period').val(),
        //     telnumCc: jQuery('#telnumCc').val(),
        //     address: jQuery('#address').val(),
        //     sum: jQuery('#sum').val(),
        //     file: jQuery('#file').val(),
        // },
        contentType: false,
        processData: false,
        cache: false,
        success: function(data) {
            console.log(data);
        }
    });
})

$("#form-consultation").submit(function() {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: "{{url('/callback_process')}}",
        dataType: 'json',
        data: //new FormData(this),
        {
            name: jQuery('#nameCb').val(),
            email: jQuery('#emailCb').val(),
            subject: jQuery('#subjectCb').val(),
            message: jQuery('#msgCb').val()
        },
        contentType: false,
        processData: false,
        cache: false,
        success: function(data) {
            jQuery('.alert').show();
            jQuery('.alert').html(data.success);
        }
    });
})