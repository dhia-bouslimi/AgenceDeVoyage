<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308024506 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis ADD avis_score INT NOT NULL, ADD description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD avis_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649197E709F FOREIGN KEY (avis_id) REFERENCES avis (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649197E709F ON user (avis_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP avis_score, DROP description');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649197E709F');
        $this->addSql('DROP INDEX IDX_8D93D649197E709F ON user');
        $this->addSql('ALTER TABLE user DROP avis_id');
    }
}