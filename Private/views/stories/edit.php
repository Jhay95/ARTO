<!------This is where the write Edits written stories---->
<?php require_once(INC_PATH . 'header.php') ?>
<?php require_once(INC_PATH . 'navigation.php') ?>

<section class="container">
    <div class="align-items-center">
        <form action="<?php echo URL_ROOT ;?>stories/edit/<?php echo $data['writer_id'];?>/<?php echo $data['story_id'];?>" method="post">
            <div class="row g-3">
                <div class="form-group col-md-12">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title'];?>">
                    <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
                </div>

                <div class="form-group col-md-12">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" cols="30" rows="10"><?php echo $data['body'];?></textarea>
                    <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
                </div>

                <div class="form-group col-md-4">
                    <label for="category">Category</label>
                    <select name="category" class="form-select form-control">
                        <option value="Tradition">Tradition</option>
                        <option value="War">War</option>
                        <option value="Family">Family</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="location">Story location</label>
                    <input type="text" name="location" class="form-control" value="<?php echo $data['location'];?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="tags">tags</label>
                    <input type="text" name="tag" class="form-control" value="<?php /*echo $data['story_tag'];*/?>">
                </div>

                <div class="form-group col-md-3">
                    <input type="submit" class="btn btn-primary" name="submit">
                    <button class="btn btn-primary"><a href="<?php echo URL_ROOT ;?>writers/index/<?php echo $_SESSION['id'] ;?>">Cancel</a></button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php require_once(INC_PATH . 'footer.php') ?>

