<?php 
    include('./includes/class-autoload.inc.php');
    require 'templates/header.php';
    $post=new Posts();
    $post=$post->editPost($_GET['id']);
    $id=$_GET['id'];
   
?>
    <div class="text-center my-4">
        <h3>Edit Post</h3>
    </div>

    <div class="row">
        <div class="col-md-7 mx-auto">
        <form action="post.process.php?id=<?=$id?>" method="POST">
                <div class="form-group">
                    <label for="">Title:</label>
                    <input type="text" class="form-control" name="title" value="<?=$post['title']?>">
                </div>
                <div class="form-group">
                    <label for="">Body:</label>
                    <input type="text" class="form-control" name="body" value="<?=$post['body']?>">
                </div>
                <div class="form-group">
                    <label for="">Author:</label>
                    <input type="text" class="form-control" name="author" value="<?=$post['author']?>">
                </div>               
            
       
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-primary" name="update">Update Post</button>
            </div>
        </form>
        </div>
    </div>
<?php 
require 'templates/footer.php';
?>
