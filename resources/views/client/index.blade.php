<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    @include('client.template.headerlink')    
</head><!--/head-->
<style>
.wow.scaleIn {
    border: solid 1px;
    margin-left: 20px;
}
</style>
<body>
    
    @include('client.template.header')    
    <!--/#header-->

    <div class="row">
                    <div class="col-sm-3">
                        <select class="form-control" id="filterval" onchange="FilterFunction(this.value)">
                            <option value="0" <?php echo ($Filervalue == 1 ?'selected':'') ?>>--Select Filter option--</option>
                            <option value="1" <?php echo ($Filervalue == 1 ?'selected':'') ?>>Alphabetical (A-Z)</option>
                            <option value="2" <?php echo ($Filervalue == 2 ?'selected':'') ?>>Alphabetical (Z-A)</option>
                            <option value="3" <?php echo ($Filervalue == 3 ?'selected':'') ?>>Application Price (low-high)</option>
                            <option value="4" <?php echo ($Filervalue == 4 ?'selected':'') ?>>Application Price (high-low)</option>
                        </select>
                    </div>
                </div>
    <section id="services">
        <div class="container">
            <div class="row">
            <?php
    // echo "<pre>";
    // print_R($allschools->toArray());

?>
                @foreach($allschools as $dt)
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{ $dt->image}}" alt="">
                        </div>
                        <h2><b>{{ $dt->school_name}}</b></h2>
                        <p>{{ $dt->application_fee}}</p>
                    </div>
                    <!-- <button class="btn btn-info">Read More</button> -->
                </div>
                @endforeach

                {{ $allschools->links() }}
            </div>
        </div>
    </section>
    @include('client.template.footerlink')  
    </body>
</html>
