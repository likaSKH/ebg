
<div class=" p-5 col-md-9  " id="marg" >
  <!--  <?php if (!empty($success) or !empty($danger)) {  if (empty($success)){ ?>
        <div class="alert alert-danger">
            <strong><?php echo $danger ?></strong> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
    <?php }else{ ?>
        <div class="alert alert-success">
            <strong><?php echo $success ?></strong> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
    <?php }} ?>-->

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
                    <td><button class="btn btn-outline-info drop"
                                data-toggle="modal"
                                data-target="#editCatalogModal"
                                data-cmd="edit"
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
                            <textarea type="text" class="form-control" name="text" id="text" >ტექსტი
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="text">აირჩიეთ ერთდროულად რამდენიმე სურათი</label>
                            <input type="file" class="form-control" multiple name="image" id="image" >
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="დამატება">
                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="დახურვა">
                </div>
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



                    <?php form_close(); ?>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="წაშლა">
                    <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="დახურვა">
                </div>
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
    });

</script>