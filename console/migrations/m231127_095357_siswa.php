<?php

use yii\db\Migration;

/**
 * Class m231127_095357_siswa
 */
class m231127_095357_siswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%siswa}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'alamat' => $this->text(),
            'jenis_kelamin' => $this->boolean()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231127_095357_siswa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231127_095357_siswa cannot be reverted.\n";

        return false;
    }
    */
}
