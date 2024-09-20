<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240920113825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal (id INT AUTO_INCREMENT NOT NULL, race_id_id INT DEFAULT NULL, habitat_id_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, medianlife INT NOT NULL, diet VARCHAR(255) DEFAULT NULL, weight VARCHAR(255) DEFAULT NULL, size VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_6AAB231F997ABF46 (race_id_id), INDEX IDX_6AAB231F20AE7A39 (habitat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, fullname VARCHAR(50) NOT NULL, email VARCHAR(180) NOT NULL, phone VARCHAR(10) DEFAULT NULL, subject VARCHAR(100) DEFAULT NULL, message LONGTEXT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dailydiet (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT DEFAULT NULL, user_id INT DEFAULT NULL, diet VARCHAR(255) DEFAULT NULL, qty VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_D2BD9AB65EB747A3 (animal_id_id), INDEX IDX_D2BD9AB6A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitat (id INT AUTO_INCREMENT NOT NULL, animal_ids_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', slug VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3B37B2E8A8F0F830 (animal_ids_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitatreport (id INT AUTO_INCREMENT NOT NULL, habitat_id_id INT DEFAULT NULL, user_id INT DEFAULT NULL, report VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_11FD7F7620AE7A39 (habitat_id_id), INDEX IDX_11FD7F76A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, service_id INT DEFAULT NULL, habitat_id INT DEFAULT NULL, animal_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_C53D045FED5CA9E6 (service_id), INDEX IDX_C53D045FAFFE2D26 (habitat_id), INDEX IDX_C53D045F8E962C16 (animal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opening (id INT AUTO_INCREMENT NOT NULL, weekday VARCHAR(255) NOT NULL, start_time TIME DEFAULT NULL, end_time TIME DEFAULT NULL, pause_start TIME DEFAULT NULL, pause_end TIME DEFAULT NULL, is_closed TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_E35D4C34B8ED78F (weekday), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE testimonial (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, active TINYINT(1) NOT NULL, pseudonym VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) DEFAULT NULL, comment LONGTEXT NOT NULL, note INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_E6BDCDF7A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, fullname VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vetreport (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT DEFAULT NULL, user_id INT DEFAULT NULL, state VARCHAR(255) DEFAULT NULL, diet VARCHAR(255) DEFAULT NULL, grammage VARCHAR(255) DEFAULT NULL, detail VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_907122315EB747A3 (animal_id_id), INDEX IDX_90712231A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F997ABF46 FOREIGN KEY (race_id_id) REFERENCES race (id)');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F20AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES habitat (id)');
        $this->addSql('ALTER TABLE dailydiet ADD CONSTRAINT FK_D2BD9AB65EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE dailydiet ADD CONSTRAINT FK_D2BD9AB6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE habitat ADD CONSTRAINT FK_3B37B2E8A8F0F830 FOREIGN KEY (animal_ids_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE habitatreport ADD CONSTRAINT FK_11FD7F7620AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES habitat (id)');
        $this->addSql('ALTER TABLE habitatreport ADD CONSTRAINT FK_11FD7F76A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FAFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F8E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE testimonial ADD CONSTRAINT FK_E6BDCDF7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE vetreport ADD CONSTRAINT FK_907122315EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE vetreport ADD CONSTRAINT FK_90712231A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F997ABF46');
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F20AE7A39');
        $this->addSql('ALTER TABLE dailydiet DROP FOREIGN KEY FK_D2BD9AB65EB747A3');
        $this->addSql('ALTER TABLE dailydiet DROP FOREIGN KEY FK_D2BD9AB6A76ED395');
        $this->addSql('ALTER TABLE habitat DROP FOREIGN KEY FK_3B37B2E8A8F0F830');
        $this->addSql('ALTER TABLE habitatreport DROP FOREIGN KEY FK_11FD7F7620AE7A39');
        $this->addSql('ALTER TABLE habitatreport DROP FOREIGN KEY FK_11FD7F76A76ED395');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FED5CA9E6');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FAFFE2D26');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F8E962C16');
        $this->addSql('ALTER TABLE testimonial DROP FOREIGN KEY FK_E6BDCDF7A76ED395');
        $this->addSql('ALTER TABLE vetreport DROP FOREIGN KEY FK_907122315EB747A3');
        $this->addSql('ALTER TABLE vetreport DROP FOREIGN KEY FK_90712231A76ED395');
        $this->addSql('DROP TABLE animal');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE dailydiet');
        $this->addSql('DROP TABLE habitat');
        $this->addSql('DROP TABLE habitatreport');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE opening');
        $this->addSql('DROP TABLE race');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE testimonial');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vetreport');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
