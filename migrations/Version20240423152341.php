<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423152341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bullet_points (id INT AUTO_INCREMENT NOT NULL, milestone_id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, info LONGTEXT DEFAULT NULL, INDEX IDX_312CD2274B3E2EDA (milestone_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, project_id INT NOT NULL, parent_comment_id INT DEFAULT NULL, textdata LONGTEXT NOT NULL, INDEX IDX_9474526CA76ED395 (user_id), INDEX IDX_9474526C166D1F9C (project_id), INDEX IDX_9474526CBF2AF943 (parent_comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mile_stone (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, description LONGTEXT NOT NULL, start_date DATE NOT NULL, end_date DATE DEFAULT NULL, tags JSON DEFAULT NULL, bullets JSON DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, mile_stone_id INT DEFAULT NULL, name VARCHAR(150) NOT NULL, description LONGTEXT DEFAULT NULL, fileref LONGTEXT NOT NULL, iconref LONGTEXT DEFAULT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_2FB3D0EE431BE2AC (mile_stone_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(250) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, name VARCHAR(180) NOT NULL, google_id VARCHAR(355) DEFAULT NULL, avatar LONGTEXT DEFAULT NULL, hosted_domain VARCHAR(355) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D6495E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bullet_points ADD CONSTRAINT FK_312CD2274B3E2EDA FOREIGN KEY (milestone_id) REFERENCES mile_stone (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CBF2AF943 FOREIGN KEY (parent_comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE431BE2AC FOREIGN KEY (mile_stone_id) REFERENCES mile_stone (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bullet_points DROP FOREIGN KEY FK_312CD2274B3E2EDA');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C166D1F9C');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CBF2AF943');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE431BE2AC');
        $this->addSql('DROP TABLE bullet_points');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE mile_stone');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
