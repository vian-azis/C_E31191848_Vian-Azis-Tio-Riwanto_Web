<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model
{
    /**
     * Check User Login in Database
     * @param: {array} userData
     */
    public function check_loginAdmin($userData)
    {

        /**
         * First Check Email is Exists in Database
         */
        $query = $this->db->get_where('tm_user', array('username' => $userData['username']));
        if ($this->db->affected_rows() > 0) {

            $password = $query->row('password');

            /**
             * Check Password Hash 
             */
            if (password_verify($userData['password'], $password) === TRUE) {

                /**
                 * Password and Email Address Valid
                 */
                return [
                    'status' => TRUE,
                    'data' => $query->row(),
                ];
            } else {
                return ['status' => FALSE, 'data' => FALSE];
            }
        } else {
            return ['status' => FALSE, 'data' => FALSE];
        }
    }
}
