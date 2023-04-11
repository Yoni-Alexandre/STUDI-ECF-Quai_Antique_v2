<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230411075217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bodies (id INT AUTO_INCREMENT NOT NULL, image_title_one VARCHAR(255) NOT NULL, image_one VARCHAR(255) NOT NULL, image_property_one VARCHAR(255) NOT NULL, content_image_one LONGTEXT NOT NULL, image_title_two VARCHAR(255) NOT NULL, image_two VARCHAR(255) NOT NULL, image_property_two VARCHAR(255) NOT NULL, content_image_two LONGTEXT NOT NULL, image_title_three VARCHAR(255) NOT NULL, image_three VARCHAR(255) NOT NULL, image_property_three VARCHAR(255) NOT NULL, content_image_three LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE headers (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, content LONGTEXT NOT NULL, btn_title VARCHAR(100) NOT NULL, btn_url VARCHAR(255) NOT NULL, illustration VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_illustrations (id INT AUTO_INCREMENT NOT NULL, illustration_circle_one VARCHAR(255) NOT NULL, content_illustration_circle_one LONGTEXT NOT NULL, title_circle_one VARCHAR(255) NOT NULL, btn_circle_one VARCHAR(255) NOT NULL, btn_url_circle_one VARCHAR(255) NOT NULL, illustration_circle_two VARCHAR(255) NOT NULL, content_illustration_circle_two LONGTEXT NOT NULL, title_circle_two VARCHAR(255) NOT NULL, btn_circle_two VARCHAR(255) NOT NULL, btn_url_circle_two VARCHAR(255) NOT NULL, illustration_circle_three VARCHAR(255) NOT NULL, content_illustration_circle_three LONGTEXT NOT NULL, title_circle_three VARCHAR(255) NOT NULL, btn_circle_three VARCHAR(255) NOT NULL, btn_url_circle_three VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menus (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, option_one LONGTEXT DEFAULT NULL, option_two LONGTEXT DEFAULT NULL, option_three LONGTEXT DEFAULT NULL, option_four LONGTEXT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opening_hours (id INT AUTO_INCREMENT NOT NULL, bloc_one VARCHAR(255) NOT NULL, bloc_two VARCHAR(255) NOT NULL, bloc_three VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, categories_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price DOUBLE PRECISION NOT NULL, slug VARCHAR(255) NOT NULL, illustration VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, INDEX IDX_B3BA5A5AA21214B7 (categories_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_count (id INT AUTO_INCREMENT NOT NULL, maximun_number_of_reservation INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservations (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, number_of_guest INT NOT NULL, allergie VARCHAR(255) NOT NULL, reservation_date DATE NOT NULL, reservation_time TIME NOT NULL, lastname VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, INDEX IDX_4DA23967B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, lastname VARCHAR(100) NOT NULL, firstname VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA23967B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AA21214B7');
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY FK_4DA23967B3B43D');
        $this->addSql('DROP TABLE bodies');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE headers');
        $this->addSql('DROP TABLE home_illustrations');
        $this->addSql('DROP TABLE menus');
        $this->addSql('DROP TABLE opening_hours');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE reservation_count');
        $this->addSql('DROP TABLE reservations');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
