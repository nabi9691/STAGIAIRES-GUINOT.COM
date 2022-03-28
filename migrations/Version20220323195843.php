<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220323195843 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mediats ADD utilisateurs_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mediats ADD CONSTRAINT FK_CEE238D51E969C5 FOREIGN KEY (utilisateurs_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_CEE238D51E969C5 ON mediats (utilisateurs_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mediats DROP FOREIGN KEY FK_CEE238D51E969C5');
        $this->addSql('DROP INDEX IDX_CEE238D51E969C5 ON mediats');
        $this->addSql('ALTER TABLE mediats DROP utilisateurs_id');
    }
}
