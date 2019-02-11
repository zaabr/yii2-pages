<?php
namespace zaabr\pages\models;
use Yii;
use yii\db\ActiveRecord;
class Categories extends ActiveRecord{
    public static function tableName()
    {
        return '{{%categories}}';
    }
/*
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
*/
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['c_name', 'c_title'], 'required'],
            [['c_url', 'c_note'], 'string'],
            [['c_subid', 'c_num', 'c_v', 'c_del'], 'integer'],
            [['c_name', 'c_url', 'c_title', 'c_keywords'], 'string', 'max' => 255],
            [['c_descr'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'c_id' => Yii::t('app', 'ID'),
            'c_name' => Yii::t('app', 'Название'),
            'c_title' => Yii::t('app', 'Title'),
            'c_descr' => Yii::t('app', 'Description'),
            'c_keywords' => Yii::t('app', 'Keywords'),
            'c_url' => Yii::t('app', 'Ссылка транслитерации'),
			'c_note'=>Yii::t('app', 'Описание'),
			'c_num'=>Yii::t('app', 'Порядок следования в уровне'),
            'c_subid' => Yii::t('app', 'Входит в Категорию'),
            'c_v' => Yii::t('app', 'Публиковать'),
            'c_del' => Yii::t('app', 'Удалить'),
        ];
    }
    public function getPages()
    {
        return $this->hasMany(Pages::className(), ['p_c_id' => 'c_id']);
    }
}
