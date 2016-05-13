<?php
namespace App\Tables;

use \Core\Tables\Table;

class SkillGroupTable extends Table {
    protected $table = 'skill_groups';

    public function search($label) {
        return $this->query("SELECT * FROM $this->table WHERE label = ?", [$label], true);
    }
}