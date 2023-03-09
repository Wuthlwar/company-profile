// const baseUrl = 'http://127.0.0.1:8000';
// function for show posts without refresh
showActivity();
// table row with ajax
function table_activity_row(res){
    console.log(res.acts);
let htmlView = '';
   if(res.acts.data.length <= 0){
       htmlView+= `
    <tr>
          <td colspan="4">No data.</td>
         </tr>`;
}
for(let i = 0; i < res.acts.data.length; i++){
    console.log(res.acts.data[i].preview_img);
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
                                href="#"><i class="ri-eye-line mr-0"></i></a>
                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                href="/admins/activities/`+res.acts.data[i].id+`" id="editModal"><i class="ri-pencil-line mr-0"></i></a>
                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                href="#"><i class="ri-delete-bin-line mr-0"></i></a>
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
$(document).on('click','button#editModal',function() {
    let id = $(this).data('id');
     let dataAction = $(this).data('action');
     $('#formData').attr('action',dataAction);
      $.ajax({
         type: 'GET',
         url : `/admins/activities/${id}/edit`,
         dataType: "json",
         success: function(res) {
           $('input[name=name]').val(res.act.name);
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

