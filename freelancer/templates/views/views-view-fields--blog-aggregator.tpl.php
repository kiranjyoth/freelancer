<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

$title = $fields['title']->raw;
$body = $fields['body']->content;
$path = $fields['path']->content;
$date = $fields['created']->content;
$author = $fields['name']->content;
$image = $fields['field_image']->content;

?>
<!-- <h2><a href="<?php print $path;?>"><?php print $title;?></a></h2>
<p class="lead">by <a href="#"><?php print $author; ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> <?php print $date; ?></p>
<hr>
<img class="img-responsive" src="<?php print $image;?>" alt="<?php print $title;?>">
<hr>
<p><?php print $body; ?></p>
<a class="btn btn-primary" href="<?php print $path; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>
 -->
             <div class="col-md-4 portfolio-item">
             	<div class="wrapper">
                <a href="<?php print $path; ?>">
                    <img class="img-responsive" src="<?php print $image;?>" alt="<?php print $title;?>">
                </a>
                <h3>
                    <a href="<?php print $path; ?>"><?php print $title; ?></a>
                </h3>
                <p><small><?php print $body; ?><small></p>
            </div>
        </div>