// const baseUrl = 'http://127.0.0.1:8000';
// function for show posts without refresh
showActivityType();
// table row with ajax
function table_activity_type_row(res){

let htmlView = '';
   if(res.act_types.data.length <= 0){
       htmlView+= `
    <tr>
          <td colspan="4">No data.</td>
         </tr>`;
}
for(let i = 0; i < res.act_types.data.length; i++){
    console.log(res.act_types.data[i].name);
      htmlView += `
                    <tr style="border:1px solid #ff00!important;">
                    <td></td>
                    <td scope="col">`+res.act_types.data[i].name+`</td>
                    <td>
                        <div class="d-flex align-items-center list-action">
                            <button class="badge btn-warning mr-2" title="Edit"
                                id="editModal" data-id="`+res.act_types.data[i].id+`" data-action="/admins/activity_type/`+res.act_types.data[i].id+`/update" data-toggle="modal" data-target="#actTypeModal"><i class="ri-pencil-line mr-0"></i></button>
                            <a class="badge bg-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                href="/admins/activity_type/`+res.act_types.data[i].id+`" ><i class="ri-eye-line mr-0  "></i></a>
                            <a class="badge btn-danger mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                        </div>
                    </td>
                </tr>`;
}

$('#tbody').html(htmlView);
}
function showActivityType(){
   $.ajax({
      type : 'GET',
      dataType: "json",
      url  : '/admins/activity_type',
      success : function (res) {
        console.log(res.act_types)
           table_activity_type_row(res);
   },error : function(error){
    console.log(error);
   }
})
}


$('#openModal').click(function() {
    let url = $(this).data('action');
    $('#actTypeModal').show();
    $('#actTypeFormData').trigger("reset");
    $('#actTypeFormData').attr('action',url);
    $('#name').focus();
    })
    // Event for created and updated posts
    $('#actTypeFormData').submit(function(e) {
        e.preventDefault();
         let actTypeFormData = new actTypeFormData(this);
         $.ajax({
            type: 'POST',
            data : actTypeFormData,
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
         $('#actTypeFormData').trigger("reset");
         $('#actTypeModal').hide();
         showActivityType(); // call function show Posts
         Swal.fire(
         'Success!',
         res.message,
         'success'
         )
        //  $('#actTypeModal').hide();
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
    let id = $(this).data('id');
     let dataAction = $(this).data('action');
     $('#actTypeFormData').attr('action',dataAction);
    //  console.log(dataAction);
      $.ajax({
         type: 'GET',
         url : `/admins/activity_type/${id}/edit`,
         dataType: "json",
         success: function(res) {

           $('input[name=name]').val(res.act_type.name);
           $('#actTypeModal').show();
            console.log('passed');
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
    url: `/admins/activity_type/${dataDelete}/delete`,
    data:{
    '_token':$('meta[name="csrf-token"]').attr('content'),
    },
    success:function(response){
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
    showActivityType();

    },
    error:function(err){
    console.log(err);
    }
    });
    }
    })
    });
