<main>
    <div class="content">
        <div style="width:100%;min-height: 200px; margin-top: 5px;padding-top: 5px; float: left;position: relative; background: #f3f3f3">
            <h3> cd /new</h3>
            <div class="element-title-diagonal ecolor-ash etype-general"></div><br>
            <div class="info-bar" style="">
                <ul class="subfield">
                    <?php
                    foreach($article_list as $item => $vol){
                        ?>
                        <li class="url" data-id="<?php echo $vol->id;?>" data-type="2">
                            <div class="info-bar-content">
                                <div class="title"><?php echo $vol->title;?></div>
                                <div class="time"><?php echo substr($vol->create_time,0,7); ?></div>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div style="width:100%;min-height: 200px; margin-top: 5px;padding-top: 5px; float: left;position: relative;background: #f3f3f3">
            <h3> cd /practical</h3>
            <div class="element-title-diagonal ecolor-ash etype-general"></div><br>
        </div>
        <div style="width:100%;min-height: 200px; margin-top: 5px;padding-top: 5px; float: left;position: relative; background: #f3f3f3">
            <h3> cd /model</h3>
            <div class="element-title-diagonal ecolor-ash etype-general"></div><br>
        </div>
    </div>
</main>