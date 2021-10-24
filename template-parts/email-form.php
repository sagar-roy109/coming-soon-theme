<?php
$emmail_placeholder = get_post_meta(get_the_ID(), 'email_placeholder', true);
$button_text = get_post_meta(get_the_ID(), 'send_button_text', true);
$form_label = get_post_meta(get_the_ID(), 'email_label', true);
?>
<div class="col-lg-7 animate-box">
    <form action="#" id="fh5co-subscribe">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="<?php echo esc_attr(
                $emmail_placeholder
            ); ?>">
            <input type="submit" value="<?php echo esc_attr(
                $button_text
            ); ?>" class="btn btn-primary">
            <p class="tip">
                <?php echo esc_html($form_label); ?>
            </p>
        </div>
    </form>
</div>