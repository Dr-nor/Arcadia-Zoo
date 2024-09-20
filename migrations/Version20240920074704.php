<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240920074704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vetreport (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT DEFAULT NULL, user_id INT DEFAULT NULL, state VARCHAR(255) DEFAULT NULL, diet VARCHAR(255) DEFAULT NULL, grammage VARCHAR(255) DEFAULT NULL, detail VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_907122315EB747A3 (animal_id_id), INDEX IDX_90712231A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vetreport ADD CONSTRAINT FK_907122315EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE vetreport ADD CONSTRAINT FK_90712231A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vetreport DROP FOREIGN KEY FK_907122315EB747A3');
        $this->addSql('ALTER TABLE vetreport DROP FOREIGN KEY FK_90712231A76ED395');
        $this->addSql('DROP TABLE vetreport');
    }
}
