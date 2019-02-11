<?php
namespace zaabr\pages\models;
use Yii;
use yii\db\ActiveRecord;
class Pages extends ActiveRecord{
    public static function tableName()
    {
        return '{{%pages}}';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_name', 'p_title', 'p_anons'], 'required'],
            [['p_url', 'p_anons', 'p_note'], 'string'],
            [['p_count', 'p_c_id', 'p_v', 'p_del', 'p_v1', 'p_v2', 'p_v3', 'p_createduser_id', 'p_pubuser_id', 'p_deluser_id'], 'integer'],
            [['p_c_id'], 'exist', 'skipOnError' => true, 'targetClass' => Catigories::className(), 'targetAttribute' => ['p_c_id' => 'c_id']],
            [['p_name', 'p_url', 'p_title', 'p_keywords'], 'string', 'max' => 255],
            [['p_descr'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'p_id' => Yii::t('app', 'ID'),
            'p_c_id' => Yii::t('app', 'ID Категории'),
            'p_name' => Yii::t('app', 'Заголовок'),
            'p_title' => Yii::t('app', 'Title'),
            'p_descr' => Yii::t('app', 'Description'),
            'p_keywords' => Yii::t('app', 'Keywords'),
            'p_url' => Yii::t('app', 'Ссылка транслитерации'),
			'p_anons'=>Yii::t('app', 'Анонс'),
			'p_note'=>Yii::t('app', 'Статья после анонса'),
			'p_count'=>Yii::t('app', 'Просмотры'),
            'p_created_at' => Yii::t('app', 'Добавлена'),
            'p_createduser_id' => Yii::t('app', 'ID Пользователя'),
            'p_pub_at' => Yii::t('app', 'Опубликована'),
            'p_pubuser_id' => Yii::t('app', 'Опубликовал'),
            'p_deleted_at' => Yii::t('app', 'Удалена'),
            'p_deluser_id' => Yii::t('app', 'Удалил'),
            'p_v' => Yii::t('app', 'Публиковать'),
            'p_del' => Yii::t('app', 'Удалить'),
            'p_v1' => Yii::t('app', 'v1'),
            'p_v2' => Yii::t('app', 'v2'),
            'p_v3' => Yii::t('app', 'v3'),
        ];
    }
}
