<aside id="our-professors">
    <header>
        <h2>Principal Officers</h2>
    </header>
    <div class="section-content">
        <div class="professors">
            <?php foreach($officers as $officer):?>
            <article class="professor-thumbnail">
                <figure class="professor-image"><a href=""><img src="<?=BASE_URL?>/img/professor.jpg" alt=""></a></figure>
                <aside>
                    <header>
                        <a href=""><?=$officer->name?></a>
                        <div class="divider"></div>
                        <figure class="professor-description"><?=$officer->disinition?></figure>
                    </header>
                    <a href="" class="show-profile">Show Profile</a>
                </aside>
            </article><!-- /.professor-thumbnail -->
            <?php endforeach; ?>
            <a href="" class="read-more">All Officer</a>
        </div><!-- /.professors -->
    </div><!-- /.section-content -->
</aside><!-- /.our-professors -->