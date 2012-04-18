<?php
/**
 * @file 
 * user database query management 
 */

class user_custom_model{

  /**
   * Get the role id for set the user role as photographer to access the photgrapher page
   * this function return the role id of the photographer
   */
  public function get_role_id() {

    $rid = db_query("SELECT rid FROM {role} WHERE name='Photographer'")->fetchObject();

    return $rid;
  }

  /**
   * Update the user role as photographer
   * @param $role_id,$uid
   *  $role_id is the id of the photographer role
   *  $uid is user id of the current user
   *  By using this function we can set the user role as photographer when user creating the account 
   */

  public function user_role_update($role_id, $uid) {
    db_update('users')
                    ->fields(array(
                    'role' => $role_id,
                    ))
                    ->condition('uid', $uid)
                    ->execute();

  }
  /**
   * To manage user role for each user like photographer or runner
   * @param $role_id
   * $role_id is user role id.It is used to set the role for user
   */
  public function user_role_id_insert($role_id, $uid) {
    db_insert('users_roles')
                    ->fields(array(
                    'uid' => $uid,
                    'rid' => $role_id,
                    ))->execute();

  }
    
}

