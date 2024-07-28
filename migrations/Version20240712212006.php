<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240712212006 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bullet_point_tag DROP FOREIGN KEY FK_55B93C2F3C76E865');
        $this->addSql('ALTER TABLE bullet_point_tag DROP FOREIGN KEY FK_55B93C2FBAD26311');
        $this->addSql('DROP INDEX IDX_55B93C2F3C76E865 ON bullet_point_tag');
        $this->addSql('ALTER TABLE bullet_point_tag ADD id INT AUTO_INCREMENT NOT NULL, CHANGE bullet_point_id bulletpoint_id INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE bullet_point_tag ADD CONSTRAINT FK_55B93C2F53CE9484 FOREIGN KEY (bulletpoint_id) REFERENCES bullet_point (id)');
        $this->addSql('ALTER TABLE bullet_point_tag ADD CONSTRAINT FK_55B93C2FBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id)');
        $this->addSql('CREATE INDEX IDX_55B93C2F53CE9484 ON bullet_point_tag (bulletpoint_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bullet_point_tag MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE bullet_point_tag DROP FOREIGN KEY FK_55B93C2F53CE9484');
        $this->addSql('ALTER TABLE bullet_point_tag DROP FOREIGN KEY FK_55B93C2FBAD26311');
        $this->addSql('DROP INDEX IDX_55B93C2F53CE9484 ON bullet_point_tag');
        $this->addSql('DROP INDEX `PRIMARY` ON bullet_point_tag');
        $this->addSql('ALTER TABLE bullet_point_tag DROP id, CHANGE bulletpoint_id bullet_point_id INT NOT NULL');
        $this->addSql('ALTER TABLE bullet_point_tag ADD CONSTRAINT FK_55B93C2F3C76E865 FOREIGN KEY (bullet_point_id) REFERENCES bullet_point (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bullet_point_tag ADD CONSTRAINT FK_55B93C2FBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_55B93C2F3C76E865 ON bullet_point_tag (bullet_point_id)');
        $this->addSql('ALTER TABLE bullet_point_tag ADD PRIMARY KEY (bullet_point_id, tag_id)');
    }
}
