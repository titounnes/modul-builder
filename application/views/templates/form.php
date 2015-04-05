&lt;h2&gt;&lt;?php echo $title ?&gt;&lt;/h2&gt;

&lt;?php echo validation_errors(); ?&gt;

&lt;?php echo form_open('<?php echo $c_name?>/submit') ?&gt;

    &lt;label for="title"&gt;Title&lt;/label&gt;
    &lt;input type="input" name="title" value="&lt;?php echo $<?php echo $o_name?>_item[0]->title?&gt;" /&gt;&lt;br /&gt;
    &lt;input type="input" name="slug" value="&lt;?php echo $<?php echo $o_name?>_item[0]->slug?&gt;" /&gt;&lt;br /&gt;

    &lt;label for="text"&gt;Text&lt;/label&gt;
    &lt;textarea name="text"&gt;&lt;/textarea&gt;&lt;br /&gt;

    &lt;input type="submit" name="submit" value="Save <?php echo $o_name?> item" /&gt;

&lt;/form&gt;
