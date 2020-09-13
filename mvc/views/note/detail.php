<main>
    <div class="content">
        <div style="width:100%;min-height: 200px; margin-top: 5px;padding-top: 5px; float: left;position: relative; background: #f3f3f3">
            <div class="element-title-diagonal ecolor-ash etype-general"></div><br>
            <h2><?php echo $article->title ?></h2>
            <div id="test-editormd-view">
                <textarea id="hide-textarea" hidden><?php echo isset($content->content)?html_entity_decode($content->content):''; ?></textarea>
            </div>
        </div>
        <div style="width:100%;min-height: 200px; margin-top: 5px;padding-top: 5px; float: left;position: relative; background: #f3f3f3">
            <h3> cd /note</h3>
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
    </div>
</main>
<script src="../../../public/static/editor.md/editormd.js"></script>
<script>
    $(function() {
        var testEditormdView = editormd.markdownToHTML("test-editormd-view", {
            markdown:$('#hide-textarea').text(),
            htmlDecode: "style,script,iframe",  // you can filter tags decode
            emoji: true,
            taskList: true,
            tex: true,  // 默认不解析
            flowChart: true,  // 默认不解析
            sequenceDiagram: true,  // 默认不解析,
        });
    });
</script>