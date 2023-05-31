<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230531092153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE metting (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, date DATETIME NOT NULL, status BOOLEAN NOT NULL, location VARCHAR(255) NOT NULL, CONSTRAINT FK_A8955F0BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_A8955F0BA76ED395 ON metting (user_id)');
        $this->addSql('CREATE TABLE "order" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, video_id INTEGER NOT NULL, metting_id INTEGER NOT NULL, date DATETIME NOT NULL, amount DOUBLE PRECISION NOT NULL, status BOOLEAN NOT NULL, CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_F529939829C1004E FOREIGN KEY (video_id) REFERENCES video (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_F5299398D7520C29 FOREIGN KEY (metting_id) REFERENCES metting (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_F5299398A76ED395 ON "order" (user_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F529939829C1004E ON "order" (video_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F5299398D7520C29 ON "order" (metting_id)');
        $this->addSql('CREATE TABLE video (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, content CLOB NOT NULL, status BOOLEAN NOT NULL, CONSTRAINT FK_7CC7DA2CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2CA76ED395 ON video (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE metting');
        $this->addSql('DROP TABLE "order"');
        $this->addSql('DROP TABLE video');
    }
}
