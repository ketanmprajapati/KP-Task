<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Search By Name</title>
    @include('client.template.headerlink')    
</head>
<style>
.wow.scaleIn {
    border: solid 1px;
    margin-left: 20px;
}
</style>
<body>
    @include('client.template.header')    
    <div class="col-sm-3">
        <div class="from-group">
           <lable>Search By Name</lable> 
           <input type="text" name="name" class="text form-control" id="byname" placeholder="Search by name" value="" autocomplete="off">             
       </div>
    </div>
    <section id="services">
        <div class="container">
            <div class="row searchdata">
                @include('client.searchresult')
            </div>
        </div>
    </section>
    @include('client.template.footerlink')  
    </body>
</html>
<script>
$('#byname').on('keyup',function(){
    var val=$('#byname').val();
    if(val.length > 0)
    {
        $.ajax({
            url:'{{ url("get-by-name")}}',
            type: "POST",
            data: {
                val:val
            },
            success:function(data)
            {
                $('.searchdata').html('');
                $('.searchdata').html(data);
            }
        })
    }else{
        $('.searchdata').html('');
    }
});
function FilterFunction(filterval)
{
    if(filterval != 0)
    {
        $.ajax({
            url:'{{ url("filter-by-name")}}',
            type: "POST",
            data: {
                val:filterval,
                byname:true,
                search:$('#byname').val()
            },
            success:function(data)
            {
                $('.searchdata').html('');
                $('.searchdata').html(data);
            }
        })
    }
}
</script>


