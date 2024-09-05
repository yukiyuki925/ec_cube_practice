<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240904203624 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $pageId = $this->connection->fetchOne('SELECT MAX(id) FROM dtb_page');
        $sortNo = $this->connection->fetchOne('SELECT MAX(sort_no) FROM dtb_page_layout');

        $count = $this->connection->fetchOne("SELECT COUNT(*) FROM dtb_page WHERE url = 'mypage_subscription_index'");
        if ($count <= 0) {
            $pageId++;
            $this->addSql("INSERT INTO dtb_page (id, master_page_id, page_name, url, file_name, edit_type, author, description, keyword, create_date, update_date, meta_robots, meta_tags, discriminator_type) VALUES ($pageId, null, 'ポイント履歴', 'mypage_point_history', 'Mypage/point_history', 2, null, null, null, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'noindex', null, 'page');");

            $sortNo++;
            $this->addSql("INSERT INTO dtb_page_layout (page_id, layout_id, sort_no, discriminator_type) VALUES ($pageId, 2, $sortNo, 'pagelayout')");
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $count = $this->connection->fetchOne("SELECT COUNT(*) FROM dtb_page WHERE url = 'mypage_point_history'");
        if ($count > 0) {
            $this->addSql("DELETE FROM dtb_page_layout WHERE page_id = (SELECT id FROM dtb_page WHERE url = 'mypage_point_history')");
            $this->addSql("DELETE FROM dtb_page WHERE url = 'mypage_point_history'");
        }
    }
}
