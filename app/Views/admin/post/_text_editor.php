<label class="control-label control-label-content"><?= trans('content'); ?>
    <span class="badge badge-danger"> (must contain 850 ~ 6000 words otherwise it will not approved)</span>
</label>
<div id="main_editor">
    <div class="row">
        <div class="col-sm-12 editor-buttons">
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#file_manager_image"
                data-image-type="editor"><i
                    class="fa fa-image"></i>&nbsp;&nbsp;&nbsp;<?= trans("add_image"); ?></button>
        </div>
    </div>
    <?php if (!empty($post)): ?>
    <textarea class="tinyMCE form-control" name="content"><?= $post->content; ?></textarea>
    <?php else: ?>
    <textarea class="tinyMCE form-control" name="content"><?= old('content'); ?></textarea>
    <?php endif; ?>
</div>
<div class="row">
    <div class="col-md-12" style="padding-top:5px 0px 5px 0px;">
        <div class="alert alert-success">
            <input required value="1" type="checkbox" name="confirm"> I confirm this article is unique and has not been published anywhere
            before
        </div>
    </div>
    <div class="col-md-12">
        <span class="alert alert-danger">We only publish unique and well-written posts. Your post must not be published
            elsewhere. We STRICTLY DO NOT allow AI-generated content. Our editors manually check each post. Depending
            upon the queue size, sometimes it may take us 24-48 hours to review your post excluding weekends.</span>
    </div>
</div>