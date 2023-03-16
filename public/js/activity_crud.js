// const baseUrl = 'http://127.0.0.1:8000';
// function for show posts without refresh
showActivity();
// table row with ajax
function table_activity_row(res){
let htmlView = '';
   if(res.acts.data.length <= 0){
       htmlView+= `
    <tr>
          <td colspan="4">No data.</td>
         </tr>`;
}
for(let i = 0; i < res.acts.data.length; i++){

      htmlView += `
                    <tr style="border:1px solid #ff00!important;">
                    <td></td>
                    <td scope="col">`+res.acts.data[i].title+`</td>
                    <td scope="col">`+res.acts.data[i].description+`</td>
                    <td scope="col">`+res.acts.data[i].description+`</td>
                    <td scope="col">`+res.acts.data[i].location+`</td>
                    <td scope="col">

                        <img class="rounded border" src="/storage/uploads/activity/`+res.acts.data[i].preview_img+`" alt="No Image" height="80px">
                    </td>
                    <td scope="col">`+res.acts.data[i].date+`</td>
                    <td>
                        <div class="d-flex align-items-center list-action">
                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                            href="/admins/activities/`+res.acts.data[i].id+`"><i class="ri-eye-line mr-0"></i></a>
                            <button class="badge btn-warning mr-2" data-toggle="modal" data-target="#actModal"  title="" data-original-title="Edit"
                                id="editModal" data-id="`+res.acts.data[i].id+`" data-action="/admins/activities/`+res.acts.data[i].id+`/update"><i class="ri-pencil-line mr-0"></i></button>
                            <button class="badge btn-danger mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                            data-id="`+res.acts.data[i].id+`" id="btn-delete"><i class="ri-delete-bin-line mr-0"></i></button>
                        </div>
                    </td>
                </tr>`;
}

$('#tbody').html(htmlView);
}
function showActivity(){
   $.ajax({
      type : 'GET',
      dataType: "json",
      url  : '/admins/activities',
      success : function (res) {
        console.log(res.acts)
           table_activity_row(res);
   },error : function(error){
    console.log(error);
   }
})
}


$('#openModal').click(function() {
    let url = $(this).data('action');
    console.log(url);
    $('#actModal').show();
    $('#formData').trigger("reset");
    $('#formData').attr('action',url);
    $('#name').focus();
    })
    // Event for created and updated posts
    $('#formData').submit(function(e) {
        e.preventDefault();
         let formData = new FormData(this);
         $.ajax({
            type: 'POST',
            data : formData,
            contentType: false,
             processData: false,
             url: $(this).attr('action'),
             beforeSend:function(){
             $('#btn-create').addClass("disabled").html("Processing...").attr('disabled',true);
         $(document).find('span.error-text').text('');
         },
         complete: function(){
         $('#btn-create').removeClass("disabled").html("Save   Change").attr('disabled',false);
         },
         success: function(res){
            console.log(res)
         if(res.success == true){
         $('#formData').trigger("reset");
         $('#actModal').hide();
         showActivity(); // call function show Posts
         Swal.fire(
         'Success!',
         res.message,
         'success'
         )
        //  $('#actModal').hide();
         location.reload();
         }
         },
         error(err){
         $.each(err.responseJSON,function(prefix,val) {
         $('.'+prefix+'_error').text(val[0]);
         })
         console.log(err);
         }
         })
    })

//open edit modal
$(document).on('click','#editModal',function() {
    console.log('hi');
    let id = $(this).data('id');
     let dataAction = $(this).data('action');
     $('#formData').attr('action',dataAction);
      $.ajax({
         type: 'GET',
         url : `/admins/activities/${id}/edit`,
         dataType: "json",
         success: function(res) {
            var src =`/storage/uploads/activity/`+res.act.preview_img;
           $('input[name=title]').val(res.act.title);
           $('input[name=title_mm]').val(res.act.title_mm);
           $('input[name=location]').val(res.act.location);
           $('input[name=location_mm]').val(res.act.location_mm);
           $('input[name=date]').val(res.act.date);
           $('textarea[name=description]').val(res.act.description);
           $('textarea[name=description_mm]').val(res.act.description_mm);
           $('#showOldImage').attr('src',src);
           console.log(res.act_imgs);
           $.each(res.act_imgs, function (index, value) {
            var src =`/storage/uploads/activity/`+value.file;
            var imgWrapper =  `<div class="col-6 col-sm-4 border rounded m-1">
                                <form method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <div class="card" >
                                        <div  style="overflow: hidden; height:70px;">
                                            <img src="/storage/uploads/activity_images/`+value.file+`" alt="" class="rounded card-img-top"/>
                                        </div>

                                        <div class="card-body text-center">
                                            <button class="badge btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        id="img-btn-delete" data-id="`+value.id+`" data-action="{{route('del_imgs',`+value.id+`)}}"><i class="ri-delete-bin-line mr-0"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>`
            $('#old_act_imgs').append(imgWrapper);
           });
         $('#actModal').show();

            // console.log(res);
  },
  error:function(error) {
     console.log(error)
  }
  })
  })


//delete
  $(document).on('click','#btn-delete',function(e) {
    e.preventDefault();
    let dataDelete = $(this).data('id');
    // console.log(dataDelete);
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this! ",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
    $.ajax({
    type:'DELETE',
    dataType: 'JSON',
    url: `/admins/activities/${dataDelete}/delete`,
    data:{
    '_token':$('meta[name="csrf-token"]').attr('content'),
    },
    success:function(response){
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
    showActivity();

    },
    error:function(err){
    console.log(err);
    }
    });
    }
    })
    });

    $(document).on('click','#img-btn-delete',function(e) {
        e.preventDefault();
        let dataDelete = $(this).data('id');
        // console.log(dataDelete);
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this! ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
        $.ajax({
        type:'DELETE',
        dataType: 'JSON',
        url: `/admins/act_img/${dataDelete}/delete`,
        data:{
        '_token':$('meta[name="csrf-token"]').attr('content'),
        },
        success:function(response){
        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
        location.reload();
        // $('#old_act_imgs').load()

        },
        error:function(err){
        console.log(err);
        }
        });
        }
        })
        });


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var div_id  = $(input).attr('set-to');
                reader.onload = function (e) {
                    $('#'+div_id).attr('src', e.target.result);

                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(function(){

            var maxField = 10;
            console.log(maxField);
            var addBtn = $('#addBtn');
            var wrapper = $('.fieldContainer');
            var fieldHTML = '<div class="col-md-6"><input class="form-control" id="preview_img" type="file" placeholder="" name="file[]"><button class="btn btn-danger mt-2" type="button" id="removeBtn">Remove</button></div>';
            var x=1;
            $(addBtn).click(function () {
                if(x < maxField) {
                    x++;
                    console.log(x);
                    $(wrapper).append(fieldHTML);
                }
            });
           $(wrapper).on('click','#removeBtn', function (e) {
               e.preventDefault();
               $(this).parent('div').remove();
               x--;
           });
     });
