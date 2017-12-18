<div>
    <?php echo $data['categoriesCount'];?>
    <?php foreach ($data['categories'] as $category):?>
    <p><?php echo $category ['id'] ?> : <?php echo $category['name'] ?></p>
    <?php endforeach;?>
</div>