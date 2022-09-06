<div class="formwork">
    <form enctype="multipart/form-data" action="<?= base_url() . 'patadash/addblogs/' ?>" method="post">

        <div class="form-group">
            <label for="blog_heading" class="pt-5">Blog Title</label>
            <input type="text" class="form-control pb-3" name=" blog_heading" placeholder="Give Blog Title">
        </div>
        <div class="form-group">
            <label for="blog_content" class="pt-3">Blog Content</label>
            <textarea class="form-control" name="blog_content" placeholder="Provide content..."></textarea>
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file pt-5 pb-5" name="blog_image" placeholder="Add Image">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>
<!-- <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script> -->
<script src="<?= base_url() ?>vendors/js/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('blog_content');
</script>