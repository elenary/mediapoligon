


<div class="newstop">


<?php foreach($topics as $topic):?>

    <?php if ($topic->in_top == 'Да') {?>

    <div class="b-topic_top">
        <a href="/news/topic/<?=$topic->getID()?>"> <img src="<?=$topic->getPhoto()?>" alt="Фото"></a>
        <a class="b-topic__title" href="news/topic/<?=$topic->getID()?>"> <?=$topic->getTitle()?> </a>
        <div class="b-topic__time">  <?=$topic->getTime()?>  </div>
        <div class="b-topic__address"> <?=$topic->getPlace()?><?=$topic->getAddress()?><?=$topic->getCity()?>, <?=$topic->getCountry()?> </div>
    </div>

<?php } endforeach; ?>

</div>


<div class="content">

    <?php foreach($topics as $topic):?>

        <?php if ($topic->in_top == 'Нет') {?>

            <div class="b-topic_line">
             <a href="<?=$topic->getID()?>"> <img src="<?=$topic->getPhoto()?>" alt="Фото"></a>
                <div class="b-topic_line__text">
                    <a class="b-topic__title" href="<?=$topic->getID()?>"> <?=$topic->getTitle()?> </a><br>
                    <div class="b-topic__subtitle"> <?=$topic->getSubtitle()?> </div>
                    <div class="b-topic__time">  <?=$topic->getTime()?>  </div>
                    <div class="b-topic__address"> <?=$topic->getPlace()?><?=$topic->getAddress()?><?=$topic->getCity()?>, <?=$topic->getCountry()?> </div>
                </div>
            </div>

        <?php } endforeach; ?>
</div>

<div class="sidebar">

   <div class="b-tagscloud">
       vslkj
       sdfsdhfgjfjfg
       sdfhdfghfgj jfghjkfkgh hjlhjlhjlh duyufgyu
       dfghdufghj jkghkghjkh dgjfghjfghjgj
        dhjdghjgfj ghjfghjfghj
       fghjfghj
   </div>



</div>


