<main>
    <div class="content">
        <div style="width:100%;min-height: 200px; margin-top: 5px;padding-top: 5px; float: left;position: relative; background: #f3f3f3">
            <h3> cd /new</h3>
            <div class="element-title-diagonal ecolor-ash etype-general"></div><br>
            <div class="info-bar" style="">
                <ul class="subfield">
                    <?php
                    foreach ($data as $item => $value){
                        ?>
                        <li class="url">
                            <div class="info-bar-content" >
                                <a href="https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&tn=baidu&wd=<?php echo $value['title'] ?>"><div class="title"><?php echo $value['title'] ?></div></a>
                                <div class="time"><?php echo $value['sort'] ?></div>
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