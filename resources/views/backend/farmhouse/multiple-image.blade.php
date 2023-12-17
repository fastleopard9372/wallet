<?php
    if(isset($details) && $details->images)
    {
        $imgArray=explode(',',$details->images);
        $countimgArray = count($imgArray);
        $i=1;
        foreach($imgArray as $img){
        if (File::exists('uploads/images/farmhouses/'.$img) && $img){
?>
<div class="d-flex align-items-center justify-content-between mt-2">
    <img width="50px" src="{{asset('uploads/images/farmhouses/'.$img)}}"/>

<div class="d-flex align-items-center">
    <input type="radio" name="set_default_image" id="set_default_image<?=$i?>" value="<?=$img?>" data-id="<?=$details->id?>" data-click="<?=$i?>" <?php if($img==$details->default_image){echo 'checked';}?>> 
    <label for="set_default_image<?=$i?>" class="mb-0 ms-2">Set Default </label>
</div>
<?php if($img!=$details->default_image && $countimgArray > 1){?>
    <span id="set_default_delete<?=$i?>">
        <a href="javascript:void(0)" onclick="deleteSelectedImage(<?=$details->id?>,'<?=$img?>')"><i class="ri-delete-bin-5-line text-danger" style="font-size:25px;"></i></a>
    </span>
    
    <?php }?>

</div>

<?php $i++;} } } ?>



<script>
    $("input[name='set_default_image']").change(function() {
      
        var imageName, farmhouse_id, clickNo;
        imageName = $('input[name=set_default_image]:checked').val();
        farmhouse_id = $('input[name=set_default_image]:checked').attr('data-id');
        
        $.ajax({
            type: "post",
            url: "{{ route('admin.farmhouse.set_default.images') }}",
            data: {
                imageName: imageName,
                farmhouse_id: farmhouse_id,
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {

                console.log(response);
                multipleImg();
                toastr.success('Successfully set default product images', '', {
                    timeOut: 4000
                });
                

            }
        });
    });

    function deleteSelectedImage( farmhouse_id , imageName){
        

        var text = 'Are you sure to delete?';
        if(confirm(text)== true)
        {
            $.ajax({
                type: "post",
                url: "{{ route('admin.farmhouse.delete.images') }}",
               
                data: {farmhouse_id,imageName, _token : '{{ csrf_token() }}'},
                success: function (response) {
                    
                    multipleImg();
                    toastr.success('Successfully image deleted ', '', {
                        timeOut: 4000
                    });

                }
            });
        }
    }

   
</script>



