<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240609023842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO mtb_blood_type (id, name, sort_no, discriminator_type) VALUES (1, 'A型', 1, 'bloodtype')");
        $this->addSql("INSERT INTO mtb_blood_type (id, name, sort_no, discriminator_type) VALUES (2, 'B型', 2, 'bloodtype')");
        $this->addSql("INSERT INTO mtb_blood_type (id, name, sort_no, discriminator_type) VALUES (3, 'O型', 3, 'bloodtype')");
        $this->addSql("INSERT INTO mtb_blood_type (id, name, sort_no, discriminator_type) VALUES (4, 'AB型', 4, 'bloodtype')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM mtb_blood_type WHERE id = 1');
        $this->addSql('DELETE FROM mtb_blood_type WHERE id = 2');
        $this->addSql('DELETE FROM mtb_blood_type WHERE id = 3');
        $this->addSql('DELETE FROM mtb_blood_type WHERE id = 4');
    }
}
