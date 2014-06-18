


<div class="newstop">


<?php foreach($topics as $topic):?>

    <?php if ($topic->in_top == 'Yes') {?>

    <div class="b-topic_top">
        <a href="/news/topic/<?=$topic->getID()?>"> <?=$topic->getPhoto()?></a>
        <a class="b-topic__title" href="news/topic/<?=$topic->getID()?>"> <?=$topic->getTitle()?> </a>
        <div class="b-topic__time">  <?=$topic->getTime()?>  </div>
        <div class="b-topic__address"> <?=$topic->getPlace()?><?=$topic->getAddress()?><?=$topic->getCity()?>, <?=$topic->getCountry()?> </div>
    </div>

<?php } endforeach; ?>

</div>


<div class="content">

    <?php foreach($topics as $topic):?>

        <?php if ($topic->in_top == 'No') {?>

            <div class="b-topic_line">
             <a href="/news/topic/<?=$topic->getID()?>"> <?=$topic->getPhoto()?></a>
                <div class="b-topic_line__text">
                    <a class="b-topic__title" href="/news/topic/<?=$topic->getID()?>"> <?=$topic->getTitle()?> </a><br>
                    <div class="b-topic__subtitle"> <?=$topic->getSubtitle()?> </div>
                    <div class="b-topic__time">  <?=$topic->getTime()?>  </div>
                    <div class="b-topic__address"> <?=$topic->getPlace()?><?=$topic->getAddress()?><?=$topic->getCity()?>, <?=$topic->getCountry()?> </div>
                </div>
            </div>

        <?php } endforeach; ?>
</div>

<div class="sidebar">

   <div class="b-tagscloud">
   </div>

    <a class="twitter-timeline" href="https://twitter.com/24mediapoligon" data-widget-id="478669404717072384">Твиты пользователя @24mediapoligon</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>




    <script type="text/javascript" src="//vk.com/js/api/openapi.js?113"></script>

       <!-- VK Widget -->
       <div id="vk_groups"></div>
       <script type="text/javascript">
           VK.Widgets.Group("vk_groups", {mode: 2, width: "auto", height: "auto"}, 12247713);
    </script>





</div>


