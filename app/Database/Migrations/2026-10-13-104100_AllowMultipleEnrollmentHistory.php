<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AllowMultipleEnrollmentHistory extends Migration
{
    public function up()
    {
        // Drop unique key uk_member_program to allow enrollment history rows
        try {
            $this->db->query("ALTER TABLE `tblprogram_enrollment` DROP INDEX `uk_member_program`");
        } catch (\Throwable $e) {
            // Ignore if index doesn't exist
        }

        try {
            $this->db->query("ALTER TABLE `tblprogram_enrollment` ADD INDEX `idx_member_program` (`member_id`, `program_id`)");
        } catch (\Throwable $e) {
            // Ignore if index already exists
        }
    }

    public function down()
    {
        try {
            $this->db->query("ALTER TABLE `tblprogram_enrollment` DROP INDEX `idx_member_program`");
        } catch (\Throwable $e) {
            // Ignore
        }

        try {
            $this->db->query("ALTER TABLE `tblprogram_enrollment` ADD UNIQUE KEY `uk_member_program` (`member_id`, `program_id`)");
        } catch (\Throwable $e) {
            // Ignore
        }
    }
}
