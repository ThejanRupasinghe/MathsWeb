<html>
<body>

<h2>Add new post</h2>







<form class="" action=/upload/photo method="post" enctype="multipart/form-data">
    {{method_field('PATCH')}}
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
        <div class="col-md-12">
            <input type="file" id="inputimages" name="images"/>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary pull-right" value="post">
            Submit
        </button>
    </div>
    {{csrf_field()}}
</form>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 <script type="text/javascript">
    function readURL(input) {
        if(input.files && input.files[0]){
            var reader=new FileReader();
            reader.onload=function (e) {
                $('#showimages').attr('src',e.target.result);

            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputimages").change(function () {
        readURL(this);

    });
</script>



</body>

</html>