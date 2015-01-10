<?php
/**
 * Created by PhpStorm.
 * User: Ricky Patel
 * Date: 10/01/15
 * Time: 10:20 AM
 */
class Migration_create_sessions extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'session_id' => array(
                'type' => 'varchar',
                'constraint' => 40
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '45',
            ),
            'user_agent' => array(
                'type' => 'VARCHAR',
                'constraint' => '120'
            ),
            'last_activity' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => TRUE
            ),
            'user_data' => array(
                'type' => 'TEXT'
            ),
        ));
        $this->dbforge->add_key('session_id',TRUE);
        $this->dbforge->create_table('ci_sessions');
        $this->db->query('ALTER TABLE CI_SESSIONS ADD KEY last_activity_idx (last_activity)');
    }

    public function down()
    {
        $this->dbforge->drop_table('ci_sessions');
    }
}