<?php
// Cron job optimization: Delete once a week instead of 30 days.

add_filter( 'action_scheduler_retention_period', 'wpb_action_scheduler_purge' );
/**
 * Change Action Scheduler default purge to 1 week
 */
function wpb_action_scheduler_purge() {
 return WEEK_IN_SECONDS;
}
