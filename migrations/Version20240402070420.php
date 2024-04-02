<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240402070420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bullet_points (id INT AUTO_INCREMENT NOT NULL, milestone_id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, info LONGTEXT DEFAULT NULL, INDEX IDX_312CD2274B3E2EDA (milestone_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bullet_points ADD CONSTRAINT FK_312CD2274B3E2EDA FOREIGN KEY (milestone_id) REFERENCES mile_stone (id)');
        $this->addSql('ALTER TABLE mile_stone DROP bulletpoints');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bullet_points DROP FOREIGN KEY FK_312CD2274B3E2EDA');
        $this->addSql('DROP TABLE bullet_points');
        $this->addSql('ALTER TABLE mile_stone ADD bulletpoints JSON DEFAULT NULL');
    }
}
