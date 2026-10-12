<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBannedStatusToTblprogramEnrollment extends Migration
{
    public function up()
    {
        $this->db->query("ALTER TABLE `tblprogram_enrollment` MODIFY COLUMN `status` ENUM('waiting','contacted','active','finished','rejected','banned','enrolled','in_progress') NOT NULL DEFAULT 'waiting'");
    }

    public function down()
    {
        $this->db->query("ALTER TABLE `tblprogram_enrollment` MODIFY COLUMN `status` ENUM('waiting','contacted','active','finished','rejected','enrolled','in_progress') NOT NULL DEFAULT 'waiting'");
    }
}
