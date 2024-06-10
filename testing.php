
<script src="assets/js/sweetalert.min.js"></script> 
  <script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="assets/js/flickity.pkgd.min.js"></script>


<form id="editpage-form" method="post">

<input type="hidden" name="id" value="<?php echo $myid?>">
<input type="file" name="fileupload"><br><br>
<input type="submit" name="submit" id="submit" value="Change" class="btn btn-danger form-control" style="color: white;"><br>

</form>


<script type="text/javascript">

$('#editpage-form').on('submit',function(e){

if (confirm("Are you sure to change this?")) {

 e.preventDefault();

$(".loading-image").show();

var formdata = new FormData();
   $.ajax({
           type: "POST",

           url: "engine/changeprofilepic.php",

           data:new FormData(this),

           cache:false,

           processData:false,

           contentType:false,

           success: function(response) {

           $(".loading-image").hide();

          if(response==1){

            swal({
              
          text:"Image has been changed",
          icon:"success",
        });

$('#user_image').load();
}

else
 { 
  swal({
            icon:"error",
            text:response

           });
            $("#editpage-form")[0].reset();      

            }
 }
        });
 }
    });

</script>
