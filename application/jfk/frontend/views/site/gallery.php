<?php
$this->title = 'Event Gallery';
?>
<br/>
<br/>
<br/>
<div class="accordion" id="accordion2">
    <form actions="" method="get">
        <input type="hidden" name="r" value="site/gallery">
        <select name="year" class="form-control" style="width: 200px !important;">
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2006</option>
            <option>2007</option>
            <option>2008</option>
            <option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
        </select>
        <br/>
        <input type="submit" name="search" value="Search" class="btn btn-primary">
    </form>
    <br/>
    <?php if ($events != []) { ?>
        <?php foreach ($events as $key => $event) { ?>
            <div class="accordion-group">
                <?php
                $items = [];
                if (isset($event['images'])) {
                    foreach ($event['images'] as $key2 => $image) {

                        $items[$key2]['url'] = "../../backend/web/" . $image['picture'];
                        $items[$key2]['src'] = "../../backend/web/" . $image['picture'];

                    }
                }

                ?>
                <div class="accordion-heading well">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                       href="#collapse<?php echo $key ?>" style="text-decoration: none; color: black">
                        <h1><?php echo $event['event']['eventName'] ?></h1>
                    </a>

                    <div>
                        <?php echo $event['event']['eventDesc'] ?><br/>
                        <strong>Location: </strong><?php echo $event['event']['eventLocation'] ?><br/>
                        <strong>Date: </strong><?php echo $event['event']['eventDate'] ?>
                    </div>
                </div>
                <div id="collapse<?php echo $key ?>" class="accordion-body collapse in">
                    <div class="accordion-inner">
                        <?php if (isset($event['images'])) { ?>
                            <?= dosamigos\gallery\Gallery::widget(['items' => $items]); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <br/><br/>
        <?php } ?>
    <?php }else{?>
        <h1>No records found!</h1>
    <?php } ?>
</div>