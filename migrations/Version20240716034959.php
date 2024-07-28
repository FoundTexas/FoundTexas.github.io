<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240716034959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE organization (id INT AUTO_INCREMENT NOT NULL, location_id INT DEFAULT NULL, name VARCHAR(350) NOT NULL, INDEX IDX_C1EE637C64D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE organization ADD CONSTRAINT FK_C1EE637C64D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('ALTER TABLE mile_stone ADD organization_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mile_stone ADD CONSTRAINT FK_4B434EEA32C8A3DE FOREIGN KEY (organization_id) REFERENCES organization (id)');
        $this->addSql('CREATE INDEX IDX_4B434EEA32C8A3DE ON mile_stone (organization_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mile_stone DROP FOREIGN KEY FK_4B434EEA32C8A3DE');
        $this->addSql('ALTER TABLE organization DROP FOREIGN KEY FK_C1EE637C64D218E');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE organization');
        $this->addSql('DROP INDEX IDX_4B434EEA32C8A3DE ON mile_stone');
        $this->addSql('ALTER TABLE mile_stone DROP organization_id');
    }
}
