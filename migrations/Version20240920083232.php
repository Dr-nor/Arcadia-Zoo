<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240920083232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE habitatreport (id INT AUTO_INCREMENT NOT NULL, habitat_id_id INT DEFAULT NULL, user_id INT DEFAULT NULL, report VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_11FD7F7620AE7A39 (habitat_id_id), INDEX IDX_11FD7F76A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE habitatreport ADD CONSTRAINT FK_11FD7F7620AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES habitat (id)');
        $this->addSql('ALTER TABLE habitatreport ADD CONSTRAINT FK_11FD7F76A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habitatreport DROP FOREIGN KEY FK_11FD7F7620AE7A39');
        $this->addSql('ALTER TABLE habitatreport DROP FOREIGN KEY FK_11FD7F76A76ED395');
        $this->addSql('DROP TABLE habitatreport');
    }
}
