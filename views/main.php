<h1>Hello world</h1>

<?php
foreach ($viewmodel as $item): ?>
    <div>
        <h2><?=$item['name']?></h2>
        <p><?=$item['contenu']?></p>
    </div>
<?php endforeach; ?>
