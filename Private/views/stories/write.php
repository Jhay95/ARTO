<!------This is where the write creates her stories from scratch---->
<?php require_once(INC_PATH . 'header.php') ?>
<?php require_once(INC_PATH . 'navigation.php') ?>

<section class="container">
    <div class="align-items-center">
        <form action="<?= URL_ROOT ?>stories/new/<?= $_SESSION['id']?>" method="post">
            <div class="row g-3">
                <div class="form-group col-md-12">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group col-md-12">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control" id="" cols="30" rows="10"></textarea>
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
                    <input type="text" name="location" class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label for="tags">tags</label>
                    <input type="text" name="tag" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <input type="submit" class="btn btn-primary" name="submit">
                    <button class="btn btn-primary"><a href="<?= URL_ROOT ?>writers/index/<?= $_SESSION['id'] ?>">Cancel</a></button>
                </div>
            </div>

        </form>
    </div>
</section>

<?php require_once(INC_PATH . 'footer.php') ?>

