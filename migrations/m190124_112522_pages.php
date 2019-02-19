<?php

use yii\db\Migration;

/**
 * Class m190124_112522_pages
 */
class m190124_112522_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        echo "m190124_112522_pages cannot be reverted.\n";
		return FALSE;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190124_112522_pages cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $tableOptions = null;
      //Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
      //Создание таблицы Категорий Страниц сайта
      $this->createTable('{{%categories}}', [
         'c_id' => $this->primaryKey(),
         'c_subid' => $this->integer()->notNull()->defaultValue(0),
         'c_name' => $this->string(255),
	 'c_url' => $this->string(255)->unique(),
         'c_title' => $this->string(255),
         'c_descr' => $this->string(500),
         'c_keywords' => $this->string(255),
         'c_note' => $this->text(),
         'c_num' => $this->integer(3)->notNull()->defaultValue(10),
         'c_v' => $this->integer(1)->notNull()->defaultValue(0),
         'c_del' => $this->integer(1)->notNull()->defaultValue(0),
      ], $tableOptions);
		
      //Создание таблицы Страниц сайта
      $this->createTable('{{%pages}}', [
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
      ], $tableOptions);

        // creates index for column `c_id`
        $this->createIndex(
            'idx-{{%categories}}-c_id',
            '{{%categories}}',
            'c_id'
        );
        // creates index for column `c_url`
        $this->createIndex(
            'idx-{{%categories}}-c_url',
            '{{%categories}}',
            'c_url'
        );

        // creates index for column `p_url`
        $this->createIndex(
            'idx-{{%pages}}-p_url',
            '{{%pages}}',
            'p_url'
        );

        // creates index for column `p_c_id`
        $this->createIndex(
            'idx-{{%pages}}-p_c_id',
            '{{%pages}}',
            'p_c_id'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-{{%pages}}-c_id',
            '{{%pages}}',
            'p_cat_id',
            '{{%categories}}',
            'c_id',
            'CASCADE'
        );

    }

    /*
    public function down()
    {
        echo "m190124_112522_pages cannot be reverted.\n";

        return false;
    }
    */
}
