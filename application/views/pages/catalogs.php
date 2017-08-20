
<div class="container pt-4 ">
    <div class="row">
        <h2 class="border border-left-0 border-right-0 border-top-0 border-success p-2 text-muted">ბლოგი</h2>
    </div>

    <div class="row">
<?php for ($i=0; $i<sizeof($catalogs); $i++) : ?>

        <div class="col-md-6 col-sm-12  p-4 pb-3  ">
            <div class="bg-white " style="height: 100%;">
            <div class="image-container col-md-12 p-0">
                <img src="<?php echo base_url().'/public/images/'.$catalogs[$i]['image'][0]['url'] ?>" class="img-fluid " alt="image">
            </div>
            <div class="col-md-12 pt-5 pl-0 pr-0">
            <h5 class="p-2 text-muted ">
                <?php echo $catalogs[$i]['title'] ?>
            </h5>
            <p class="p-2 text-muted"><?php  echo character_limiter($catalogs[$i]['text'],20);
               ?></p>


            <a href="<?php echo 'catalogs/'.$catalogs[$i]['slug']; ?>"  class="pb-3 col-md-3 pull-right" ><img src="<?php echo base_url('public/images/button.png');?>" class="img-fluid" width="100px" alt="" ></a>
            </div>
            </div>

        </div>


<?php  endfor; ?>

    </div>


</div>
