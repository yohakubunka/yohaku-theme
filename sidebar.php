<div class="sidebar">
<h3>カテゴリー</h3>
<ul class="category-list">
<?php
// パラメータを指定
$args = array(
	// カテゴリー内の記事数順で指定
    'orderby' => 'count',
    // 降順で指定
    'order' => 'DSC'
);
$categories = get_categories( $args );

foreach( $categories as $category ){
	echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
}
?>
</ul>

<?php
$year_prev = null;
$postType = get_post_type( );
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                    YEAR( post_date ) AS year,
                                    COUNT( id ) as post_count FROM $wpdb->posts
                                    WHERE post_status = 'publish' and post_date <= now( )
                                    and post_type = '$postType'
                                    GROUP BY month , year
                                    ORDER BY post_date DESC");
foreach($months as $month):
    $year_current = $month->year;
    if ($year_current != $year_prev) { ?>
        <?php if($year_prev != null): ?>
            </ul>
        <?php endif; ?>

        <h3><?php echo $month->year; ?>年</h3>
        <ul>
    <?php } ?>
            <li>
                <a href="<?php echo esc_url(home_url()); ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
                    <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月(<?php echo $month->post_count; ?>)
                </a>
            </li>
            <?php $year_prev = $year_current; ?>
<?php endforeach; ?>
        </ul>
</div>
