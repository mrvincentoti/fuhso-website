<aside class="news-small" id="news-small">
    <header>
        <h2>Related News</h2>
    </header>
    <div class="section-content">
        <?php foreach($relatedevents as $events):?>
        <article>
            <figure class="date"><i class="fa fa-file-o"></i><?=$events->date?></figure>
            <header>
                <a href="<?=BASE_URL?>/events/<?=$events->id?>/<?=$this->Generateurl($events->title)?>">
                    <?=$events->title?>
                </a>
            </header>
        </article><!-- /article -->
        <?php endforeach; ?>

    </div><!-- /.section-content -->
    <a href="" class="read-more">All News</a>
</aside><!-- /.news-small -->