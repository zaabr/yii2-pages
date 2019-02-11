<?php if (isset($datas)): ?>
<div class="block">
    <h3 class="red">Вывод тестовых данных</h3>
<?php
/*
         'p_id' => $this->primaryKey(),
         'p_c_id' => $this->integer()->notNull()->defaultValue(0),
         'p_name' => $this->string(255),
		 'p_url' => $this->string(255)->unique(),
         'p_title' => $this->string(255),
         'p_keywords' => $this->string(255),
         'p_descr' => $this->string(500),
         'p_anons' => $this->text(),
         'p_note' => $this->text(),
         'p_count' => $this->integer()->notNull()->defaultValue(0),
		 'p_created_at' => $this->timestamp()->defaultValue(0),
		 'p_pub_at' => $this->timestamp()->defaultValue(NULL),
		 'p_deleted_at' => $this->timestamp()->defaultValue(0),
         'p_v' => $this->integer(1)->notNull()->defaultValue(0),
         'p_del' => $this->integer(1)->notNull()->defaultValue(0),
         'p_createduser_id' => $this->integer()->notNull()->defaultValue(0),
         'p_pubuser_id' => $this->integer()->notNull()->defaultValue(0),
         'p_deluser_id' => $this->integer()->notNull()->defaultValue(0),
         'p_v1' => $this->integer(1)->notNull()->defaultValue(0),
         'p_v2' => $this->integer(1)->notNull()->defaultValue(0),
         'p_v3' => $this->integer(1)->notNull()->defaultValue(0),
*/
?>
    <?php foreach ($datas as $data ): ?>
        <p><?=$data->p_id?></p>
        <p><?=$data->p_c_id?></p>
        <p><?=$data->p_url?></p>
        <p><?=$data->p_title?></p>
        <p><?=$data->p_keywords?></p>
        <p><?=$data->p_descr?></p>
        <p><?=$data->p_anons?></p>
        <p><?=$data->p_note?></p>
        <p><?=$data->p_count?></p>
        <p><?=$data->p_v?></p>
    <?php endforeach; ?>
</div>
<?php endif; ?>
