<div class="container">
    <section class="articles">
        <div class="column is-8 is-offset-2">
            <div class="card article">
                <div class="card-content">
                    <div class="content article-body">
                        <h2>New Post</h2>
                        <?php if (count($errors)) { ?>
                        <div class="notification is-danger">
                            <?=implode('<br>', $errors)?>
                        </div>
                        <?php } ?>
                        <form action="<?=base_url('blog/new_post')?>" method="post">
                            <div class="field">
                                <label class="label">Title</label>
                                <div class="control">
                                    <input class="input" type="text" name="title" value="<?=set_value('title')?>">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Description</label>
                                <div class="control">
                                    <textarea class="textarea" name="description"><?=set_value('description')?></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox" name="comments" <?=set_checkbox('comments', 'on', TRUE)?>>
                                    Allow comments
                                </label>
                            </div>

                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox" name="public" <?=set_checkbox('public', 'on', TRUE)?>>
                                    Public
                                </label>
                            </div>

                            <div class="field">
                                <p class="control">
                                    <input type="submit" class="button is-primary" value="Publish">
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require('partials/_footer.php') ?>