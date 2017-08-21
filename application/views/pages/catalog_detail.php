
<div class="container">
    <div class="row pt-4">

        <div class="col align-center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php for($i=0; $i<sizeof($images); $i++): ?>
                    <div class="carousel-item <?php if ($i==0): ?>active<?php endif; ?> ">
                        <img class="d-block img-fluid" src="<?php echo base_url().'public/images/'.$images[$i]['url']; ?>" alt="Third slide">
                    </div>
                    <?php endfor; ?>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



           </div>

        <div class="col text-muted text-left">
            <h4 class="text-muted pb-2"><?php echo $title; ?></h4>
            <p><?php echo $text; ?> </p>
        </div>
    </div>

</div>