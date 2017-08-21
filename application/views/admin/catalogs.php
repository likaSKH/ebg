
<div class=" p-5 col-md-9  " id="marg" >
    <?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo $this->session->flashdata('msg'); ?> </div>
    <?php } ?>
    <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php echo $this->session->flashdata('success'); ?> </div>
    <?php } ?>
<div class="card">
    <div class="card-header">
        კატალოგი
    </div>
    <div class="card-body col-md-12" >
        <button class="btn btn-outline-success drop mb-2" style="float: right;"
                data-toggle="modal"
                data-target="#addCatalogModal"
                data-cmd="add"
        ><i class="fa fa-plus" aria-hidden="true" ></i> დამატება</button>
        <table  class="table table-hover table-responsive">

            <thead class="text-center">
            <tr >
                <th>#</th>
                <th>დასახელება</th>
                <th>ტექსტი</th>
                <th>სურათი</th>
                <th>სურათის დამატება</th>
                <th>ედიტირება</th>
                <th>წაშლა</th>
            </tr>
            </thead>

<?php $i=0; foreach ($catalogs as $catalog ): $i++;  ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $catalog['title']; ?></td>
                    <td><?php echo character_limiter($catalog['text'],20); ?></td>
                    <td><?php if ($catalog["image"][0]['url']=='noimage.png') echo "არა"; else {echo "კი"; } ?></td>
                    <td><button class="btn btn-outline-danger drop"
                                data-toggle="modal"
                                id="addImage"
                                data-target="#addImageModal"
                                data-cmd="addimage"
                                data-id="<?php echo $catalog['id']; ?>"
                        ><i class="fa fa-plus" aria-hidden="true"></i> სურათის დამატება</button></td>
                    <td><button class="btn btn-outline-info drop"
                                data-toggle="modal"
                                data-target="#editCatalogModal"
                                data-cmd="edit"
                                id="editCatalog";
                                data-id="<?php echo $catalog['id']; ?>"
                        ><i class="fa fa-pencil" aria-hidden="true"></i> ედიტირება</button></td>

                    <td><button class="btn btn-outline-danger drop"
                                data-toggle="modal"
                                id="deleteCatalog"
                                data-target="#deleteCatalogModal"
                                data-cmd="delete"
                                data-id="<?php echo $catalog['id']; ?>"
                        ><i class="fa fa-eraser" aria-hidden="true"></i> წაშლა</button></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>


    <div class="modal fade" id="addCatalogModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">დამატება</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                   <?php echo form_open('admin/create'); ?>
                        <div class="form-group">
                            <label for="title">სათაური</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="სათაური">
                        </div>
                        <div class="form-group">
                            <label for="text">ტექსტი</label>
                            <textarea type="text" class="form-control" name="text" id="text" >ტექსტი</textarea>
                        </div>



                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="დამატება">
                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="დახურვა">
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteCatalogModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">წაშლა</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                        ნამდვილად გსურთ ჩანაწერის წაშლა?

                    <?php echo form_open('admin/delete'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="catalog_id" id="catalog_id" value="" hidden>
                    </div>





                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="წაშლა">
                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="დახურვა">
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addImageModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">სურათის დამატება</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    აირჩიეთ სასურველი სურათი

                    <?php echo form_open_multipart('admin/upload'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="catalog_id" id="image_catalog_id" value="" hidden>
                        <input type="file"  name="userfile" value="" class="form-control" multiple>
                    </div>





                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="დამატება">
                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="დახურვა">
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCatalogModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ედიტირება</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                    <?php echo form_open('admin/edit_save_catalog',['class'=>'editCatalogForm']); ?>
                    <input type="text" class="form-control" name="catalog_id" id="edit_catalog_id" value="" hidden>
                    <div class="form-group">
                        <label for="title">სათაური</label>
                        <input type="text" class="form-control edit_title" name="title" id="edit_title" placeholder="სათაური">
                    </div>
                    <div class="form-group">
                        <label for="text">ტექსტი</label>
                        <textarea type="text" class="form-control edit_text" name="text" id="edit_text" rows="10" >ტექსტი</textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">აირჩიეთ სურათი რომლის წაშლაც გსურთ</label>
                    <div class="form-group checks form-control">

                    </div>
                    </div>





                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="ედიტირება">
                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="დახურვა">
                </div>
                </form>
            </div>
        </div>
    </div>


</div>

<script>
    $( document ).ready(function() {

        $(document).on("click", "#deleteCatalog", function () {
            var myBookId = $(this).data('id');
            $(".modal-body #catalog_id").val( myBookId );
            // As pointed out in comments,
            // it is superfluous to have to manually call the modal.
            // $('#addBookDialog').modal('show');
        });
        $(document).on("click", "#addImage", function () {
            var myBookId = $(this).data('id');
            $(".modal-body #image_catalog_id").val( myBookId );
            // As pointed out in comments,
            // it is superfluous to have to manually call the modal.
            // $('#addBookDialog').modal('show');
        });
        $(document).on("click", "#editCatalog", function (e) {
            e.preventDefault();
            var myBookId = $(this).data('id');
            $(".modal-body #edit_catalog_id").val( myBookId );
            // As pointed out in comments,
            // it is superfluous to have to manually call the modal.
            // $('#addBookDialog').modal('show');
            console.log($('.editCatalogForm').attr('action'));
            console.log(myBookId);
            $('.editCatalogForm').attr('action', '<?=base_url()?>admin/edit_save_catalog');
            console.log($('.editCatalogForm').attr('action'));
            $(".checks .image_check, .checks img").remove();

            $.ajax({
                url: '<?=base_url()?>admin/edit_catalog' + '/' + myBookId,
                cache: false
            })
                .done(function( html ) {
                    $('.edit_title').val(html.title);
                    $('.edit_text').val(html.text);
console.log(html.images.length);
                    for(var i=0; i<html.images.length; i++){
                        var input= "<input type='checkbox'  name='images["+html.images[i].id+"]' class='image_check '><img src='"+'<?php echo base_url().'public/images/' ?>'+html.images[i].url+"' width='50px'>";
                        $('.checks').append(input);
                    }

                });


        });

        $('#editCatalogModal').on('shown.bs.modal', function (e) {

        })
    });

</script>