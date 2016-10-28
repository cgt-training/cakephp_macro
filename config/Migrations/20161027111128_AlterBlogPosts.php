<?php
use Migrations\AbstractMigration;

class AlterBlogPosts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('blog_posts');
        $table->addColumn('flag', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->update();
    }
}
