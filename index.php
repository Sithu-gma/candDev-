<?php 
    include('./includes/class-autoload.inc.php');
    require 'templates/header.php';
   
?>
  
    <!-- Button trigger modal -->
    <div class="text-center mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">
            Create A Post
        </button>
    </div>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="post.process.php" method="POST">
                <div class="form-group">
                    <label for="">Title:</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">Body:</label>
                    <input type="text" class="form-control" name="body">
                </div>
                <div class="form-group">
                    <label for="">Author:</label>
                    <input type="text" class="form-control" name="author">
                </div>               
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Add Post</button>
        </div>
        </form>
        </div>
     
    </div>
    </div>
    <!-- end of modal -->

    <div class="container">
        <div class="row">
            <?php $post=new Posts() ?>
            <?php if($post->getPost()): ?>
                <?php foreach($post->getPost() as $posts):?>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title"><?=$posts['title'] ?></h5>
                                <p class="card-text">
                                    <?=$posts['body'] ?>
                                </p>
                                <h6 class="text-right card-subtitle text-muted"><?=$posts['author'] ?></h6>
                                <a href="edit-form.php?id=<?=$posts['id']?>"  class="btn btn-warning">Edit</a>
                                <a href="post.process.php?id=<?=$posts['id']?>"  class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            <?php else: ?>
                <p>Folder is Empty</p>

            <?php endif;?>
        

                    
         </div>
    </div>

<?php 
    require 'templates/footer.php';
?>
