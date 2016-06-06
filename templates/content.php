<?php $this->layout('theme::layout/05_page') ?>
<article>
    <?php if ($params['html']['date_modified']) { ?>
        <div class="page-header sub-header clearfix">
            <h1><?= $page['breadcrumbs']? $this->get_breadcrumb_title($page, $base_page) : $page['title'] ?></h1>
            <span style="float: left; font-size: 10px; color: gray;">
                <?= date("l, F j, Y", $page['modified_time']); ?>
            </span>
            <span style="float: right; font-size: 10px; color: gray;">
                <?= date("g:i A", $page['modified_time']); ?>
            </span>
        </div>
    <?php } else { ?>
        <div class="page-header">
            <h1><?= $page['breadcrumbs']? $this->get_breadcrumb_title($page, $base_page) : $page['title'] ?></h1>
        </div>
    <?php } ?>

    <?php echo $page['content']; ?>

    <?php if(!empty($page['prev']) || !empty($page['next'])) { ?>
    <div class="row margin-bottom-60">
            <?php if(!empty($page['prev'])) { ?><div class="col-md-6 text-right"><a class="btn btn-primary" href="<?= $base_url . $page['prev']->getUrl() ?>">Previous</a></div><?php } ?>
            <?php if(!empty($page['next'])) { ?><div class="col-md-6"><a class="btn btn-primary" href="<?= $base_url . $page['next']->getUrl() ?>">Next</a></div><?php } ?>
        
    </div>
    <?php } ?>
</article>

