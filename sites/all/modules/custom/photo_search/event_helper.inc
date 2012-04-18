<?php
/**
 * @file 
 * Manage event database query 
 */



class event_helper {
  /**
    * Get the event name from content type 'event'
    * @return
    * $event_title return event title,nid array 
    */
  public function get_events() {

    $event_title = db_query("SELECT title,nid FROM {node} WHERE type='event'");
    return $event_title;
  }
       
 /**
   * Get the recent event id 
   * @return
   * $event_id recently created event id
   */
  public function get_recent_event_id($start, $end) {

    $event_id = db_query_range("SELECT nid FROM {node} WHERE type = :type ORDER BY nid DESC", $start, $end, array(':type' => 'event'))->fetchField();
    
    return $event_id;
  }
}

