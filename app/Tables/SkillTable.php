<?php
namespace App\Tables;

use \Core\Tables\Table;

class SkillTable extends Table {
    protected $table = 'skills';

    public function search($label) {
        return $this->query("SELECT * FROM $this->table WHERE label = ?", [$label], true);
    }

    public function allWithGroups() {
        return $this->query("SELECT name, level, label FROM skills, skill_groups WHERE skills.skill_groups_id = skill_groups.id");
    }
}