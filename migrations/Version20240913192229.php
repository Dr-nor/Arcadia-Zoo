<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240913192229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal (id INT AUTO_INCREMENT NOT NULL, race_id_id INT DEFAULT NULL, habitat_id_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, medianlife INT NOT NULL, diet VARCHAR(255) DEFAULT NULL, weight VARCHAR(255) DEFAULT NULL, size VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_6AAB231F997ABF46 (race_id_id), INDEX IDX_6AAB231F20AE7A39 (habitat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F997ABF46 FOREIGN KEY (race_id_id) REFERENCES race (id)');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F20AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES habitat (id)');
        $this->addSql('ALTER TABLE habitat ADD animal_ids_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE habitat ADD CONSTRAINT FK_3B37B2E8A8F0F830 FOREIGN KEY (animal_ids_id) REFERENCES animal (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3B37B2E8A8F0F830 ON habitat (animal_ids_id)');
        $this->addSql('ALTER TABLE image ADD animal_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F8E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F8E962C16 ON image (animal_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habitat DROP FOREIGN KEY FK_3B37B2E8A8F0F830');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F8E962C16');
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F997ABF46');
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F20AE7A39');
        $this->addSql('DROP TABLE animal');
        $this->addSql('DROP TABLE race');
        $this->addSql('DROP INDEX UNIQ_3B37B2E8A8F0F830 ON habitat');
        $this->addSql('ALTER TABLE habitat DROP animal_ids_id');
        $this->addSql('DROP INDEX IDX_C53D045F8E962C16 ON image');
        $this->addSql('ALTER TABLE image DROP animal_id');
    }
}
