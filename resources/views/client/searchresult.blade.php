@if(count($allschools) > 0)
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
        @foreach($allschools as $dt)
                
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{ $dt->image}}" alt="">
                        </div>
                        <h2><b>{{ $dt->school_name}}</b></h2>
                        <p>{{ $dt->application_fee}}</p>
                    </div>
                </div>
    @endforeach
@endif
