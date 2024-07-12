<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240712200520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bullet_point (id INT AUTO_INCREMENT NOT NULL, mile_stone_id INT NOT NULL, INDEX IDX_4D36B8FB431BE2AC (mile_stone_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bullet_point_tag (bullet_point_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_55B93C2F3C76E865 (bullet_point_id), INDEX IDX_55B93C2FBAD26311 (tag_id), PRIMARY KEY(bullet_point_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bullet_point ADD CONSTRAINT FK_4D36B8FB431BE2AC FOREIGN KEY (mile_stone_id) REFERENCES mile_stone (id)');
        $this->addSql('ALTER TABLE bullet_point_tag ADD CONSTRAINT FK_55B93C2F3C76E865 FOREIGN KEY (bullet_point_id) REFERENCES bullet_point (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bullet_point_tag ADD CONSTRAINT FK_55B93C2FBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bullet_point DROP FOREIGN KEY FK_4D36B8FB431BE2AC');
        $this->addSql('ALTER TABLE bullet_point_tag DROP FOREIGN KEY FK_55B93C2F3C76E865');
        $this->addSql('ALTER TABLE bullet_point_tag DROP FOREIGN KEY FK_55B93C2FBAD26311');
        $this->addSql('DROP TABLE bullet_point');
        $this->addSql('DROP TABLE bullet_point_tag');
        $this->addSql('DROP TABLE tag');
    }
}
