
<div class="container pt-4 ">
    <div class="row">
        <h2 class="border border-left-0 border-right-0 border-top-0 border-success p-2 text-muted">ბლოგი</h2>
    </div>

    <div class="row">
<?php foreach ($catalogs as $catalog) : ?>

        <div class="col-md-6 col-sm-12  p-4 pb-3  ">
            <div class="bg-white " style="height: 100%;">
            <div class="image-container col-md-12 p-0">
                <img src="<?php echo base_url().'/public/images/'. $catalog['image'] ?>" class="img-fluid " alt="image">
            </div>
            <div class="col-md-12 pt-5 pl-0 pr-0">
            <h5 class="p-2 text-muted ">
                <?php echo $catalog['title']?>
            </h5>
            <p class="p-2 text-muted"><?php  echo character_limiter($catalog['text'],20);
               ?></p>


            <a href="<?php echo 'catalogs/'.$catalog['slug']?>"  class="pb-3 col-md-3 pull-right" ><img src="<?php echo base_url('public/images/button.png');?>" class="img-fluid" width="100px" alt="" ></a>
            </div>
            </div>

        </div>


<?php  endforeach; ?>

    </div>


</div>
