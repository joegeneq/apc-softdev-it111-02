<?php
$this->title = 'Events';
?>
<br/>
<br/>
<br/>
<div class="accordion" id="accordion2">
    <form class="form-inline" actions="" method="get">

        <input type="hidden" name="r" value="site/gallery">
        <div class="form-group">
            <select name="year" class="form-control" style="width: 200px !important;">
                <?php foreach ($eventsDate as $key => $eventdate) { ?>
                    <?php $date = explode("-",$eventdate->eventDate)?>
                    <option><?php echo $date[0]?></option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <select name="month" class="form-control" style="width: 100px">
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sept</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
            </select>
        </div>
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