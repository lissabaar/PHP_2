<h1>Галерея</h1>
<?= $message ?>
<form class="uploadForm" method="POST" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <input type="submit" value="Загрузить">
</form>
<div class="gallery">
    <? foreach ($gallery_images as $key => $img_info) : ?>
        <a target="_blank" href="../viewimg/?id=<?= $img_info['id'] ?>" class="photo"><img src="../img/small/<?= $img_info['name'] ?>" alt="<?= $img_info['name'] ?>" height="200" class="galley-img"></a>
    <? endforeach; ?>
</div>