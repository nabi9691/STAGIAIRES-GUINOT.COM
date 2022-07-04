<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220704112746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activites (id INT AUTO_INCREMENT NOT NULL, utilisateurs_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, resume VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX IDX_766B5EB51E969C5 (utilisateurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE auteurs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, resume VARCHAR(255) NOT NULL, date DATE NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, nom_categorie VARCHAR(255) NOT NULL, contenu_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contacts (id INT AUTO_INCREMENT NOT NULL, utilisateurs_id INT DEFAULT NULL, formation VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date DATE NOT NULL, civilite VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, fax VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, villes VARCHAR(255) NOT NULL, departements VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, INDEX IDX_334015731E969C5 (utilisateurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, civilite VARCHAR(255) NOT NULL, resume VARCHAR(255) NOT NULL, titre_cours VARCHAR(255) NOT NULL, date_cours DATE NOT NULL, type_cours VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formations (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, nom_formation VARCHAR(255) NOT NULL, date_formation DATE NOT NULL, civilite VARCHAR(255) NOT NULL, cout_formation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE langages (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, nom_langage VARCHAR(255) NOT NULL, date DATE NOT NULL, objectif VARCHAR(255) NOT NULL, cout_formation VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medias (id INT AUTO_INCREMENT NOT NULL, utilisateurs_id INT DEFAULT NULL, image_name VARCHAR(255) NOT NULL, contenu VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_12D2AF811E969C5 (utilisateurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messages (id INT AUTO_INCREMENT NOT NULL, expediteur_id INT NOT NULL, destinataire_id INT DEFAULT NULL, titre_message VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, contenu_message VARCHAR(255) NOT NULL, creer_date DATETIME NOT NULL, si_message_lu TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_DB021E96989D9B62 (slug), INDEX IDX_DB021E9610335F61 (expediteur_id), INDEX IDX_DB021E96A4F84F6E (destinataire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, formation VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, date_de_naissance DATE DEFAULT NULL, civilite VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(255) DEFAULT NULL, villes VARCHAR(255) DEFAULT NULL, pays VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, email VARCHAR(180) DEFAULT NULL, departement VARCHAR(255) DEFAULT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, slug VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, roles JSON NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_497B315E989D9B62 (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activites ADD CONSTRAINT FK_766B5EB51E969C5 FOREIGN KEY (utilisateurs_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE contacts ADD CONSTRAINT FK_334015731E969C5 FOREIGN KEY (utilisateurs_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE medias ADD CONSTRAINT FK_12D2AF811E969C5 FOREIGN KEY (utilisateurs_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E9610335F61 FOREIGN KEY (expediteur_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E96A4F84F6E FOREIGN KEY (destinataire_id) REFERENCES utilisateurs (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activites DROP FOREIGN KEY FK_766B5EB51E969C5');
        $this->addSql('ALTER TABLE contacts DROP FOREIGN KEY FK_334015731E969C5');
        $this->addSql('ALTER TABLE medias DROP FOREIGN KEY FK_12D2AF811E969C5');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E9610335F61');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E96A4F84F6E');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE auteurs');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE contacts');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE formations');
        $this->addSql('DROP TABLE langages');
        $this->addSql('DROP TABLE medias');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
