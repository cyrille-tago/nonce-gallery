<h1>
    Pictures tagged with
    <?= $this->Text->toList($tags) ?>
</h1>

<section>
<?php foreach ($pictures as $picture): ?>
    <article>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link($picture->title, $picture->url) ?></h4>
        <small><?= h($picture->url) ?></small>

        <!-- Use the TextHelper to format text -->
        <?= $this->Text->autoParagraph($picture->description) ?>
    </article>
<?php endforeach; ?>
</section>